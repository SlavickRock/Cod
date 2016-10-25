<div style="background: rgba(107, 138, 242, 0.36);"><?php foreach ($product as  $value) {

  echo "<p>"."<span style ='color:red;font-size:150%'>"."Id".$value['id']."   </span>".$value['product_name']."</p>";
  echo "<p>"."<span style ='color:green'>Категория товара:  </span>".$value['product_category']."</p>";
  echo "<p>".$value['product_description']."</p>";
  echo "<p>"."<span style='color:blue'>Цена: </span>".$value['price']."</p>";
  echo "<hr style='color:green;'>";
} ?></div>
