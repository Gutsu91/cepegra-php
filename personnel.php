<?php
/* nos datas */
  require 'data.php';
  include 'function.php';
  /* la view ci-dessous */
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
  <h1>Gérant : <?php echo "${gerant['prenom']} ${gerant['nom']}";?></h1>
  <ul class="personnel">
    <?php
    foreach ($personnel as $key => $element) {
      if($element['rôle'] == "stagiaire") :
        echo "<li data-key=\"$key\">${element['prenom']} ${element['nom']}</li>";
      endif;
    }
    myPrint_r($personnel);
    ?>
  </ul>
</body>
</html>
