$(function () {
    $("iframe").attr("allow","encrypted-media");
   $("#overlay-video").one("mousedown", function () {
       var src = $("iframe").attr('src') ;
       console.log(src);
       src = src+"&autoplay=1";
       console.log(src);
       $("#thevideo>iframe").attr('src', src );
       $("#thevideo").css("padding-bottom","56.25%");
   });
});

/*
$("#thevideo>iframe").attr('src', $("iframe").attr('src') );
 */