<?php

if (isset ($_POST['Username']) &&
    isset ($_POST['Lastname'])&&
    isset ($_POST['Country'])&&
    isset($_POST['email'])&&
    isset($_POST['password']) &&
    isset($_POST['re_password'])){

    if ($_POST['password'] === $_POST['re_password']){

        $username = trim ( $_POST['Username'] );
        $lastname = trim($_POST['Lastname']);
        $country = trim($_POST['Country']);
        $email = $_POST['email'];
        $pass = hash('sha256', $_POST['password']);


        include_once ('pdo.php');



    }else{
        echo "please write your password carectly";
    }

}else{
    echo "please write corectly";
}














?>