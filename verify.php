<?php 
session_start();

// todo: sanitize/filter

if (strtolower($_POST['f_captcha']) == strtolower($_SESSION['phrase'])) {
  echo "ok"; 
} else {
  echo "retry"; 
}

// todo: $builder->testPhrase($_POST['f_captcha'])

?>