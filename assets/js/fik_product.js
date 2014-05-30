function activatezoom(zoomimagewidth) {
    $('.zoomContainer').remove();
    if ($('div.product-image-frame img').width() < (zoomimagewidth)*0.77) {
        $('div.product-image-frame img').elevateZoom({
            zoomType : "lens",
            lensShape : "square",
            lensSize : 250
        });
    } else {
        $('.zoomLens').css('opacity','0');
    }
}

$(document).ready(function() {
  $('.sizes').hide();
  $('.shippings').hide();
  $('.sizesandshippingsmodaloverlay').hide();
  activatezoom($('div.product-image-frame img').data('zoomimagewidth'));

  $('.sizesinformation').click(function(event) {
      event.preventDefault();
      $('.shippings').hide();
      $('.sizes').toggle();
      $('.sizesandshippingsmodaloverlay').toggle();
  });
  $('.shippingsinformation').click(function(event) {
      event.preventDefault();
      $('.sizes').hide();
      $('.shippings').toggle();
      $('.sizesandshippingsmodaloverlay').toggle();
  });
  $('.close').click(function(event) {
      $('.sizes').hide();
      $('.shippings').hide();
      $('.sizesandshippingsmodaloverlay').hide();
  });
  $('.sizesandshippingsmodaloverlay').click(function(event) {
      $('.close').click();
  });

  $('.carousel').carousel();
  $('.menuprin').affix({
      offset: {
        top: $('.headercont').height()
      }
  });
  $(".product-image-thumbnails a").click(function(event) {
    $("#prod-img").attr("src", $(this).attr("data-zoom-image"));
    $("#prod-img").data("zoom-image", $(this).data("zoom-image"));
    activatezoom($('div.product-image-frame img').data('zoomimagewidth'));
    // prevent href
    return false;
  }); 
});
