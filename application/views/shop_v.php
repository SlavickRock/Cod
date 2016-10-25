<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="margin:0px">
  <form class="" action="shop" method="post">
<div style=" background: rgba(233, 212, 15, 0.66);
    padding: 10px; /* Поля вокруг текста */
"><div style="display:inline-block; padding:20px">


    Название продукта:<br>
    <input type="text" name="product_name" vallue ="<?=set_value('product_name')?>" ><?=form_error('product_name')?><br>
   Категория продукта:<br><select  name="category"><br>
<?php foreach ($category as  $value) {
  echo "<option>". $value['name_category']."</option>";
} ?>

    </select><br>
    Описание:<br><textarea name="text" rows="10" cols="40"><?=set_value('text')?></textarea><?=form_error('text')?><br>
    Цена:<br><input type="text" name="price" value="<?=set_value('price')?>"><?=form_error('price')?><br>
    <input type="submit" name="add" value="Добавить"><br></div>
    <div style="display:inline-block;
  padding:20px" >
    Введите id товара который хотите обновить:<br><input type="text" name="id" value="<?=set_value('id')?>"><?=form_error('id')?><br>
  <input type="submit" name="update" value="Обновить "><br>

<p>
  Введите id товара который хотите удалить:<br>
 <input type="text" name="id_delete" ><br>
</p>
  <p>
    <input type="submit" name="id_del" value="Удалить"><br>
  </p>
  <p>
    Сортировать в обратном порядке!<br>
    <input type="submit" name="desk" value="Сортировать"><br>
    <input type="submit" name="beack" value="Назад"></div>
  </p>
  </div>


  </form>
  </body>
</html>
