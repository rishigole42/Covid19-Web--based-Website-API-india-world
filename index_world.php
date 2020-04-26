<?php
include ("logic_world.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!----------- Bootstrap css---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


<!----------- Bootstrap js---------->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<!---- Google Fonts------->
<link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!----font awsome----------->
<script src="https://kit.fontawesome.com/b8b3b348f9.js" crossorigin="anonymous"></script>

<!---- my style.css----->
<link rel="stylesheet" type="text/css" href="style_world.css">
	<title>Covid_19 Tracker</title>
</head>
<body>
	<div>
		<a href="/virus">Go to Back</a>
		 <div class="container-fluid bg-light p-5 text-center my-3 corona_style">
    	    <h2 class="text-uppercase text-center">COVID_19 LIVE UPDATES OF  THE WORLD</h2>

		<h5>An open source project of<a class="text-danger" href="http://www.bubhopal.ac.in"> Buit, Barkatullah University Bhopal</a> to keep track all the COVID_19 cases around the World. </h5>
	</div>
	</div>
	

	<div class="container my-5">
		<div class="row text-center">
			<div class="col-4 text-warning">
				<h5>Coronavirus Cases:</h5>
				<?php echo number_format($total_confirmed); ?>
			</div>
			<div class="col-4 text-success">
				<h5>Recovered:</h5>
				<?php echo number_format($total_recovered); ?>
			</div>
			<div class="col-4 text-danger">
				<h5>Deaths:</h5>
				<?php echo number_format( $total_deaths); ?>
			</div>
		</div>
		<div class="container bg-light p-3 my-3 text-center">
			<h5 class="text-info">"Prevention is the cure."</h5>
			<p class="text-muted">Stay Indoor Stay Safe.</p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="table-responsive">
			<table class="table ">
			<thead class="thead-dark">
				<tr>
					<th scope="col"> Countries</th>
					<th scope="col"> Confirmed</th>
					<th scope="col">Recovered</th>
					<th scope="col">Deceased</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $key => $value) {
					$increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
					
				  ?>
				  	<tr>
				  		<th><?php echo $key;?></th>
				  		<td>
				  			<?php echo $value[$days_count]['confirmed'];?>
				  			<?php if($increase !=0){?>
				  			<small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>
				  			<?php }?>
				  		</td>
				  		<td>
				  			<?php echo $value[$days_count]['recovered'];?>
				  		</td>
				  		<td>
				  			<?php echo $value[$days_count]['deaths'];?>
				  		</td>
				  	</tr>





				<?php }?>
			</tbody>
		</table>
			
		</div>
		
	</div>






<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i> 
</div>
<!------/////////////// footer---->
<footer id="sticky-footer" class="py-4 bg-dark text-white-50 " >
    <div class="container text-center mt-5">
      <p>Designed & Developed CSE Department Team</p>
      <small>Buit, Barkatullah University Bhopal</small>
    </div>
  </footer>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css2?family=Muli&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>





<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />


  <script type="text/javascript">

    $('.count').counterUp({
    delay:10,
    time:3000
   })

  mybutton = document.getElementById('myBtn');
    //when the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};
  function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  //when yhe user clicks on the button, scroll to th top of the document

  function topFunction() {
    document.body.scrollTop = 0; // for safari;
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and opera /
  }
</script>
</body>
</html>