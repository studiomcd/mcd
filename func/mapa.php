<?php
function mapa_func( $atts ) {

     extract( shortcode_atts( array(
		 'lat' => '',
		 'lng' => '',
		 'pin' => '',
		 'zoom' => '',
		 'titulo' => ''
	 ),

     $atts ) );

	
	
	
	$html ='<section class="section-entree-google-map">
    <div class="masque-noir"></div>
	<div id="map"></div>
	<script>
    function initMap() {
        var myLatLng = {lat: '. $lat .', lng: '. $lgn .'};
        var map = new google.maps.Map(document.getElementById("map"), {
        center: myLatLng,
        zoom: '. $zoom .',
        styles: [
                {
                    "featureType": "all",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "on",
                        },
                    ],
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36,
                        },
                        {
                            "color": "#000000",
                        },
                        {
                            "lightness": 40,
                        },
                    ],
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on",
                        },
                        {
                            "color": "#000000",
                        },
                        {
                            "lightness": 16,
                        },
                    ],
                },
                {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off",
                        },
                    ],
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000",
                        },
                        {
                            "lightness": 20,
                        },
                        {
                            "visibility": "on",
                        },
                    ],
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#000000",
                        },
                        {
                            "lightness": 17,
                        },
                        {
                            "weight": 1.2,
                        },
                        {
                            "visibility": "on",
                        },
                    ],
                },
                {
                    "featureType": "administrative.locality",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on",
                        },
                    ],
                },
                {
                    "featureType": "administrative.locality",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#c0c0c0",
                        },
                    ],
                },
                {
                    "featureType": "administrative.neighborhood",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#707070",
                        },
                    ],
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#222226",
                        },
                        {
                            "lightness": "0",
                        },
                    ],
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000",
                        },
                        {
                            "lightness": 21,
                        },
                        {
                            "visibility": "on",
                        },
                    ],
                },
                {
                    "featureType": "poi.business",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on",
                        },
                    ],
                },
                {
                    "featureType": "poi.business",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "on",
                        },
                    ],
                },
                {
                    "featureType": "poi.business",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "color": "#ffffff",
                        },
                        {
                            "weight": "0.01",
                        },
                    ],
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#eeeeee",
                        },
                        {
                            "lightness": "0",
                        },
                        {
                            "visibility": "on",
                        },
                    ],
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "visibility": "off",
                        },
                        {
                            "color": "#cdcdcd",
                        },
                    ],
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "visibility": "off",
                        },
                    ],
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "off",
                        },
                        {
                            "hue": "#ff0000",
                        },
                    ],
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000",
                        },
                        {
                            "lightness": 18,
                        },
                    ],
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#575757",
                        },
                    ],
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#ffffff",
                        },
                    ],
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#2c2c2c",
                        },
                    ],
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000",
                        },
                        {
                            "lightness": 16,
                        },
                    ],
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#999999",
                        },
                    ],
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "saturation": "-52",
                        },
                    ],
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000",
                        },
                        {
                            "lightness": 19,
                        },
                    ],
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000",
                        },
                        {
                            "lightness": 17,
                        },
                    ],
                },
            ],
        });
		
		var marker = new google.maps.Marker({
          position: myLatLng,
		  icon: "'. $pin .'",
          map: map,
          title: "'. $titulo .'"
        });
		
		
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDw8wDUlPTWqrhpLD61oMIvKnLSfxy3gSE&callback=initMap"
    async defer></script>
</section>'; 
							

     return $html;

    

	

	}

    add_shortcode('mapa', 'mapa_func');


/////////////////////////////////////////////

?>