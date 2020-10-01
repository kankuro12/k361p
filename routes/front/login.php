<?php
use Models\Member;
use Models\Boardinfo;

$app->get('private/',function($request,$response,$args){
    if(isset($_SESSION['user'])){
        echo $this->view->make('front.login.content',['infos'=>Boardinfo::orderBy('id','desc')->get()]);
    }else{
        echo "Please Login at first to see this page";
    }
});


$app->post('login/',function($request,$response,$args){
     $parsed = $request->getParsedBody();
     $pass = md5($parsed['password']);
     $member = Member::where('phone', $parsed['phone'])->where('password',$pass)->first();
     if($member==null){
        return $response->withRedirect('/');
     }else{
         $_SESSION['user'] = ['id'=>$member->id,'username'=>$parsed['phone'],'password'=>$parsed['password']];
        //  print_r( $_SESSION['user']);
         return $response->withRedirect('/propeace/private/');
     }
    });

$app->get('logout/',function($request,$response,$args){
       unset($_SESSION['user']);
       return $response->withRedirect('/');
});

$app->get('passchange/',function($request,$response,$args){
    if(isset($_SESSION['user'])){
        echo $this->view->make('front.login.changepass');  
    }else{
        echo "please login at first to see this page";
    }
});

$app->post('passchange/',function($request,$response,$args){
     $parsed = $request->getParsedBody();
     if(isset($_SESSION['user'])){
         $member = Member::where('id',$_SESSION['user']['id'])->first();
         $pass = md5($parsed['old']);
         if($member->password == $pass){
            $member->password = md5($parsed['password']);
            $member->save();
            $_SESSION['success'] = "Successfully Password Has Been Changed";
            return $response->withRedirect('/propeace/passchange/');
         }else{
             $_SESSION['error'] = "Invalid Current password";
             return $response->withRedirect('/propeace/passchange/');
         }
     }
});