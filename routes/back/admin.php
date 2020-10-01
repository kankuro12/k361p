<?php
use Controllers\AuthManager;
use Models\User;
/**
 * Admin Group
 */
$app->group('/admin',function () use ($app) {
      /**
       * Dashboard
       */
      $app->get('/', function ( $request, $response)  {
            echo $this->view->make('back.index');
      });
      /**
       * Event Group
       */
      $app->group('/event',function () use ($app) {    
            include('event.php');
      });

      $app->group('/news',function () use ($app) {    
            include('news.php');
      });

      $app->group('/member',function () use ($app) {    
            include('member.php');
      });

      $app->group('/notice',function () use ($app) {    
            include('notice.php');
      });

      /**
       * committes Group
       */
      $app->group('/committe',function () use ($app) {    
            include('committe.php');
      });

       /**
       * committes Group
       */
      $app->group('/board',function () use ($app) {    
            include('boardmember.php');
      });

         /**
       * secretary Group
       */
      $app->group('/secretary',function () use ($app) {    
            include('secretary.php');
      });

      $app->group('/gallery',function () use ($app) {    
            include('gallery.php');
      });

      $app->group('/boardinfo',function () use ($app) {    
            include('boardinfo.php');
      });
      $app->group('/',function () use ($app) {    
            include('supporter.php');
      });

      $app->group('/',function () use ($app) {    
            include('area.php');
      });

      $app->group('/',function () use ($app) {    
            include('message.php');
      });

})->add(function($request,$response,$next){
      $auth=new AuthManager();
      if($auth->isLoggedIn()){
            return $next($request,$response);
      }else{
            return $response->withRedirect('/login/');
      }
});
           
$app->get('/login/',function($request, $response){
      // echo md5("hello");
      echo $this->view->make('back.adminlogin');      
});
             
$app->post('/login/',function($request, $response){
      $parsed = $request->getParsedBody();
      $auth=new AuthManager();
      if($auth->login($parsed['email'],$parsed['password'])){
           return $response->withRedirect('/admin/');
      }else{
            echo $this->view->make('back.adminlogin',['error'=>"Invalid ! email and password"]);
      }
                  
});

$app->get('/admin/logout/',function($request, $response){
     unset($_SESSION['auth']);
     return $response->withRedirect('/login/');     
});

$app->post('/admin/changepass/',function($request, $response,$args){
      $parsed = $request->getParsedBody();
      $auth = new AuthManager();
      if($auth->isLoggedIn()){
           $user = $auth->auth->getUser();
      //      echo "<pre>";
      //      print_r($user);
      //      echo "</pre>";
      //       echo "<hr>";
      //       echo md5($parsed['oldpass']);
            if(md5($parsed['oldpass'])==$user->password){
                  $user->password = md5($parsed['password']);
                  $user->save();
                  $_SESSION['success']="Password changed successfully !";
                  return $response->withRedirect('/admin/');
            }else{
                  $_SESSION['error_1']="Current password cannot be confirmed !";
                  return $response->withRedirect('/admin/');
            }  
      }else{
            return $response->withRedirect('/login/');   
      }
 });
      

