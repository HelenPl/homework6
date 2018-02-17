<?php 

$json = file_get_contents(__DIR__ . '/tests/file.txt');
$result = json_decode($json, true);
if(isset($_GET['choose'])){
if(isset($result[1]['true answer'])) {
	$y = $result[1]['true answer'];



if(isset($_GET['answer'])) {
	$x = $_GET['answer'];

if($x === $y){
	echo 'Правильный ответ';
	} else {echo 'Ответ не верен';
} 
}
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test.php</title>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="list.php"> список тестов</a></li>
				<li><a href="admin.php">добавить тест</a></li>
			</ul>
		</nav>
	</header>

<h2>Тест2</h2>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
  	<p><b>Сколько лет строилась Опера в Австралии?</b></p>
  		<p><label><input name="answer" type="radio" value="9">9</label></p>
  		<p><label><input name="answer" type="radio" value="10">10</label></p>
  		<p><label><input name="answer" type="radio" value="14">14</label></p>
  		<p><label><input name="answer" type="radio" value="17">17</label></p>
  		<p><label><input name="choose" type="submit" value="Выбрать"></label></p>
  	
  </form>

</body>
</html>