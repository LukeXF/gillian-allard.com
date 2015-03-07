<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">    

  
    <title> Gallery with Deep Linking | RoyalSlider</title>
  

    <meta content="Touch-enabled image gallery and content slider plugin, that focuses on providing great user experience on every desktop and mobile device." name="description">
    <meta name="keywords" content="content slider, gallery, plugin, jquery, banner rotator">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0" />
    <meta name="author" content="Dmitry Semenov">

    
    <link href="http://dimsemenov.com/plugins/royal-slider/royalslider/royalslider.css" rel="stylesheet">
    <script src="http://dimsemenov.com/plugins/royal-slider/royalslider/jquery-1.8.3.min.js"></script>
      
        <script src="http://dimsemenov.com/plugins/royal-slider/royalslider/jquery.royalslider.min.js?v=9.3.6"></script>
      
    

    
    <link href="http://dimsemenov.com/plugins/royal-slider/preview-assets/css/reset.css?v=1.0.4" rel="stylesheet">
    
     
        <link href="http://dimsemenov.com/plugins/royal-slider/royalslider/skins/default-inverted/rs-default-inverted.css?v=1.0.4" rel="stylesheet">
     
    

    
    <style>
      #gallery-t-group {
  width: 100%;
  -webkit-user-select: none;
  -moz-user-select: none;  
  user-select: none;
}
.rsDefaultInv,
.rsDefaultInv .rsOverflow,
.rsDefaultInv .rsSlide,
.rsDefaultInv .rsVideoFrameHolder,
.rsDefaultInv .rsThumbs {
  background: #eee;
}

#gallery-t-group .rsThumb {
  float: left;
  overflow: hidden;
  width: 56px;
  height: 56px;
  margin-right: 1px;
}
#gallery-t-group .rsThumbs {
  width: 285px;
  height: 100%;
  position: absolute;
  top: 0;
  padding: 0 0 0 1px;
  right: 0;
}
#gallery-t-group .rsGCaption {
  right: 285px;
  line-height: 12px;
  padding: 1px 7px;
  font-size: 11px;
  background: #EEE;
  position: absolute;
  width: auto;
  bottom: 0;
  float: none;
  text-align: left;
}
@media screen and (min-width: 0px) and (max-width: 1200px) {  
  #gallery-t-group .rsThumbs {
    width: 228px;
  }
  #gallery-t-group .rsGCaption {
    right: 228px;
  }
}
@media screen and (min-width: 0px) and (max-width: 760px) {  
  #gallery-t-group .rsThumbs {
    left: 0;
    position: relative;
    width: 100%;
    height: auto;
    padding: 1px 0 0 1px;
  }
  #gallery-t-group .rsThumbsContainer {
    height: auto !important;
  }
  #gallery-t-group .rsGCaption { 
    right: 0;
  }

}

    </style>
    
  </head>
  <body >
  <header  id="main-header" class="clearfix">  
    <div  class="page wrapper"> 
       <div class="col span_6">
         
       </div>
    </div>
  </header>
  <div  class="page wrapper main-wrapper">  

<div class="row clearfix">
  <div class="fwImage col span_6">
<div id="gallery-t-group" class="royalSlider rsDefaultInv">
  <a class="rsImg" href="http://dev.gillian-allard.com/assets/img/1-allard.jpg"><img class="rsTmb" width="56" height="56" src="http://dev.gillian-allard.com/assets/img/1-allard.jpg" /></a>
  <a class="rsImg" href="http://dev.gillian-allard.com/assets/img/2-allard.jpg"><img class="rsTmb" width="56" height="56" src="http://dev.gillian-allard.com/assets/img/2-allard.jpg" /></a>
  <a class="rsImg" href="http://dev.gillian-allard.com/assets/img/3-allard.jpg"><img class="rsTmb" width="56" height="56" src="http://dev.gillian-allard.com/assets/img/3-allard.jpg" /></a>
  <a class="rsImg" href="http://dev.gillian-allard.com/assets/img/4-allard.jpg"><img class="rsTmb" width="56" height="56" src="http://dev.gillian-allard.com/assets/img/4-allard.jpg" /></a>
  <a class="rsImg" href="http://dev.gillian-allard.com/assets/img/5-allard.jpg"><img class="rsTmb" width="56" height="56" src="http://dev.gillian-allard.com/assets/img/5-allard.jpg" /></a>
  <a class="rsImg" href="http://dev.gillian-allard.com/assets/img/6-allard.jpg"><img class="rsTmb" width="56" height="56" src="http://dev.gillian-allard.com/assets/img/6-allard.jpg" /></a>
  <a class="rsImg" href="http://dev.gillian-allard.com/assets/img/7-allard.jpg"><img class="rsTmb" width="56" height="56" src="http://dev.gillian-allard.com/assets/img/7-allard.jpg" /></a>
  <a class="rsImg" href="http://dev.gillian-allard.com/assets/img/8-allard.jpg"><img class="rsTmb" width="56" height="56" src="http://dev.gillian-allard.com/assets/img/8-allard.jpg" /></a>
  <a class="rsImg" href="http://dev.gillian-allard.com/assets/img/9-allard.jpg"><img class="rsTmb" width="56" height="56" src="http://dev.gillian-allard.com/assets/img/9-allard.jpg" /></a>
  <a class="rsImg" href="http://dev.gillian-allard.com/assets/img/10-allard.jpg"><img class="rsTmb" width="56" height="56"src="http://dev.gillian-allard.com/assets/img/10-allard.jpg" /></a>
  <a class="rsImg" href="http://dev.gillian-allard.com/assets/img/11-allard.jpg"><img class="rsTmb" width="56" height="56"src="http://dev.gillian-allard.com/assets/img/11-allard.jpg" /></a>

</div>
  </div>
</div>
  
    <script>
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
  

  
  <div style="display:none;"><script type="text/javascript">
  (function(w, c) {
      (w[c] = w[c] || []).push(function() {
          try {
              w.yaCounter11382601 = new Ya.Metrika({id:11382601, enableAll: true, trackHash:false, webvisor:true});
          }
          catch(e) { }
      });
  })(window, "yandex_metrika_callbacks");
  </script></div>
  <script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
  <noscript><div><img src="//mc.yandex.ru/watch/11382601" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

      
  </div>