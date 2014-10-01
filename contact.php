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
					<h1 class="txts">Contact Form</h1><?php echo $success; ?>
				</div>
			</div><!--ROW-->
		</div><!--CONTAINER-->
	</div><!--HEADER-->

	<div id="second">
		<div class="container contact-stuff">
			<div class="col-md-12 app">
				
				<form method="post" name="contactform" action="assets/send_form_email.php" class="basic-grey form">
					<span class="txts">Interested in using our services? Need support or sales advice? Contact us below!</span><br><br>
					<label class="col-md-6 form" for="first_name">
						<input id="name" type="text" name="first_name" placeholder="Your Full Name" />
					</label>

					<label class="col-md-6 form" for="last_name">
						<input id="name" type="text"  name="last_name" placeholder="Your Full Name" />
					</label>
					
					<label class="col-md-6 form" for="email">
						<input id="email" type="email" name="email" placeholder="Your Email Address" />
					</label>
					
					<label class="col-md-6 form" for="telephone">
						<input id="email" type="email" name="telephone" placeholder="Confirm Email" />
					</label>
					
					<label class="col-md-6 form" for="comments">
						<textarea id="message" name="comments" placeholder="Your Message to Us"></textarea>
					</label> 
					 <label class="col-md-6 form">
					 	<select name="selection">
							<option value="Job Inquiry">Photography Contact</option>
							<option value="General Question">General Question</option>
						</select>
					</label>    
					<label>
						<span>&nbsp;</span> 
						<input type="submit" value="Submit" type="button" class="button" value="Send" /> 
					</label>    
				</form>

 
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
	</div>


	<div class="designed">Designed by <a href="http://luke.sx" target="_blank">Luke Brown</a></div>