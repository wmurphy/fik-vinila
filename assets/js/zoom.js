/**
* zoom.js is a JS enabling magnifying glass effect on product images and gallery effect.
*/
$(window).load(vinilazoom);
$(window).resize(function(){$(".zoomContainer").remove(); vinilazoom();});

function vinilazoom() {
    $(".product-image-thumbnails a").click(function(event) {
        event.stopPropagation();
        event.preventDefault();
        $("#prod-img").attr("src", $(this).attr("data-zoom-image"));
        $("#prod-img").data("zoom-image", $(this).data("zoom-image"));
    });

    if($(window).width() < 993) return false;
    // Add zoom to the new image
    $("#prod-img").elevateZoom({responsive: true, scrollZoom:true, gallery:'thumbnails-gallery', zoomWindowWidth:$("#prod-img").width(), zoomWindowHeight:$("#prod-img").height(), zoomWindowOffetx: 15, tint:true, tintColour:'#ccc', tintOpacity:0.5, zoomWindowFadeIn: 500, zoomWindowFadeOut: 500, lensFadeIn: 200, lensFadeOut: 300, easing : true});
}
