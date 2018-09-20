var map;
var idInfoBoxAberto;
var infoBox = [];
var markers = [];

function initialize() {
	var latlng = new google.maps.LatLng(20.753726,-103.416978);

    var options = {
        zoom: 15,
        scrollwheel: false,
		center: latlng,
		zoomControl: false,
		mapTypeControl: false,
		// styles: [
		//     {
		//         "featureType": "all",
		//         "elementType": "labels.text.fill",
		//         "stylers": [
		//             {
		//                 "saturation": 36
		//             },
		//             {
		//                 "color": "#000000"
		//             },
		//             {
		//                 "lightness": 40
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "all",
		//         "elementType": "labels.text.stroke",
		//         "stylers": [
		//             {
		//                 "visibility": "on"
		//             },
		//             {
		//                 "color": "#000000"
		//             },
		//             {
		//                 "lightness": 16
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "all",
		//         "elementType": "labels.icon",
		//         "stylers": [
		//             {
		//                 "visibility": "off"
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "administrative",
		//         "elementType": "geometry.fill",
		//         "stylers": [
		//             {
		//                 "color": "#000000"
		//             },
		//             {
		//                 "lightness": 20
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "administrative",
		//         "elementType": "geometry.stroke",
		//         "stylers": [
		//             {
		//                 "color": "#000000"
		//             },
		//             {
		//                 "lightness": 17
		//             },
		//             {
		//                 "weight": 1.2
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "administrative.locality",
		//         "elementType": "labels.text",
		//         "stylers": [
		//             {
		//                 "color": "#30d8ca"
		//             },
		//             {
		//                 "visibility": "simplified"
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "landscape",
		//         "elementType": "geometry",
		//         "stylers": [
		//             {
		//                 "color": "#000000"
		//             },
		//             {
		//                 "lightness": 20
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "poi",
		//         "elementType": "geometry",
		//         "stylers": [
		//             {
		//                 "color": "#000000"
		//             },
		//             {
		//                 "lightness": 21
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "road.highway",
		//         "elementType": "geometry.fill",
		//         "stylers": [
		//             {
		//                 "color": "#000000"
		//             },
		//             {
		//                 "lightness": 17
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "road.highway",
		//         "elementType": "geometry.stroke",
		//         "stylers": [
		//             {
		//                 "color": "#000000"
		//             },
		//             {
		//                 "lightness": 29
		//             },
		//             {
		//                 "weight": 0.2
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "road.highway",
		//         "elementType": "labels.text",
		//         "stylers": [
		//             {
		//                 "color": "#27a6a1"
		//             },
		//             {
		//                 "visibility": "simplified"
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "road.arterial",
		//         "elementType": "geometry",
		//         "stylers": [
		//             {
		//                 "color": "#000000"
		//             },
		//             {
		//                 "lightness": 18
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "road.arterial",
		//         "elementType": "geometry.fill",
		//         "stylers": [
		//             {
		//                 "visibility": "on"
		//             },
		//             {
		//                 "color": "#c9c5c5"
		//             },
		//             {
		//                 "saturation": "-54"
		//             },
		//             {
		//                 "lightness": "-58"
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "road.arterial",
		//         "elementType": "geometry.stroke",
		//         "stylers": [
		//             {
		//                 "saturation": "-40"
		//             },
		//             {
		//                 "lightness": "15"
		//             },
		//             {
		//                 "visibility": "off"
		//             },
		//             {
		//                 "color": "#ff0000"
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "road.arterial",
		//         "elementType": "labels.text",
		//         "stylers": [
		//             {
		//                 "visibility": "simplified"
		//             },
		//             {
		//                 "color": "#e9e8e4"
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "road.local",
		//         "elementType": "geometry",
		//         "stylers": [
		//             {
		//                 "color": "#000000"
		//             },
		//             {
		//                 "lightness": 16
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "road.local",
		//         "elementType": "labels.text",
		//         "stylers": [
		//             {
		//                 "color": "#c1b3b3"
		//             },
		//             {
		//                 "visibility": "simplified"
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "transit",
		//         "elementType": "geometry",
		//         "stylers": [
		//             {
		//                 "color": "#000000"
		//             },
		//             {
		//                 "lightness": 19
		//             }
		//         ]
		//     },
		//     {
		//         "featureType": "water",
		//         "elementType": "geometry",
		//         "stylers": [
		//             {
		//                 "color": "#6c92a1"
		//             },
		//             {
		//                 "lightness": 17
		//             }
		//         ]
		//     }
		// ]

    }




    map = new google.maps.Map(document.getElementById("mapa"), options);

        var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        icon: 'img/ico-creactiv.png',
        title: 'CreActiv'
        });
}


initialize();



/*
function abrirInfoBox(id, marker) {
	if (typeof(idInfoBoxAberto) == 'number' && typeof(infoBox[idInfoBoxAberto]) == 'object') {
		infoBox[idInfoBoxAberto].close();
	}

	infoBox[id].open(map, marker);
	idInfoBoxAberto = id;
}

function carregarPontos() {

	$.getJSON('js/pontos.json', function(pontos) {

		var latlngbounds = new google.maps.LatLngBounds();

		$.each(pontos, function(index, ponto) {

			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(ponto.Latitude, ponto.Longitude),
				title: "Meu ponto personalizado! :-D",
				icon: 'img/marcador.png'
			});

			var myOptions = {
				content: "<p>" + ponto.Descricao + "</p>",
				pixelOffset: new google.maps.Size(-150, 0)
        	};

			infoBox[ponto.Id] = new InfoBox(myOptions);
			infoBox[ponto.Id].marker = marker;

			infoBox[ponto.Id].listener = google.maps.event.addListener(marker, 'click', function (e) {
				abrirInfoBox(ponto.Id, marker);
			});

			markers.push(marker);

			latlngbounds.extend(marker.position);

		});

		var markerCluster = new MarkerClusterer(map, markers);

		map.fitBounds(latlngbounds);

	});

}

carregarPontos();

*/
