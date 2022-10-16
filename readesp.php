<?php
header("Content-Type: application/json");
include_once('function.php');
$use = new con;

$id= $_GET['id'];



$a = $use->read("SELECT * FROM test WHERE id = '$id'");
$row = $a->fetch_assoc();




$data = array("id" => $row['id'],"name" => $row['name'],"status" => $row['status']);

echo json_encode($data);

?>