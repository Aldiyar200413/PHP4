<?php
	function drawMenu($menu,$vertical=true){
		$style="";
		if($vertical==false)
		{
			$style="display:inline;";
		}
		else{
			$style="";
		}
		echo "<ul style=$style>";
		foreach ($menu as $item) {
			echo "<li style=$style>";
			echo "<a href='{$item['href']}'>{$item['link']} </a>";
			echo "</li>";
		}
		echo "</ul>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="POST">
		<h1>Горизонтальное/вертикальное меню</h1>
		<select name='A'>
			<option>Горизонтальное</option>
			<option>Вертикальное</option>
		</select>
		<input type="submit"/>
	</form>
<?php
$menu=[
		['link' => 'Домой', 'href'=> '4-0.php'],
		['link' => 'О нас', 'href'=> '4-0.php'],
		['link' => 'Контакты', 'href'=> '4-0.php']
	];
	$vertical='';
	$v=$_POST['A'];
	if($v=="Горизонтальное")
	{
		$vertical=false;
	}
	else if ($v=="Вертикальное"){
		$vertical=true;
	}
	drawMenu($menu, $vertical);


?>
</body>
</html>