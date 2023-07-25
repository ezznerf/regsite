<?php
session_start();
require_once ('AuthInterface.php');
require_once ('SqlBuilder.php');
class Auth extends SqlBuilder implements AuthInterface
{
    private $checkResult;

    /**
     * @param string $checkResult
     */
    public function setCheckResult($checkResult)
    {
        $this->checkResult = $checkResult;
    }

    public function getCheckResult()
    {
        return $this->checkResult;
    }

    public function checkUser($login, $password)
    {
        $builder = new SqlBuilder();
        $mysql = new mysqli('localhost', 'root', '', 'regsite');
        $SQL = $builder->select('*')
            ->from('`users`')
            ->where("`email` = '$login' AND `pass` = '$password'")
            ->sqlResult();
        $connect = mysqli_connect('localhost', 'root', '', 'regsite');
        $mysql = mysqli_query($connect, $SQL);
        $user = mysqli_fetch_assoc($mysql);
        $this->checkResult = $user;
    }

    public function viewUser()
    {
        $user = $this->checkResult;
        if(isset($user)){
            $name = $user['name'];
            $surname = $user['surname'];
            $patronymic = $user['patronymic'];
            echo "<h2> $surname $patronymic ,Добро пожаловть</h2>";
            unset($_SESSION['message']);
        }else{
            header('Location:../main/autorize.php');
            $_SESSION['message'] = "Неправильный логин или пароль!";
        }

    }
}