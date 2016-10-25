<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php foreach ($cilesson as $value) {
      echo "<p style ='color:red;'>Название статьи  ".$value['id']."   ".$value['title']."</p>";
      echo "<p>".$value['text']."</p>";
      echo "<p>".$value['date']."</p>";
    }?>
  </body>
</html>
