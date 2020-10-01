<?php
namespace Models;


use Models\User;

class Auth{
    private $user;

    public function loadSession($sessionKey){
        $this->user=User::where('token',$sessionKey)->first();
    }
    public  function loadUser($user){
        $this->user=$user;

    }

    public function getUser(){
        return $this->user;
    }



}




