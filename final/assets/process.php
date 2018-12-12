<?php
$n = $_POST['fullName'];
$g = $_POST['genre'];

$a = array(
	"name" => $n,
	"genre" => $g
);

$d = file_get_contents('data.json');
$d = json_decode($d, true);

array_unshift($d, $a);

$d = json_encode($d);
file_put_contents('data.json', $d);

header('location:../profile.php');
?>