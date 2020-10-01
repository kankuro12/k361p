<?php
/**
 * front Group
 */
$app->group('/mcci',function () use ($app) {
      /**
       * news Group
       */
      $app->group('/news',function () use ($app) {    
            include('news.php');
      });

        /**
       * contact Group
       */
      $app->group('/',function () use ($app) {    
            include('contact.php');
      });

        /**
       * service Group
       */
      $app->group('/',function () use ($app) {    
            include('service.php');
      });

        /**
       * Gallery Group
       */
      $app->group('/gallery',function () use ($app) {    
            include('gallery.php');
      });
        /**
       * Event Group
       */
      $app->group('/event',function () use ($app) {    
            include('event.php');
      });
          /**
       * Notice Group
       */
      $app->group('/notice',function () use ($app) {    
            include('notice.php');
      });
       /**
       * Notice Group
       */
      $app->group('/',function () use ($app) {    
            include('committee.php');
      });

        /**
       * login Group
       */
      $app->group('/',function () use ($app) {    
            include('login.php');
      });

         /**
       * supporter Group
       */
      $app->group('/',function () use ($app) {    
            include('supporter.php');
      });

         /**
       * message Group
       */
      $app->group('/',function () use ($app) {    
            include('message.php');
      });
});
