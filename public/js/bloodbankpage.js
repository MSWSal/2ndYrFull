function initAutocomplete() {
    
    // The location of Uluru
    let lat=document.getElementById("lat");
    let lng=document.getElementById("lng");
    lat=parseFloat(lat.value);
    lng=parseFloat(lng.value);


    let srilanka={lat: lat ,lng: lng};

    // The map, centered at Uluru
    var map = new google.maps.Map(document.getElementById("map"), {
      zoom: 12,
      center: srilanka,
      mapTypeControl: true,

    
    });
    

    var input = document.getElementById("locationInp"); //r
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);//r

    var autocomplete = new google.maps.places.Autocomplete(input); //r
    var marker=new google.maps.Marker({
      draggable:false,//false
  
      map:map
    });
    marker.setPosition(srilanka); //change
    marker.setVisible(true); //after
}
  
  document.addEventListener("DOMContentLoaded",function(event){initAutocomplete()});
  
  