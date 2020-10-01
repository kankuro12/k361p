<?php
namespace Controllers;
use Models\Auth;
use Models\User;
use Carbon\Carbon;

class AuthManager{
    public $token;
    public $auth;

    public function __construct(){
        if($this->isLoggedIn()){
            $this->token=$_SESSION['auth'];
            $this->auth=new Auth();
            $this->auth->loadSession($this->token);
        }
    }

     /**
     * This function use to user load
     * 
     * @return User
     */
    public function login($email,$password){
        
        if($this->isLoggedIn()){
            return false;
        }else{
            $user = User::where('email',$email)->where('password',md5($password))->first();
            if($user==null){
                return  false;
            }else{
                $this->token=$this->generateToken($password);
                $user->token=$this->token;
                $user->tokenexpired=Carbon::now()->addMonth();  
                $user->save();
                $this->auth=new Auth();
                $this->auth->loadUser($user);
                $_SESSION['auth']=$this->token;
                return true;
            }
        }
    }

    /**
     * This function load already created auth for verification
     * 
     * @return Token
     */
    private function generateToken($password){
        $timestamp=Carbon::getTestNow();
        $_password=md5($password);
        return $timestamp.$_password;

    }

    public function resetPassword(){

    }

    
    public  function isLoggedIn(){
        return isset($_SESSION['auth']);
    }
 
    /**
     * This function load already created auth for verification
     * @api
     * @return true|false
     */
    public function loadAuth($sessionKey){
        $this->token=$sessionKey;
        if(User::where('token',$this->token)->where('tokenexpired','<',new \DateTime())->count()>0){
            $this->auth=new Auth($sessionKey);
            return true;
        }else{
            return false;
        }
        
    }
}