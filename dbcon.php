<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db ='covid_19';

$con = mysqli_connect($server, $user, $password, $db);

if($con){
	?>
	
	<?php 
}else {
	?>
	<script>
		alert("No connection");
	</script>
	<?php
}



?>