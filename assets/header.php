<!DOCTYPE html>
<html lang="en">
<head>

	<title>Gillian Allard Photography</title>

<!-- ////////////////////////////////////
	HEADER LINKS
///////////////////////////////////// -->

	<meta name="description" content="A beautiful image and screenshot sharing application from desktop to the web in seconds">
	<meta name="author" content="Luke Brown">
	<meta charset="utf-8">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="./assets/css/bootstrap.css">
	<link rel="stylesheet" href="./assets/css/style.css">

	<!-- basic stylesheet -->
	<link rel="stylesheet" href="royalslider/royalslider.css">

	<!-- skin stylesheet (change it if you use another) -->
	<link rel="stylesheet" href="royalslider/skins/default/rs-default.css"> 

	<!-- Plugin requires jQuery 1.7+  -->
	<!-- If you already have jQuery on your page, you shouldn't include it second time. -->
	<script src='royalslider/jquery-1.8.3.min.js'></script>

	<!-- Main slider JS script file --> 
	<!-- Create it with slider online build tool for better performance. -->
	<script src="royalslider/jquery.royalslider.min.js"></script>

	<script type="text/javascript">
jQuery(document).ready(function() {
  var win = $(window);
  var slider = $('#gallery-t-group').royalSlider({
    controlNavigation: 'thumbnails',
    thumbs: {
      orientation: 'vertical',
      navigation: false,
      fitInViewport: (win.width() < 760) ? false : true,
      spacing: 1,
      autoCenter: false
    },
    deeplinking: {
      enabled: true,
      change: true,
      prefix: 'image-'
    },
    globalCaption: false,
    numImagesToPreload: 2,
    fadeinLoadedSlide: false,
    imageAlignCenter: true,
    imageScaleMode: 'fill',
    transitionType:'fade',
    autoScaleSlider: true, 
    autoScaleSliderWidth: 900,     
    autoScaleSliderHeight: 400,
    loop: true,
    arrowsNav: false,
    keyboardNavEnabled: true,

    /* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
    imgWidth: 792,
    imgHeight: 479
  }).data('royalSlider');

  win.resize(function() {
    if(win.width() < 760) {
      slider.st.thumbs.fitInViewport = false;
    } else {
      slider.st.thumbs.fitInViewport = true;
    }
  });
  $('#btn').click(function() {
    console.log('click');
    return false;
  });
});
	</script>
	<link href="royalslider/royalslider.css" rel="stylesheet">
	<link href="royalslider/skins/default-inverted/rs-default-inverted.css" rel="stylesheet">

	<?php include './assets/protected/config.php'; ?>

	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="assets/ico/favicon.png">

</head>


<!-- ////////////////////////////////////
	BEGIN BODY
///////////////////////////////////// -->

<body>
