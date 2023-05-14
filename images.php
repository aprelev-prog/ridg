<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
  <title>Document</title>
</head>
<body>
  <?php
  session_start();
  
  $key = session_id();
  $path = 'uploads/' . $key . '/';
  $files = scandir($path);
  if (!file_exists($path)) {
      mkdir($path, 0777, true);
    }
    
    if (is_array($files) || is_object($files)) {
      foreach ($files as $file) {
        // обработка файлов
      }
    }
  foreach ($files as $file) {
    if (is_file($path . $file)) {
      echo '<img src="' . $path . $file . '" width="100" height="100">';
    }
  }
  ?>  
</body>
</html>
