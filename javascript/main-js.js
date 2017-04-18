function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 54.901, lng: 23.880},
          zoom: 7,
          styles: [
    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": 33
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2e5d4"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#c5dac6"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#c5c6c6"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e4d7c6"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#fbfaf7"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#acbcc9"
            }
        ]
    }
]
        });

var icons = {
    commercial: {
        icon:  'images/office-building.png'
    },
    residental: {
        icon: 'images/apartment.png'
    },
    industry: {
        icon: 'images/factory.png'
    },
    publicPlaces: {
        icon: 'images/embassy.png'
    }
};    

var features = [
   {
    position: new google.maps.LatLng(54.901980, 23.880304),
    type: 'residental'
   }, {
    position: new google.maps.LatLng(54.903830, 23.895626),
    type: 'commercial'
   }
];

features.forEach(function(feature) {
    var marker = new google.maps.Marker({
        position: feature.position,
        icon: icons[feature.type].icon,
        map: map
    });
});
      
}




