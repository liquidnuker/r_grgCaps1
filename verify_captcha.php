<?php 
session_start();

class GrgCaptcha1 {
  // ret str
  function verify($captcha) {
    if (strtolower($captcha) == strtolower($_SESSION['phrase'])) {
      return "ok"; 
    } else {
      return "retry"; 
    }
  } 
}

// todo: $builder->testPhrase($_POST['f_captcha'])

?>