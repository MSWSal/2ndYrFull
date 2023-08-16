<?php
 $this->view("includes/navbar",$data);
$data=$data[0];
$data=$data[0];
?>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTET7frzRd7t4FvurRzw28rbqEE7_oWFU&callback=initMap&libraries=places"></script>
<script src="http://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script defer src="<?=ROOT?>/js/bloodbankpage.js"></script>
<link rel="stylesheet" href="<?= ROOT ?>/css/bloodbankpageview.css">
<title><?=$data->name?></title>


<div class="">
    <h1 class="h1"><?= $data->name ?></h1>
</div>
<input id="lat" type="text" value="<?=$data->latitude?>" hidden>
<input id="lng" type="text" value="<?=$data->longitude?>" hidden>

<div class="form-add">
    <form method="post" id="form">
        <div class="d">
            <div class="close">
                <div class="d3">
                    <div class="city">
                        <label for="blood-bank-name">Name</label>
                        <label class="infor" id="name" name="name">:  <?= $data->name ?></label>
                    </div>
                </div>

                <div class="d2">
                    <div class="">
                        <label for="telephone-number">Mobile </label>
                        <label class="infor" id="telephone" name="telephone">: <?= $data->telephone ?></label>
                    </div>
                </div>

                <div class="d3">
                    <div class="city">
                        <label for="no">House No. </label>
                        <label class="infor" id="house_no" name="house_no">: <?= $data->house_no ?></label>
                    </div>
                </div>

                <div class="street">
                    <label for="street">Street</label>
                    <label class="infor"id="street" name="street">: <?= $data->street ?></label>
                </div>
                
                <div class="d2">
                    <div class="city">
                        <label  for="city">City </label>
                        <label class="infor" id="city" name="city">: <?= $data->city ?></label>
                    </div>
                </div>

                <div class="d3">
                    <div class="city">
                        <label for="no">Province </label>
                        <label class="infor" id="house_no" name="house_no">: <?= $data->province ?></label>
                    </div>
                </div>

         

            </div>

            <div class="map">
                <label class="loc" for="map">Location :</label>
                <label class="map-in" type="text" id="map" name="map">
            </div>


        </div>

    </form>
</div>