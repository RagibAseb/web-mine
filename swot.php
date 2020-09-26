<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
	
</head>
<body>
	
	<?php  $page = 'swot'; include 'includes/navbar.php'; ?>

    <div class="row mt-5" style="float:center; max-width: 100%; margin: .5rem; padding: 0; border: .5rem solid #F08080">
        <div class="col-12 text-center mt-5">
        <h3>SWOT</h3>
        </div>
    </div>

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