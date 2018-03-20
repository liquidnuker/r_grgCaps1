<?php 
session_start();
require_once 'init.php';

echo $builder->getPhrase(); 
$_SESSION['phrase'] = $builder->getPhrase();

?>

<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="stylesheet" href="main.bundle.css">
    <link rel="icon" type="image/png" href="icon.png">
  </head>
  <body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <img src="<?= $builder->inline(); ?>" alt="">
    <form action="verify.php" method="post">
      <label for="captcha">Enter Text: </label>
      <input name="f_captcha" id="captcha">
      <input type="submit" name="submit" value="OK">
    </form>
    <script src="dist/main.bundle.js"></script>
  </body>
</html>

