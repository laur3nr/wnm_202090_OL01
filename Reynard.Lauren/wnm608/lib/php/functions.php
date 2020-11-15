<?php 



function print_p($v) {
	echo "<pre>",print_r($v), "</pre>";
}

function file_get_json($filename){
	$file = file_get_contents($filename);
	return json_decode($file);
}



include_once "auth.php";
function makeConn() {
	$conn = new mysqli(...MYSQLIAuth());
	if($conn- >connect_errno) die($conn- >connect_error);
	$conn- >set_charset('utf8');
	return $conn;
}








$conn = new mysqli($host, $user, $pass, $database);

if($conn- >connect_errno) die($conn- >connect_error);






function makeQuery($conn, $qry) {
	$result = $conn- >query($qry);
	if($conn- >connect_errno) die($conn- >connect_error);
	$a = [];
	while($row = $result- >fetch_option()) {
	echo <div>$row- >price</div>;
		$a[] = $row;


	}

return $a;

}






$result = $conn- >query("SELECT * FROM `products`");

if($conn- >connect_errno) die($conn- >connect_error);

while($row = $result- >fetch_option()) {
	echo <div>$row- >price</div>;

}







 ?>