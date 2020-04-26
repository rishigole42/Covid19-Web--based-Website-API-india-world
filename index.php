<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include('link/links.php'); ?>
	<?php include('css/style.php'); ?>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 ">
  <a class="navbar-brand pl-3" href="/virus">COVID_19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-center   text-capitalize pr-3">
      <li class="nav-item">
        <a class="nav-link" href="/virus">home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#symptoms">symptoms</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#prevention">prevention</a>
      </li>


      <li class="nav-item">
        <a class="nav-link  " href="index_world.php">world wide corona status</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#contactid">Report Covid_19</a>
      </li>
  </ul>
  </div>
</nav>

<div class="main_header">
	<div class="row w-100 h-75 mr-0">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/eksath.png" width="300" height="300">
			</div>
		</div>

		<div class="col-lg-7 col-md-7 col-10 order-lg-2 order-1">
			<div class="rightside w-100 h-100  d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rotate"> <img src="images/corona.png"></span>na Virus</h1>				
			</div>			
		</div>
	</div>	
</div>


<!--***************** corona update************************** -->


<section class="corona_update container-fluid">
  
    <div class="container-fluid bg-light p-5 text-center my-3 corona_style">
    	    <h2 class="text-uppercase text-center">COVID_19 LIVE UPDATES OF  THE INDIA</h2>

		<h5>An open source project of<a class="text-danger" href="http://www.bubhopal.ac.in"> Buit, Barkatullah University Bhopal</a> to keep track all the COVID_19 cases around the Nation. </h5>
	</div>
  
  
  <div class="table-responsive">

    <table class=" table table-bordered table-striped text-center table-fixed" id="tbval">
      <tr>
        <th class="text-capitalize">Last Updated Time</th>
        <th class="text-capitalize">State</th>
        <th class="text-capitalize">Confirmed</th>
        <th class="text-capitalize">Active</th>
        <th class="text-capitalize">Recovered</th>
        <th class="text-capitalize">Deaths</th>
      </tr>
    <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coronadata = json_decode($data, true);

$statecount =  count($coronadata['statewise']);


$i=1;
while($i <$statecount){

  ?>
  <tr>
    <td><?php echo $coronadata['statewise'][$i]['lastupdatedtime']?></td>
    <td><?php echo $coronadata['statewise'][$i]["state"] ?></td>
    <td><?php echo $coronadata['statewise'][$i]['confirmed']?></td>
    <td><?php echo $coronadata['statewise'][$i]['active'] ?></td>
    <td><?php echo $coronadata['statewise'][$i]['recovered'] ?></td>
    <td><?php echo $coronadata['statewise'][$i]['deaths'] ?></td>
  </tr>
 
 
  <?php
  $i++;
}
?>








    </table>
    
  </div>
</section>


<!--- *****************about section******-->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>About COVID_19</h1>		
	</div>

	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 pl-5">
			<img src="images/aboutcorona.jpg" class="img-fluid">
		</div>

		<div class="col-lg-6 col-md-6 col-12">
			<h2>What is COVID_19 (Corona-Virus) </h2>
			<p>COVID-19 is the infectious disease caused by the most recently discovered coronavirus.This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019.</p>
			<p>Coronaviruses are a large family of viruses which may cause illness in animals or humans. In humans, several coronaviruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID_19.</p>
		</div>
	</div>	
</div>

<!-------- Coronavirus symptoms-------------->

<div class="container-fluid  pt-5 pb-5" id="symptoms">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Coronavirus symptoms</h1>		
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cough.png" class="img-fluid" width="120" height="120">
				<figcaption> cough</figcaption>
			</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/runnynose.png" class="img-fluid" width="120" height="120">
				<figcaption>runny nose</figcaption>
			</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/fever.png" class="img-fluid" width="120" height="120">
				<figcaption>fever</figcaption>
			</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cold.png" class="img-fluid" width="120" height="120">
				<figcaption> cold</figcaption>
			</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/tiredness.png" class="img-fluid" width="120" height="120">
				<figcaption>tiredness</figcaption>
			</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/breathing.png" class="img-fluid" width="120" height="120">
				<figcaption> difficulty breathing(severe cases)</figcaption>
			</figure>
			</div>			
		</div>
	</div>
</div>



<!-------- Prevention Against Coronavirus-------------->

<div class="container-fluid sub_section pt-5 pb-5" id="prevention">
	<div class="section_header text-center mb-5 mt-4">
		<h1>6 Steps Prevention Against Coronavirus</h1>		
	</div>



	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
						<img src="images/hand-wash.png" class="img-fluid" width="120" height="120">							
						</figure>						
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p> Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub</p>	
					</div>
				</div>				
			</div>			
		

<div class="col-lg-4 col-md-4 col-12 mt-5">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<figure>
				<img src="images/cover.png" class="img-fluid" width="120" height="120">
			</figure>			
		</div>
		<div class="col-lg-8 col-md-8 col-12">
			<p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>			
		</div>		
	</div>	
</div>


<div class="col-lg-4 col-md-4 col-12 mt-5">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<figure>
				<img src="images/distance.png" class="img-fluid" width="120" height="120">
			</figure>			
		</div>
		<div class="col-lg-8 col-md-8 col-12">
			<p> Avoid close contact (1 meter or 3 feet) with people who are unwell</p>			
		</div>		
	</div>	
</div>


<div class="col-lg-4 col-md-4 col-12 mt-5">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<figure>
				<img src="images/house.png" class="img-fluid" width="120" height="120">
			</figure>			
		</div>
		<div class="col-lg-8 col-md-8 col-12">
			<p> Stay home and self-isolate from other in household if you feel unwell</p>			
		</div>		
	</div>	
</div>


<div class="col-lg-4 col-md-4 col-12 mt-5">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<figure>
				<img src="images/news.png" class="img-fluid" width="120" height="120">
			</figure>			
		</div>
		<div class="col-lg-8 col-md-8 col-12">
			<p>Stay informed by watching news & follow the recommended practices</p>			
		</div>		
	</div>	
</div>


<div class="col-lg-4 col-md-4 col-12 mt-5">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<figure>
				<img src="images/headache.png" class="img-fluid" width="120" height="120">
			</figure>			
		</div>
		<div class="col-lg-8 col-md-8 col-12">
			<p> If you have fever, cough and difficulty breathing, seek medical care early</p>			
		</div>		
	</div>	
</div>
</div>		
</div>
</div>


<!-------- Report Covid_19 patients-------------->

<div class="container-fluid  pt-5 pb-5" id="contactid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Report Covid_19 Patient</h1>		
	</div>
	<div class="container">
		<div class="row">
		<div class="col-lg-8 offset-lg-2 col-12">
		<form action="" method="POST">


 <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="username" 
    placeholder="Name" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
  </div>

  <div class="form-group">
    <label>Mobile</label>
    <input type="telephone" maxlength="10" class="form-control" name="mobile" 
    placeholder="Mobile" autocomplete="off" required >
  </div>

  <div class="form-group">
    <label>Address</label>
    <input type="text"  class="form-control" name="address" 
    placeholder="Address" autocomplete="off" required >
  </div>

  <div class="form-group">
    <label>Pincode</label>
    <input type="telephone" maxlength="6" class="form-control" name="pincode" 
    placeholder="Pincode" autocomplete="off" required >
  </div>


  <div class="form-group">
  	<label> Select Symptoms</label> <br>
	 
	 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
	 	<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
	 	<label class="custom-control-label" for="customcheckbox1">cold</label>
  	</div>
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input " id="customcheckbox2" name="coronasym[]" value="fever">
  		<label class="custom-control-label" for="customcheckbox2">fever</label>  		
  	</div>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize ">
  		<input type="checkbox" class="custom-control-input " id="customcheckbox3"  name="coronasym[]" value="breath">
  		<label class="custom-control-label" for="customcheckbox3"> difficulty in breath</label>  		
  	</div>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize ">
  		<input type="checkbox" class="custom-control-input " id="customcheckbox4"  name="coronasym[]" value="tired">
  		<label class="custom-control-label" for="customcheckbox4"> feeling weak</label>  		
  	</div>



  </div>


  
  <div class="form-group">
    <label >Describe how you are feeling</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
			</div>
			
		</div>
		
	</div>
	
</div>
</div>



<!-------------///////top cursor ////////////////---->
<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>	
</div>

<!------/////////////// footer---->
<footer id="sticky-footer" class="py-4 bg-dark text-white-50 " >
    <div class="container text-center mt-5">
      <h5>Designed & Developed CSE Department Team</h5>
      <p>Buit, Barkatullah University Bhopal</p>
      <p>ContacUs- rishigole42@gmail.com</p>
    </div>
  </footer>


<!-----------///// Top cursor script/////// -->	

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






<!------- Database connection query--------------------   -->

<?php 
include 'dbcon.php';

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$symp = $_POST['coronasym'];
	$msg = $_POST['msg'];
	$address = $_POST['address'];
	$pincode = $_POST['pincode'];

	$chk ="";
	foreach($symp as $chk1){
		$chk .= $chk1.","; 
	}

	$insertquery = "insert into covid(username, email, mobile, symp, message, address, pincode) values('$username', '$email', '$mobile', '$chk', '$msg', '$address' , $pincode)";
	$query = mysqli_query($con, $insertquery);

	if($con){
	?>
	<script>
		alert("Covid_19 Patients Reported Successfully Thanks!!!!!");
	</script>
	<?php 
}else {
	?>
	<script>
		alert("Not inserted");
	</script>
	<?php
}




}
?>
