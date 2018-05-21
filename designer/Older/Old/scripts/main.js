function openTab(evt, buttonText) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(buttonText).style.display = "block";
        evt.currentTarget.className += " active";
    }

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
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("AboutOpen").click();