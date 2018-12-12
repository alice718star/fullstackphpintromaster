<?php 
$n = $_POST['fullName'];
$g = $_POST['genre'];

//echo $n .' '. $g;
/*echo prints out strings numbers booleans and thats about it vs print_r*/

/*build array and add to beg of $d*/
$a = [
    "name" => $n,
    "genre" => $g
];

$d = file_get_contents('data.json');
$d = json_decode($d, true);
/* echo is more like document write in js*/
/*json decode - take json and turn it into php. There is no false, only true */
    
/*onshift adds to beginning*/
array_unshift($d, $a);
//array_push ($d, $a); would put the latest entry to the end of the table.

/*print_r needed to see data within array*/
//print_r($d);

/*here we reassign $d back into json*/
$d = json_encode($d);
file_put_contents('data.json', $d);

//use .. to take outside the assets folder
header('location:../profile.php');

//we comment out echo and print to ensure there is no html rendering on page

?>