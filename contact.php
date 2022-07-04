<?php
  include 'function.php';
  myPrint_r($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Contact </h1>
  <form style="display:flex;flex-direction:column;width:70%;" action="">
    <input type="text" placeholder="votre nom" name="nom">
    <input type="email" placeholder="votre email" name="email">
    <textarea name="" id="" cols="30" rows="10" name="message"></textarea>
    <input type="submit" value="envoyer">
    <input type="reset">
  </form>
</body>
</html>