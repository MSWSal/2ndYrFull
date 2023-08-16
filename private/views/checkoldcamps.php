<?php $this->view('includes/navbar'); ?>
<title>check location</title>
<link rel="stylesheet" href="<?= ROOT ?>/css/checkoldcamps.css">
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTET7frzRd7t4FvurRzw28rbqEE7_oWFU&callback=initMap&libraries=places"></script>
<script src="http://polyfill.io/v3/polyfill.min.js?features=default"></script>
<!-- <script defer src="js/checkoldcamps.js"></script> -->
<br>
<h1>Check For a Location</h1>
<br>


<div class="sec1">
    <div class="map" id="map"></div>
</div>

<script>


function initAutocomplete() {
    let srilanka = { lat: 7.8731, lng: 80.7718 };
    // The location of Uluru

    // The map, centered at Uluru
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 8,
        center: srilanka,
        mapTypeControl: false,


    });
    var locations=[];
    <?php foreach ($d2 as $key):  ?>
  
        

    locations.push({lat:parseFloat(<?= $key['latitude'] ?>), lng:parseFloat(<?= $key['longitude'] ?>)});
    
    
    

     <?php endforeach; ?> 
     console.log(locations)
     locations.forEach(function(location) {
        new google.maps.Marker({
          position: location,
          map: map
        });
      });



    // var marker = new google.maps.Marker({
    //     draggable: true,//false

    //     map: map
    // });
    // marker.setPosition(srilanka); //change
    // marker.setVisible(true); //after
    
 

}
//here

document.addEventListener("DOMContentLoaded", function (event) { initAutocomplete() });

</script>