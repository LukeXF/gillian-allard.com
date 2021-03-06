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