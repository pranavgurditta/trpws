<?php
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$field=$_POST['field'];
$to      = 'testingwebsites2012.comyr.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: testingwebsites2012@gmail.com' . "\r\n" .
    'Reply-To: testingwebsites2012@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
 
$list = array
(
"$name,$email,$contact,$field"
);

$file = fopen("data.csv","a");

foreach ($list as $line)
  {
  fputcsv($file,explode(',',$line));
  }

fclose($file); 
header('Location:index.php');?>