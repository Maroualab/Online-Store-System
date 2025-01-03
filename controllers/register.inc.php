<?php

if(isset($_POST["submit"])){


    //grabbing the data from form
    $name = $_POST["name"];
    $pwd = $_POST["pwd"];
    $cpwd =$_POST["cpwd"];
    $email =$_POST["email"];

    //instantiate register class 
    include "../models/dbh.classes.php";
    include "../models/register.classes.php";
    include "../models/register-contr.classes.php";

    $registerNewUser = new RegisterContr($name , $pwd , $pwd,$email);


    //running error handlers and user register
    $registerNewUser->registerUser();


    //going back to front page

    header("location :../public/index.php?error=none");

}