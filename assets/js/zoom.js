/**
* zoom.js is a JS enabling magnifying glass effect on product images and gallery effect.
*/
$(window).load(activatezoom);
$(window).resize(function(){$(".zoomContainer").remove(); activatezoom();});

ffunction activatezoom(zoomimagewidth) {
    jQuery('.zoomContainer').remove();
    if (jQuery('div.product-image-frame img').width() < (zoomimagewidth)*0.77) {
        jQuery('div.product-image-frame img').elevateZoom({
            zoomType : "lens",
            lensShape : "square",
            lensSize : 250
        });
    } else {
        jQuery('.zoomLens').css('opacity','0');
    }
}

jQuery(document).ready(function() {
    activatezoom(jQuery('div.product-image-frame img').data('zoomimagewidth'));
});

