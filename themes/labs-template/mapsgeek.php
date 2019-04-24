<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    /* always set the map height explicity to define the size of the div element that contains the map.*/
.map {
    height: 750px;
    width: 100% !important;
}
.gmap_canvas {
    width: 100% !important;
    height: 100% !important;
}
#gmap_canvas {
    width: 100% !important;
    height: 100% !important;
}
</style>
    <title>Simple map</title>
</head>

<body>
<div class="map" id="map-area" >

    <div class="gmap_canvas" >

    <iframe  id="gmap_canvas" src="https://maps.google.com/maps?q= <?= urlencode(get_theme_mod('map-url')) ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

</div>

</div>
</body>
</html>

