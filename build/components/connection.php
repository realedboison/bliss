<?php

$db_name = "mysql:host=localhost;dbname=bliss";
$user_name = "root";
$user_password = "";

// try {
//   $conn = new PDO($db_name, $user_name, $user_password);
// } catch(PDOException $e) {
//   echo "Error connecting to database: " . $e->getMessage();
//   exit; // Stop script execution
// }


$conn = new PDO($db_name, $user_name, $user_password);


if(!$conn) {
  echo "did not connect to database";
} 

else {
  echo "database connected";
}

function unique_id(){
  $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charLength = strlen($chars);
  $randomString = '';

  for ($i = 0; $i < 20; $i++) {
      $randomString.= $chars[mt_rand(0, $charLength - 1)];
  }
  return $randomString;
}

// $conn->close();