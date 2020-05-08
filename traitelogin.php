<?php 
require_once('Employee.class.php');



$login=$_POST['loginName'];
$password=$_POST['password'];
//echo "<br>";
//echo $login;
//echo $password;
//if ($login=='lotfi' && $password=="123")
if(Employee::verifemplyee($login,$password))
{
    session_start();
    $_SESSION['login']=$login;
    header("location:index.php");

}
else{
    header("location:erreur.php");
}
