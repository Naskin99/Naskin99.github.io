 
function initMap() {
    var uluru = {lat: 53.707442, lng: -1.265564};
    var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}    