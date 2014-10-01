<?php if (isset($_GET['success'])){
	$success = "<h2 class='txts'>Your form was sent</h2>";
	# code...
}?>
<?php include './assets/header.php'; ?>
<?php include './assets/navbar.php'; ?>

	<!-- ////////////////////////////////////
		HOMEPAGE HEADER
	///////////////////////////////////// -->

	<div id="smallheader" class="mapold">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h1 class="txts">About</h1><?php echo $success; ?>
				</div>
			</div><!--ROW-->
		</div><!--CONTAINER-->
	</div><!--HEADER-->

	<div id="second">
		<div class="container contact-stuff">
			<div class="col-md-12 app">
				
				<form method="post" name="contactform" action="assets/send_form_email.php" class="basic-grey form">
					<span class="txts">So this is me...</span><br><br>
					
				</form>

 
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
	</div>


	<div class="designed">Designed by <a href="http://luke.sx" target="_blank">Luke Brown</a></div>