<?php
include "dbConfig.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	echo $name = $_POST["name"];
	echo $password = ($_POST["password"]);
};
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>discussdesk.com - Login form in PHP mysql</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href="style.css" rel="stylesheet" type="text/css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script>
		$(function() {
			$('form').on('submit', function(e) {
				e.preventDefault();
				$.ajax({
					type: 'post',
					url: 'test.php',
					data: $('form').serialize(),
					success: function(data) {
						console.log(data)
						alert(data.name)
					}
				});
			});
		});
	</script>
</head>

<body>


	<form>
      <input name="name" value=""><br>
      <input name="password" value=""><br>
      <input name="submit" type="submit" value="Submit">
    </form>


</body>

</html>