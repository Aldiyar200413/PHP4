<h2>Навигация по сайту</h2>
    <!-- Меню -->
    <form method="POST">
    <h1>Горизонтальное/вертикальное меню</h1>
    <select name='A'>
      <option>Вертикальное</option>
      <option>Горизонтальное</option>
    </select>
    <input type="submit"/>
  </form>
<?php
$menu=[
    ['link' => 'Домой', 'href'=> 'index.php'],
    ['link' => 'О нас', 'href'=> 'index.php?id=about'],
    ['link' => 'Контакты', 'href'=> 'index.php?id=contact'],
    ['link' => 'Таблица умножения', 'href'=> 'index.php?id=table'],
    ['link' => 'Калькулятор', 'href'=> 'index.php?id=calc'],
  ];
  $vert=true;
  $v=$_POST['A'];
  if($v=="Горизонтальное")
  {
    $vert=false;
  }
  else if ($v=="Вертикальное"){
    $vert=true;
  }
  drawMenu($menu, $vert);


?>
    <!-- Меню -->