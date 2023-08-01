<?php
namespace App;
require_once ('../vendor/autoload.php');
session_start();
class Auth extends SqlBuilder implements AuthInterface
{
    private $checkResult;

    public function checkUser($login, $password)
    {
        $builder = new SqlBuilder();
        $SQL = $builder->select('*')
            ->from('`users`')
            ->where("`email` = '$login' AND `pass` = '$password'")
            ->sqlResult();
        $connect = mysqli_connect('localhost', 'root', 'root', 'regsite');
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
            echo "<h2> $name $patronymic, Добро пожаловть</h2>";
            $_SESSION['message'] = NULL;
            header_remove();
        }else{
            header('Location:../main/autorize.php');
//            $_SESSION['message'] = "<form class='result'>Непрный логин или пароль!</form>";

        }

    }
    public function echoMessage($msg)
    {
        if(isset($msg))
        {
            echo $msg;
        }else{
            echo $msg = "";
        }
    }
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

}