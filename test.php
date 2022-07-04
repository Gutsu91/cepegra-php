<?php 
  $nom = 'Titeca';
  $prenom = 'Francois';
  echo $prenom . ' ' . $nom . '<br>';
  echo "$prenom $nom" . "<br>";
  echo 31 . " ans";
  define ('FORMATION', 'ingrwf10');
  echo "<br>" . FORMATION;

  $panier = ["pommes", "poires","pêches","pépin", "melon", "pastèque"];
  echo "<pre>" ;
  print_r($panier);
  var_dump($panier);
  echo "</pre>";
  echo count($panier);
  echo "<br>";

  foreach($panier as $element) {
    echo $element . '<br>';
  }

  echo "<ul>";
  foreach ($panier as $key => $element) {
	  echo "<li data-key=\"$key\">$element</li>";
  }
  echo "</ul>";

?>
