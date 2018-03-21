<?php 
require "./vendor/gump.class.php";
require "./verify_captcha.php";

$validator = new GUMP();

// Set the data
$postData = array(
  'captcha' => $_POST['f_captcha'],
);

// You don't have to sanitize, but it's safest to do so.
$postData = $validator->sanitize($postData); 
// $postData = $validator->sanitize(array_merge($postData,$files)); 

// Let's define the rules and filters
$rules = array(
  'captcha' => 'required|alpha_numeric',
);

$filters = array(
  'captcha' => 'trim',
);

$postData = $validator->filter($postData, $filters);

// You can run filter() or validate() first
$validated = $validator->validate(
  $postData, $rules
);

// Check if validation was successful
if($validated === TRUE) {
  echo "Successful Validation\n\n";
  print_r($postData); // You can now use POST data safely
  // echo $postData['captcha'];
  // echo $postData['file']['name'];
  
  // verify
  $vcaptcha = new GrgCaptcha1;
  
  if ($vcaptcha->verify($postData['captcha'])) {
    echo "captcha ok"; 
  } else {
    echo "retry"; 
  }
  
  // exit;  

} else {
  echo "invalid"; 
  print_r($postData); 
    
  print_r($validated); // Shows all the rules that failed along with the data
}






?>