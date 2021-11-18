<?php
$kon=mysqli_connect("localhost:3306","fafa","fafa","db_penyakit");
if(mysqli_connect_errno()){
	echo "Failed to Connect to Mysql : ".mysqli_connect_error();
}
?>