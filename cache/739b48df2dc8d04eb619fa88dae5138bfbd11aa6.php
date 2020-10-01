<!DOCTYPE html>
<html lang="en-ne">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="manifest" href="/manifest.json" />

    <!-- Title -->
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Favicon -->
    <link rel="icon" href="/assets/front/img/core-img/">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/assets/front/style.css">

</head>

<body>
<?php echo $__env->make('front.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="">
  <?php echo $__env->yieldContent('content'); ?>
</div>



<?php echo $__env->make('front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="/assets/front/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/assets/front/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/assets/front/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="/assets/front/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="/assets/front/js/active.js"></script>
    <script src="/assets/common/js/axios.js"></script>
    

    <?php echo $__env->yieldContent('script'); ?>

    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<?php if(isset($_SESSION['auth'])): ?>
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "f5d59766-3218-4ae4-8eab-df971c5f52b4",
    });
  });
</script>
<?php endif; ?>
</body>
</html>
<?php /* /home5/newsfilm/propeace/views/front/app.blade.php */ ?>