
<?php

if (isset($_FILES['userfile'])) {
	$file = $_FILES['userfile'];

if (!empty($file['name']) && $file['error'] == UPLOAD_ERR_OK && move_uploaded_file($file['tmp_name'], __DIR__ . '/tests/file.txt')) {
	echo 'Файл загружен';
}else {
	echo 'Файл не загружен, попробуйте еще раз';
}
}

/*if(file_exists('tests/file.txt')) {
	$json = file_get_contents(__DIR__ . '/tests/file.txt');
	$result = json_decode($json, true);
	  
$check = ['name', 'question', 'answers', 'true answer'];

foreach ($result as  $i) {
	print_r($i);
	foreach ($check as $key) {
		if(array_key_exists($key, $i)) {
			continue;
		}else {
			break;
		}
	  }
	}
}  */

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin.php</title>
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

<p>Загрузить JSON-файл c тестом</p>
<form enctype="multipart/form-data" action="" method="post">
<p><input type="file" name="userfile"><br>
<input type="submit" value="Отправить"></p>	

</form>

</body>
</html>