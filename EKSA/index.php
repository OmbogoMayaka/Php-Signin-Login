<?php
include '../connect.php';
session_start();
if(!isset($_SESSION['username'])){
header('location:../index.php');
}

?>

<!DOCTYPE html>
<html>
<head> 
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>WELCOME TO EKERENYO SUNSHINE </title>
<link rel="stylesheet" href="p1.css">
<link rel="stylesheet" href="all.min.css">
 </head>
 <body>  
 	<section class="header">
 		<nav>
 			<a href=""> <img src="logo.png">
 			<div class="links" id="navLinks">
                <i class="fa-solid fa-rectangle-xmark" onclick="hideMenu()"></i>
 				<ul>
 					<li><a href="p1.html">HOME</a></li>
 					<li><a href="LOGIN/index.html">STUDENT PORTAL</a></li>
 					<li><a href="LOGIN/index.html">STAFF PORTAL</a></li>
 					<li><a href="aboutus.html">ABOUT US</a></li>
 					<li><a href="">CONTACT US</a></li> 
					 <li><a href="FEEDBACK.html">FEEDBACK</a></li> 
				<a class="whitee" href="../logout.php" role="button">Logout</a>
 			</div>
 			<i class="fa-solid fa-bars" onclick="showMenu()"></i>
 		</nav>
		 
 	</section>
 	<section  class="text1">
 	<h1>Welcome <?php $_SESSION['username']  ?> </h1>
 	<p>We are the leading private school in Nyamira county offering the best services ever</p> <br>
	 <p><span id='date-time'></span>.</p>
 	<a href="" class="button">Enroll Now</a>	
	 <script>
		var dt = new Date();
		console.log(dt);
		document.getElementById('date-time').innerHTML=dt;
		</script>
		<script>
			function refreshTime() {
			const timeDisplay = document.getElementById("time");
			const dateString = new Date().toLocaleString();
			const formattedString = dateString.replace(", ", " - ");
			timeDisplay.textContent = formattedString;
}
  setInterval(refreshTime, 1000);
		</script>

 	</section>
 	<!----javascript for toggle menu-->
<SCRIPT>
var navLinks = document.getElementById("navLinks");
function showMenu(){
	navLinks.style.top = "0px";
}
function hideMenu(){
	navLinks.style.bottom ="-1000px";

}
</SCRIPT>

<script src="https://kit.fontawesome.com/09f46d91f0.js" crossorigin="anonymous"></script>
	<!--- services pallet--->
<section >


</section>
<section class="courses">
        <h1>Courses We offer</h1> 
        <P>We have all classes under the primary curicullum of the republic of kenya</P>
        <div class="row">
            <div class="coursetype">
                <h3>Pre-Primary</h3>
                <p>Students who are between playgroup and Grade 1 orem ipsum dolor sit amet, consectetur adipisicing elit, sed do ei</p>
            </div>
            <div class="coursetype">
                <h3>Middle School</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmorem ipsum dolor sit amet, consectetur adipisicing elit, sed do ei</p>
            </div>
            <div class="coursetype">
                <h3>Upper Primary</h3>
            <p>Students who are between class 5 and class 8orem ipsum dolor sit amet, consectetur adipisicing elit, sed do ei</p>
            </div>
			<div class="coursetype">
                <h3>Pre-School</h3>
            <p>Students who are between class 5 and class 8orem ipsum dolor sit amet, consectetur adipisicing elit, sed do ei</p>
            </div>
        </div>

        </section>
		
        <!---testimonials----->
        <section class="testimonials">	
        	<h1>What our students say</h1>
        	<p> Lorem ipsum dolor sit amet, consectetur adipis</p>
			<div class="flex-container">
				--<div class="flex">
					<div class="row">
        			<div class="testimonial-col">	
        					<img src="download (3).jpg">
        	<div>	
        		<p>Lorem ipsum dolre et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco</p>
        		<h3>RUTH MAYAKA</h3>
        	</div>
        </div>		

        	</div>
		</div>
				<div class="flex">
					<div class="row">
        			<div class="testimonial-col">	
        					<img src="download (3).jpg">
        	<div>	
        		<p>Lorem ipsum dolre et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco</p>
        		<h3>SAMUEL NYARONDIA</h3>
        	</div>
        </div>		

        	</div></div>
			
				<div class="flex">
					<div class="row">
        			<div class="testimonial-col">	
        					<img src="download (3).jpg">
        	<div>	
        		<p>Lorem ipsum dolre et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco</p>
        		<h3>OBED MAYAKA</h3>
        	</div>
        </div>		

        	</div></div>
				<div class="flex">
					<div class="row">
						<div class="testimonial-col">	
								<img src="download (2).jpg">
				<div>	
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				ore et dola. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco 		</p>
					<h3>MAYAKA CALEB OMBOGO</h3>
				</div>
								</div>		
	
				</div>
				</div>
			</div>
        	
        	
        </section>
		
        <!----gallary section-
       
        <section class="Gallery">
            <h1>School Van</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, veniam magni autem</p>
            <div class="row1">
                <div class="row12">
                    <img src="64655139_2376427662626767_171803931700101120_n">
                <div class="layer">
                    <h3>SCHOOL DIRECTOR</h3>
                </div>
                </div>
            </div>

        </section>
------>
<section>
	<hr>
</section>
<footer>
	<div class="row">
		<div class="col">
			
			<p>Enroll now and enjoy our world class services ranging from play group to class 8</p>
		</div>
		<div class="col">
			<h3>OFFICE</h3>
			<p>Ekerenyo Main Road</p>
			<p>Nyamira County in Nyanza</p>
			<p>P.O Box 170 Ikonge</p>
			<p class="emailid">ekerenyosunshineacademy@gmail.com</p>
			<h4>+254712689840</h4>
		</div>
		<div class="col">
			<h3>Links</h3>
			<ul>
				<li><a href="">HOME</a></li>
				<li><a href="">SERVICES</a></li>
				<li><a href="">HOME</a></li>
				<li><a href="">ABOUT US</a></li>
				<li><a href="">CONTACTS</a></li>
				
			</ul>
		</div>
		<div class="col">
			<h3>Newsletter</h3>
			<form>
				<input type="Email" name="Enter your email address">
			</form>
		</div>
	
	</div>
	<hr>
	<h4 class="ourvision">On the frontline to quality service delivery</h4>
	<hr>
	<p class="copyright"> © 2022 Ekerenyo Sunshine Academy</p>
	<style>
		.copyright{
			font-size:px;
			color:brown;
			text-align: center;
			padding:0;
			margin:0;
			border:0;
		}
		.ourvision{
			padding:0;
			margin:0;
			font-size:16px;
			color:crimson;
			text-align: center;

		}
	</style>
</footer>
    </body>
</html>

