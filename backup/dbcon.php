<?php

$server = 'localhost';
$user = 'id13596272_rishigole';
$password = 'Rishigole42@';
$db ='id13596272_covid_19';

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