<?php
require_once ('AuthInterface.php');
require_once ('SqlBuilder.php');
class Auth extends SqlBuilder implements AuthInterface
{
    private array $checkResult;

    /**
     * @param string $checkResult
     */
    public function setCheckResult(array $checkResult): void
    {
        $this->checkResult = $checkResult;
    }

    public function getCheckResult():array
    {
        return $this->checkResult;
    }

    public function checkUser($login, $password)
    {
        $builder = new SqlBuilder();
        $mysql = new mysqli('localhost','root', 'root', 'regsite');
        $SQL = $builder->select('*')
                       ->from('`users`')
                       ->where("`email` = '$login' AND `pass` = '$password'")
                       ->sqlResult();
        $connect = mysqli_connect('localhost', 'root', 'root', 'regsite');
        $mysql = mysqli_query($connect, $SQL);
        $user = mysqli_fetch_assoc($mysql);
        $this->setCheckResult($user);
    }
    public function viewUser()
    {
        $user = $this->getCheckResult();
        $name = $user['name'];
        $surname = $user['surname'];
        $patronymic = $user['patronymic'];
        echo "<h2> $surname $patronymic ,Добро пожаловть</h2>";


    }
}