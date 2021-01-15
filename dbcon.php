<?php

$server = 'remotemysql.com';
$user = ' 9QcyuanIQ6';
$password = ' rLPW4ig5Wt';
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
