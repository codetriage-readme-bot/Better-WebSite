<?php
include("../config.php");
$conn = new mysqli($hostname, $usename, $password, $database);
// sql to create table
$sql = "INSERT INTO Items (id, name, cost, description) VALUES ('" .rand(1,3491) . "', '".$_POST["name"] . "','" . $_POST["cost"] . "','" . $_POST["content"]."')";
$conn->query($sql);
$conn->close();
header("Location: store.php");
?>