<?php
/*
$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp_name, "uploads/" . $name);
*/

function uploadImage(){
  $name = $_FILES['123']['name'];
  $tmp_name = $_FILES['123']['tmp_name'];

  move_uploaded_file($tmp_name, "uploads/" . $name);
}

uploadImage($_FILES['123']);

?>

<img src="/uploads/123.jpg" alt="">
