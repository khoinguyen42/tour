<?php 

	$mysqli = new mysqli("localhost","root","","web_mysqli");
	// Check connection
	mysqli_set_charset($mysqli, 'UTF8');
	if ($mysqli->connect_errno) {
	  echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
	  exit();
	}

?>