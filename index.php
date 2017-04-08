<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
	<title>Nikhil Satish</title>
	<meta name="description" content="Personal site of Nikhil Satish">
	<meta name="author" content="Nikhil Satish">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<!--[if lt IE 9]>
	    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    </head>
    <body>
	<header>
	    <nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
		    <div class="navbar-header">
			<a href="index.php" class="navbar-brand scroll-top">
			    Nikhil Satish
			</a>
		    </div>
		    <ul class="nav navbar-nav">
			<li><a href="#" class="scroll-link" data-id="myskills">What I Know</a></li>
			<li><a href="#" class="scroll-link" data-id="mywork">Stuff I've done</a></li>
			<li><a href="#" class="scroll-link" data-id="contact">Contact</a></li>
		    </ul>
		</div>
	    </nav>
	</header>
	<section id="intro">
	    <div class="container">
		<h2>
		    Welcome!
		</h2>
		<p>Web, Games, AI, DataScience</p>
		<section id="about-me">
		    <div class="media">
			<div class="media-left media-middle">
			    <img src="images/face.png" alt="me" class="media-object "></img>
			</div>
			<div class="media-body"> <p>I am a third year student at SRM University, KTR. I love computer science and want to keep learning and doing more. I am particularly interested in Artificial Intelligence and its related fields. I am hardworking and value professionalism. I welcome challenges as a way to further my understanding and improve my skills. 
			</p>
			</div> 
		</section> 
		    </div> 
	</section> 
	<section id="myskills">
	    <div class="container">
		<h1>My Skills</h1>
		<p>I don't put anything in here until I've done a project on it/using it. That said, you can expect this section to grow fast :D</p>
		<div class="row">
		    <div class="col-sm-3">
			<h3>Fields</h3>
			<ul>
			    <li>Web Development</li>
			    <li>Game Development</li>
			    <li>Data Science</li>
			    <li>Neural Networks</li>
			</ul>
		    </div>
		    <div class="col-sm-3">
			<h3>Platforms</h3>
			<ul>
			    <li>Linux</li>
			    <li>Node.js</li>
			</ul>
		    </div>
		    <div class="col-sm-3">
			<h3>Languages</h3>
			<ul>
			    <li>C++</li>
			    <li>Java</li>
			    <li>Python</li>
			    <li>HTML/CSS/Javascript</li>
			</ul>
		    </div>
		    <div class="col-sm-3">
			<h3>Misc</h3>
			<ul>
			    <li>MeteorJS</li>
			    <li>SQL</li>
			    <li>MongoDB</li>
			    <li>Django</li>
			    <li>Spring</li>
			    <li>Hibernate</li>
			    <li>ReactJS</li>
			    <li>AngularJS</li>
			    <li>Selenium</li>
			    <li>JUnit</li>
			</ul>
		    </div>
		</div>
	    </div>
	</section>
	<section id="mywork">
	    <div class="container">
		<h1>My Work</h1>
		<div class="row">
		    <div class="col-xs-12">
			<?php
			$projFile=fopen("githubproj.html","r") or die("unable to open file!");
			$projdet=fread($projFile,filesize("githubproj.html"));
			echo $projdet;
			fclose($projFile);
			?>
			<p>I'm also a contributor to the <a href="https://github.com/MovingBlocks/Terasology/">Terasology</a> open source project.</p>
			<small>Data about projects fetched from their respective github pages via a php script.</small>
		    </div>
		</div>
	    </div>
	</section>
	<footer>
	    <div class="container">
		<section class="col-sm-6" id="contact">
		    <h1>Contact me</h1>
		    <p>
			<address>
			    <h4>Address:</h4>
			    Nikhil Satish<br>
			    T.Nagar<br>
			    Chennai<br>
			    India<br>
			    <h4>Email:</h4>
			    nikhil_2811@hotmail.com
			</address>
		    </p>
		</section>
		<section class="col-sm-6" id="connect">
		    <h1>Find me on:</h1>
		    <a href="https://www.facebook.com/nikolas.socrates"><img class="size-48" src="images/fi-social-facebook.png"></img></a>

		    <a href="https://www.github.com/niksoc"><img class="size-48" src="images/fi-social-github.png"></img></a>
		    <a href="https://www.linkedin.com/in/nikhil-s-681887a7?trk=hp-identity-name"><img class="size-48" src="images/fi-social-linkedin.png"></img></a>
		</section>
	    </div>
	    <small>&copy; 2016 Nikhil Satish | All Rights Reserved</small>
	</footer>
	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
    </body>
</html>
