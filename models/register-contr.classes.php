<?php

class RegisterContr extends Register {


    private $name;
    private $pwd;
    private $cpwd;
    private $email;

    public function __construct($name,$pwd,$cpwd,$email){
        $this->name = $name;
        $this->pwd = $pwd;
        $this->cpwd = $cpwd;
        $this->email = $email;

    }

    public function registerUser(){
      if($this->emptyInput() == false){
        header("location:../index.php?error=emptyinput");
        exit();
      }
      if($this->isInvalidName() == false){
        header("location:../index.php?error=username");
        exit();
      }
      if($this->isInvalidEmail() == false){
        header("location:../index.php?error=email");
        exit();
      }
      if($this->pwdMatch() == false){
        header("location:../index.php?error=passwordmatch");
        exit();
      }
      if($this->nameTakenCheck() == false){
        header("location:../index.php?error=useroremailtaken");
        exit();
      }

      $this ->setUser($this->name , $this->pwd , $this->email);

    }
    private function emptyInput(){
        $result =null;
        if(empty($this->name) || empty($this->pwd) || empty($this->cpwd) || empty($this->email)){
            $result = false;
        }else {
            $result= true;
        }
        return $result;

    }
    private function isInvalidName(){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/" , $this->name)){
            $result = false;
        }else {
            $result= true;
        }
        return $result;
    }

    private function isInvalidEmail(){
        $result;
        if( !filter_var($this->email , FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else {
            $result= true;
        }
        return $result;
    }

    private function pwdMatch(){
        $result;
        if($this->pwd !== $this->cpwd){
            $result = false;
        }else {
            $result= true;
        }
        return $result;
    }
    private function nameTakenCheck(){
        $result;
        if(!$this->checkUser($this->name , $this->email)){
            $result = false;
        }else {
            $result= true;
        }
        return $result;


    }










}