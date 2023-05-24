<?php
  session_start();
   // Generate captcha code
  $random_num    = rand(11111,99999);
  // Assign captcha in session
  $_SESSION['code'] = $random_num;
  // Create captcha image
  $layer = imagecreatetruecolor(55,25);
  $captcha_bg = imagecolorallocate($layer, 255, 160, 120);
  imagefill($layer, 0, 0, $captcha_bg);
  $captcha_text_color = imagecolorallocate($layer, 0, 0, 0);
  imagestring($layer, 5, 5, 5, $random_num, $captcha_text_color);
  header('Content-Type: image/jpeg');
  imagejpeg($layer);
?>