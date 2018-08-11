<?php
session_start();
require_once 'pdo.php';


if (isset($_POST['login'])) {
    $user_name = $_POST['username'];
    $password =  hash('sha256', $_POST['password']);

    if(empty($user_name) || empty($password))
    {

        exit('All fields are required');
    } else {

        $query = $conn->query("SELECT * FROM users WHERE user_name = '$user_name' AND password = '$password'");


    }
    $row = $query->fetch(PDO::FETCH_ASSOC);
     //print_r($row); die() ;
    if($row['password'] == $password && $row['user_name'] == $user_name){
        $_SESSION['user_name']=$row['user_name'];

        header('location:login.php');

            if (isset($_POST['remember'])) {
                setcookie('username', $user_name, time() + 60*60*24);
                setcookie('password', $password, time() + 60*60*24);
            }else{

                echo "You did not fill the box to (remember me) so that we do not save your data";
            }



    }else {
        header('location: index.php');
    }

}



?>