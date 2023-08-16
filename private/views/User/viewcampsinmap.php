<?php $this->view("includes/navbar", ); ?>
<title>Campaings- mapview</title>



<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTET7frzRd7t4FvurRzw28rbqEE7_oWFU&callback=initMap&libraries=places"></script>
<script src="http://polyfill.io/v3/polyfill.min.js?features=default"></script>
<link rel="stylesheet" href="<?= ROOT ?>/css/viewcampsinmap.css">
<?php
// $data = $data[0];
// print_r($flag['nocamps']); 
?>
<div class="sec1">
    <h1>Campaigns</h1>
</div>
<div class="sec2">
<button id="progress-btn" class="progress-btn <?php if ($flag['flag'] == 1)
        echo "selected" ?>">Today</button>
    <button id="upcoming-btn" type="button" class="upcoming-btn <?php if ($flag['flag'] == 0)
        echo "selected" ?>">Upcoming</button>
        
        
    </div>

<div class="map" id="map"></div>
<?php if ($flag['nocamps'] ==1 ): ?>
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
    <?php foreach ($data as $key):  ?>
  
        

    locations.push({lat:parseFloat(<?= $key->latitude ?>), lng:parseFloat(<?= $key->longitude ?>)});
    
    
    

     <?php endforeach; ?> 
     console.log(locations)
     locations.forEach(function(location) {
        new google.maps.Marker({
          position: location,
          map: map
        });
      });



 

}
//here

document.addEventListener("DOMContentLoaded", function (event) { initAutocomplete() });


</script>

<?php else :?>

    <h2 class="nocamps">No camps available</h2>

 <?php endif; ?>   
 <script src="<?=ROOT?>/js/viewcampsinmap.js"></script>
