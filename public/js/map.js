function initAutocomplete() {
    var lat = document.getElementById("lat");
    var latval = lat.value;
    var latval = parseFloat(latval);

    var lng = document.getElementById("lng");
    var lngval = lng.value;
    var lngval = parseFloat(lngval);

    let srilanka={lat: latval ,lng: lngval};
    // The location of Uluru
    
    // The map, centered at Uluru
    var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 13,
    center: srilanka,
    mapTypeControl: false,

    
    });
    

   
    var marker=new google.maps.Marker({
    draggable:false,

    map:map
    });
    marker.setPosition(srilanka);
    marker.setVisible(true);


}

document.addEventListener("DOMContentLoaded",function(event){initAutocomplete()});
