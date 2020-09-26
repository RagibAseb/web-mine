<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
</head>
<body>
	
	<?php  $page = 'team'; include 'includes/navbar.php'; ?>

    <div class="row mt-5">
        <div class="col-12 text-center mt-5">
        <h3>Team</h3>
        </div>
    </div>

    <!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">
				<h3 class="pb-4">Learn to build Bootstrap websites</h3>
				<p>The columns will automatically stack on top of each other when the screen is less than 992px wide.</p>
				<p>Resize the browser window to see the effect. Responsive web design has become more important as the amount of mobile traffic now accounts for more than half of total internet traffic.</p><a class="btn btn-purple btn-lg" href="https://w3newbie.com/courses/">W3NEWBIE COURSES</a>
			</div>
			<div class="col-lg-6"><img class="img-fluid" src="img/responsive.png"></div>
		</div>
	</div>
	<!--- End Two Column Section -->

    	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">BUILT WITH THE BEST</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/S.png">
						<h3>STRENGTH</h3>
						<p>HTML5 is the fifth and current major version of the HTML standard, and subsumes XHTML.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/W.png">
						<h3>WEAKNESS</h3>
						<p>Bootstrap is an open-source front-end library with HTML and CSS based designs.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/O.png">
						<h3>OPPORTUNITY</h3>
						<p>CSS3 is the latest evolution of the Cascading Style Sheets language and aims at extending CSS2.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/T.png">
						<h3>THREAT</h3>
						<p>CSS3 is the latest evolution of the Cascading Style Sheets language and aims at extending CSS2.</p>
					</div>
				</div>
			</div><!--- End Row -->
		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->



    <?php include 'includes/footer.php' ?>
    <?php include 'includes/scripts.php' ?>

</body>
</html>