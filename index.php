<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
	
	<?php $page = 'home'; include 'includes/navbar.php'; ?>

	<!--- Image Slider -->
	<div class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active"><img src="img/Ragib.jpg"></div>
			<div class="carousel-item"><img src="img/Ragib3.jpg"></div>
			<div class="carousel-item"><img src="img/Ragib2.jpg"></div>
		</div>
	</div>
	<!--- End Image Slider -->

	 <!--- Start About-->
	 <div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-10 py-5">
				<h2>Myself</h2>
				<p class="lead">Here some of my information, you are allowed to get. </p>
				<a class="btn btn-purple btn-lg" href="information.php" target="_blank">Academic info</a>
				<a class="btn btn-purple btn-lg" href="skill.php" target="_blank">Skills</a>
			</div>
		</div>
	</div>
	<!--- End About Section -->
	

	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/S.png">
						<h3>STRENGTH</h3>
						<p>Family, Have enough patience, Honest, Positive, Never lose hope</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/W.png">
						<h3>WEAKNESS</h3>
						<p>Ire, Easily forgive other's mistake</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/O.png">
						<h3>OPPORTUNITY</h3>
						<p>Great personalities, Favorable environment</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/T.png">
						<h3>THREAT</h3>
						<p>I have no threat still</p>
					</div>
				</div>
			</div><!--- End Row -->
		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->

	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">
				<h3 class="pb-4">Research statement</h3>
				<p>The research statement (or statement of research interests) is a common component of academic job applications.It is a summary of your research accomplishments, current work, and future direction and potential of your work.</p>
				<p>The strongest research statements present a readable, compelling, and realistic research agenda that fits well with the needs, facilities, and goals of the department.</p>
				<p>
				I would love to know about <strong>Data Science</strong>
				</p>
			</div>
			<div class="col-lg-6"><img class="img-fluid" src="img/RE.png"></div>
		</div>
	</div>
	<!--- End Two Column Section -->

<?php include 'includes/footer.php' ?>
<?php include 'includes/scripts.php' ?>

</body>
</html>

