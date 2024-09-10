let map;
let service;
let infowindow;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 3.848, lng: 11.5021 }, // Coordonnées approximatives de Yaoundé 5
        zoom: 14
    });

    infowindow = new google.maps.InfoWindow();
}

document.getElementById('getLocation').addEventListener('click', function() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        document.getElementById('location').textContent = "La géolocalisation n'est pas supportée par votre navigateur.";
    }
});

function showPosition(position) {
    const userLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
    map.setCenter(userLatLng);

    const request = {
        location: userLatLng,
        radius: '5000', // Rechercher dans un rayon de 5 km
        type: ['pharmacy']
    };

    service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, callback);
}

function callback(results, status) {
    if (status === google.maps.places.PlacesServiceStatus.OK) {
        for (let i = 0; i < results.length; i++) {
            const place = results[i];
            createMarker(place);
        }
    } else {
        document.getElementById('location').textContent = "Aucune pharmacie trouvée.";
    }
}

function createMarker(place) {
    const marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(place.name + '<br>' + place.vicinity);
        infowindow.open(map, this);
    });
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            document.getElementById('location').textContent = "Vous avez refusé la demande de géolocalisation.";
            break;
        case error.POSITION_UNAVAILABLE:
            document.getElementById('location').textContent = "Les informations de géolocalisation ne sont pas disponibles.";
            break;
        case error.TIMEOUT:
            document.getElementById('location').textContent = "La demande de géolocalisation a expiré.";
            break;
        case error.UNKNOWN_ERROR:
            document.getElementById('location').textContent = "Une erreur inconnue s'est produite.";
            break;
    }
}

window.onload = initMap;
