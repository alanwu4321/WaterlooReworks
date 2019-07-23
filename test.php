<?php
include "dbConfig.php";
// print_r($_POST);
if (isset($_POST["name"]) || isset($_POST["password"])) {
    $name = "";
    $password = "";
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['password'])) {
        $time = $_POST['password'];
    }
    $sql = "SELECT * FROM `test` WHERE name='{$name}'";
    $result = $mysqli->query($sql);
    if ($result->num_rows == 1) {
        // output data of each row
        $response = $result->fetch_assoc();
        // echo "id: " . $response["id"]. " - Name: " . $response["name"]. " " . "<br>";
        header('Content-type: application/json');
        echo json_encode($response);
    }
}
