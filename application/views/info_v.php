<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
if (isset($_POST['update'])) {
 echo "Товар успешно обновлен!!!";
}
elseif (isset($_POST['add'])) {
  echo "Товар добавлен к базе данных!!!";
}
elseif (isset($_POST['id_del'])) {
  echo "Товар удален с базы!!!";
}
else {
  echo "Ошибка";
}
     ?>
    <form  action="shop" method="post">
      <input type="submit" name="name" value="назад">
    </form>
  </body>
</html>
