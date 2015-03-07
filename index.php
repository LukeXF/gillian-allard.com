<?php include './assets/header.php'; ?>
<?php include './assets/navbar.php'; ?>

	<!-- ////////////////////////////////////
		HOMEPAGE HEADER
	///////////////////////////////////// -->

<div class="container" style="margin-top:0px;">
	<style type="text/css">
	.block-type-navigation .nav-align-center ul {
		text-align: left !important;
	}
	</style>
	<?php
		if (empty($_GET)) {
			$loadalbum = "Landscapes";
		} else {
			$loadalbum = $_GET['album'];
		}

	?>
	<div class="row" style="margin-left:-100px; margin-right:100px;">
		<div class="col-md-2" style="margin-top:50px;">
			
			<section class="row column column-1 grid-left-0 grid-width-24">
				<nav id="block-b4u53d9382752501" class="block block-type-navigation block-fluid-height" data-alias="gallery menu" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
				<div class="block-content">
				<div class="nav-horizontal nav-align-center">
					<ul id="menu-photoshelter-category-menu" class="menu selectnav-active">
						<?php 
							// selects the photos directory 
							$dir    = 'USER-FILES/';

							// scans the directory
							$files1 = scandir($dir);

							// this time with orderering
							$files2 = scandir($dir, 1);

							// removes the default linux directorying placement dots. pffff
							$blacklist = array('.', '..', 'photosx', 'lukeisthebest.php', '.DS_Store', 'THIS FOLDER IS HIDDEN');
							$scanned = array_diff( $files1 , $blacklist );
							$final = array();
							$final = $scanned;
							$final = array_values($scanned);
							$arrayCount = count($final);
						
				
							// human visuals to display how many photos there are overall
							$photocounter = 0;
						

							$counter2 = 0;
							while ( $counter2 < $arrayCount) {
								echo "
									<li id='menu-item-11624' class='menu-item menu-item-type-custom menu-item-object-custom'><a href='?album=" . $final[$counter2] . "'>" . $final[$counter2] . "</a></li>
								";
								$counter2++;
							}
						?>
						<!--<li id="menu-item-11624" class="menu-item menu-item-type-custom menu-item-object-custom"><a class="active" href="/"     >Black &amp; White</a></li>-->
					</ul>
					<script type="text/javascript">
						$('li').click(function() {
							if (!$(this).hasClass("current")) {
								$("li.current").removeClass("current");
								$(this).addClass("current");
							}
						});
					</script>
				</div>

				</nav><!-- #block-b4u53d9382752501 -->

			</section><!-- .column -->
		</div>

	<div class="designed designed-left">&copy; <?php echo date('Y'); ?></div>
	<div class="designed">Designed by <a href="http://luke.sx" target="_blank">Luke Brown</a></div>
		<div class="col-md-10">
			<iframe src="generate/index.php?site=<?php echo $loadalbum; ?>" style="margin-left:-50px;width:130%;height:600px;">
		</div>
	</div>
	<hr>
</div>

