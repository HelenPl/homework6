<?php 
if(file_exists('tests/file.txt')) {
	$json = file_get_contents(__DIR__ . '/tests/file.txt');
	$result = json_decode($json, true);

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List</title>
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
	
	<section>
		<ul>
			<li><a href="test1.php?Num=1">Тест 1</a></li>
			<li><a href="test2.php?Num=2">Тест 2</a></li>
			<li><a href="test3.php?Num=3">Тест 3</a></li>
		</ul>
	</section>
</body>
</html>