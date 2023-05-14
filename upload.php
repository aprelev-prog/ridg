<?php
session_start();
$key = session_id();
if (!empty($_FILES['file'])) {
  $files = $_FILES['file'];
  foreach ($files['name'] as $i => $name) {
    $tmp_name = $files['tmp_name'][$i];
    $path = 'uploads/' . $key . '/' . $name;
    move_uploaded_file($tmp_name, $path);
  }
}
?>