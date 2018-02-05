$(function ()  {
    // Correction erreur allow="autoplay; encrypted-media"
    $("iframe").attr("allow","encrypted-media");

    // Action autoplay video
   $("#overlay-video").one("mousedown", function () {

       // chargement source iframe
       var src = $("iframe").attr('src') ;
       console.log(src);

       // ajout attribut autoplay
       src = src+"&autoplay=1";
       console.log(src);

       // placement du nouvel attribut source dans la balise iframe
       $("#thevideo>iframe").attr('src', src );
       $("#thevideo").css("padding-bottom","56.25%");
   });
});

