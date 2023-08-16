<?php $this->view("includes/navbar", ); ?>
<title>Where to Donate?</title>
<?php $i = 0 ?>


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTET7frzRd7t4FvurRzw28rbqEE7_oWFU&callback=initMap&libraries=places"></script>
<script src="http://polyfill.io/v3/polyfill.min.js?features=default"></script>
<link rel="stylesheet" href="<?= ROOT ?>/css/wheretodonate.css">
<?php
$data = $data[0];
// print_r($data[2]); 
?>
<div class="sec1">
    <h1>Become a Donor</h1>
</div>

<div class="sec2">
<a class="a" href="<?= ROOT ?>/becomeadonor?click=campaigns">Campaigns</a>

    <a class="a" href="<?= ROOT ?>/becomeadonor">Ways to Donate Blood</a>
    <a class="a" href="<?= ROOT ?>/becomeadonor?click=amieligible">Am I Eligible?</a>
    <a class="a1" href="<?= ROOT ?>/becomeadonor?click=wheretodonate">Where to Donate</a>
    <a class="a" href="<?= ROOT ?>/becomeadonor?click=whendonating">Before you Donate</a>
    <a class="a" href="<?= ROOT ?>/becomeadonor?click=beforedonate">What to Expect When Donating?</a>
    <a class="a" href="<?= ROOT ?>/becomeadonor?click=afterdonate">After you Donate</a>
</div>

<div class="sec3">
    <div class="sec3-h">
        <p>You can donate blood by going to any blood bank or any <a href="<?= ROOT ?>/campaigns"> campaign</a> near
            your
            area. </p>
    </div>
    <div class="sec3-h">
        <h>Our Blood Banks </h>
    </div>
</div>

<div class="sec4">

    <?php foreach ($data as $value): ?>

        <?php if ($i % 3 == 0 && $i != 0): ?>
        </div>
        <div class="sec4">
        <?php endif ?>

        <div class="card"><a href="<?= ROOT ?>/bloodbankpage/<?= $value->blood_bank_id ?>">
                <div class="loc-logo">
                    <img src="<?= ROOT ?>/images/location.png" alt="">
                </div>
            </a>
            <div class="info">
                <div class="bname"><?= $value->name ?></div>
                <div class="baddress1"><?= $value->house_no ?>     <?= $value->street ?>,</div>
                <div class="baddress2"><?= $value->city ?></div>
                <div class="btel">Tel : <?= $value->telephone ?></div>
            </div>


        </div>
        <?php $i++; ?>
    <?php endforeach; ?>
</div>






</div>

<div class="map" id="map"></div>

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