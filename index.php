<?php
  require_once 'config.php';

  $req_news = "SELECT * FROM `news`";
  $result = $connect->query($req_news);
  // myPrint_r($result); 

  $allNews = $result->fetch_all(MYSQLI_ASSOC);
  //myPrint_r($allNews);


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
  <h1>Les news :</h1>
    <?php
      foreach($allNews as $key=>$newsPiece) :
        echo "<details data-id=\"$key\"> {$newsPiece['contenu']}
        <summary>{$newsPiece['titre']}</summary>
        </details>";
      endforeach;
    ?>
    <ul> 
        <?php foreach($allNews as $key2=>$news) : ?>
            <li data-id="<?php echo $key ;?>" >
            <a href="details-news.php?id_news=<?php echo $news['id_news']; ?>"><?php echo $news['titre']; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>