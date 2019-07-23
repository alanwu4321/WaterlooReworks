<?php 
// include "dbConfig.php";
// echo "Could not successfully run query ($sql) from DB: ";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	echo "this is php/login.php";
	echo $name = $_POST["name"];
	echo $password = ($_POST["password"]);
};
// $msg = "";
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $name = $_POST["name"];
//     $password = md5($_POST["password"]);
// 	 if ($name == '' || $password == '') {
//         $msg = "You must enter all fields";
//     } else {
//         $sql = "SELECT * FROM members WHERE name = '$name' AND password = '$password'";
//         $query = mysql_query($sql);

//         if ($query === false) {
//             echo "Could not successfully run query ($sql) from DB: " . mysql_error();
//             exit;
//         }

//         if (mysql_num_rows($query) > 0) {
         
//             header('Location: YOUR_LOCATION');
//             exit;
//         }

//         $msg = "Username and password do not match";
//     }
// }
?>