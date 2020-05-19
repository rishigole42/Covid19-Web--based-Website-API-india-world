<style type="text/css">
	html{
		scroll-behavior: smooth;
	}



	*{margin: 0; padding: 0; box-sizing: border-box; font-family: 'Muli', sans-serif;}


/*///////main_header\\\\\\\\*/

.main_header{
	
	width: 100%;
}

.rightside h1{
	font-size: 3rem;
	margin-top: 1em;
	margin-left: 42px;

}


.corona_rotate img{
	animation: gocorona 3s linear infinite;
}
@keyframes gocorona{
	0% { transform: rotate(0); }
	100%{transform: rotate(360deg);}
}


.leftside img{animation: heartbeat 5s linear infinite;}
@keyframes heartbeat
{
	0%{
		transform: scale(.75);
	}
	20%{
		transform: scale(1);
	}
	40%{
		transform: scale(.75);
	}
	60%{
		transform: scale(1);
	}
	80%{
		transform: scale(.75);
	}
	100%{
		transform: scale(.75);
	}
}
/*************** corona update ************************/
.corona_update h3{ color: #ff7675; }
.corona_update h1{font-size: 1.60rem;text-align: center;}
/*/////// about section///////////*/
.sub_section{
	background-color: #fbfafd;
}

////*///////////////footer//////*/
.footer_style{
	background-color: #a29bfe!important;
}





/*********** top scroll **************************/
#myBtn {
	display: none; /* Hidden by default*/
	position: fixed;/*fixed sticky position*/
	bottom: 40px; /* Placed button at the bottom of the page*/
	right: 40px; /* Place the button 30 px from the right*/
	z-index: 90; /* Make sure it does not overlap*/
	border:none; /* Remove border*/
	outline: none; /* Remove outline*/
	background-color: #00A8FF; /* Set a background color*/
	color: white; /* Text color */
	cursor: pointer; /* Add a some pointer on hover */
	padding: 17px; /*Some padding*/
	border-radius: 10px; /* Rounded corners */
}
#myBtn:hover {
	background: #606060; /* Add a dark-gry background on hover */
}




//****** corona table headings /////*/

.corona_style{
	font-family: 'Baloo Thambi 2', cursive;
}



</style>