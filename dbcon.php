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
		swal("covid_19","Error Connection","error");
	</script>
	<?php
}



?>