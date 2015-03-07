<?php if (isset($_GET['success'])){
	$success = "<h2 class='txts'>Your form was sent</h2>";
	# code...
}?>
<?php include './assets/header.php'; ?>
<?php include './assets/navbar.php'; ?>

<style type="text/css">
.tumblr_post {
	display: -webkit-box;
	padding: 20px;
	background: #eee;
	margin-top: 20px;
}
.tumblr_post_blog {
	padding: 20px 5px;
	background: #eee;
	margin-top: 20px;
}
.tumblr_caption {
	padding: 20px;
}
</style>

	<!-- ////////////////////////////////////
		HOMEPAGE HEADER
	///////////////////////////////////// -->

	<div id="smallheader" class="mapold">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h1 class="txts">Blog</h1><?php echo $success; ?>
				</div>
			</div><!--ROW-->
		</div><!--CONTAINER-->
	</div><!--HEADER-->

	<div id="second">
		<div class="container contact-stuff"><!--
			<div class="col-md-12 app">
					<script type="text/javascript" src="http://allard47.tumblr.com/js"></script>
			</div>
			<hr>-->
			<div class="col-md-12 app">

<?php

	function debug($value)
	{
		echo "<pre style='font-size:10px'>";
		print_r($value);
		echo "</pre>";
	}


	$request_url = 'http://allard47.tumblr.com/api/read?start=0&num=5'; // the requested blog loaded in a varible
	$xml = simplexml_load_file($request_url); // convert xml into simplexml to be read by php
	$json = json_encode($xml); // convert xml to json
	$array = json_decode($json,TRUE); // convert json to an array

	// debug($xml);
	// debug($array);

	$title = $xml->posts->post->{'regular-title'};
	$post = $xml->posts->post->{'regular-body'};
	$link = $xml->posts->post['url'];
	$small_post = substr($post,0,320);

	// debug($array['posts']['post']);

	$i = 0;
		while ($i < $array['posts']['@attributes']['total']) {

			echo "
				<div class='tumblr_post_blog row'>
					<div class='col-md-6'>
			";
				//debug($array['posts']['post'][$i]['photoset']);
				//$count = count($array['posts']['post'][$i]['photo-url']);
				//$i_photo = 0;
				//while ($i_photo <= $count) {
					echo "<img width='100%' src='" . $array['posts']['post'][$i]['photo-url']['2'] . "'>"; 
				//	$i_photo++;
				//}

			echo "
					</div>

					<div class='col-md-6'>"
						. $array['posts']['post'][$i]['photo-caption'] . 
						"<br><p> <a target='_blank' href='" . $array['posts']['post'][$i]['@attributes']['url-with-slug'] . "'>" 
						. $array['posts']['post'][$i]['@attributes']['date'] . "</a></p>
					</div>

				</div>
			";
			// debug($array['posts']['post'][$i]);
			$i++;
		}

	echo '<h1>'.$title.'</h1>';
	echo '<p>'.$small_post.'</p>';
	echo "…";

	echo "</br><a target=frame2 href=’".$link."’>Read More</a>"; 
?>

			</div>
		</div>
	</div>


	<div class="designed designed-left">&copy; <?php echo date('Y'); ?></div>
	<div class="designed">Designed by <a href="http://luke.sx" target="_blank">Luke Brown</a></div>