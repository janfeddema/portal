<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Current Time: <?php echo time(); ?></title>
</head>
<body>
<?php
	// echo "<h1>Hello World</h1>";
	// print_r($_GET);
	// print_r($_POST);
	// print_r($_SERVER);
	// print_r($_FILES);

	if ($_FILES)
	{
		$uploaddir = '/var/www/uploads/';
		echo "$uploaddir<br>\n";
		$uploadfile = $uploaddir . basename($_FILES['inputFile']['name']);
		echo "$uploadfile";

		if (move_uploaded_file($_FILES['inputFile']['tmp_name'], $uploadfile))
		{
	  		echo "File is valid, and was successfully uploaded.<br>\n";
		}
		else
		{
			echo "Possible file upload attack!<br>\n";
		}
	}
?>
<form action="#" method="post" accept-charset="utf-8" enctype="multipart/form-data" >
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
	<input type="file" name="inputFile"><br>
	<input type="submit">
</form>
<!--<<?php echo "h1"; ?>>My Title</<?php echo "h1"; ?>>-->
</body>
</html>
