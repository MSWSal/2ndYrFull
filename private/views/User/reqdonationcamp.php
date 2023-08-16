<?php $this->view("includes/navbar", $data); ?>
<link rel="stylesheet" href="<?= ROOT ?>/css/reqdonationcamps.css">
<script src="https://kit.fontawesome.com/1a2c8fa8df.js" crossorigin="anonymous"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTET7frzRd7t4FvurRzw28rbqEE7_oWFU&callback=initMap&libraries=places"></script>
<script src="http://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script defer src="<?= ROOT ?>/js/reqdonationcamps.js"></script>
<title>Organize Request</title>



<div class="all">


        <div class="sec1">

                <h1>Request to organize blood donation camp</h1>

        </div>

        <div class="sec2">
                <form method="get" id="campreqform">

                       <div class="l4">
                                <button type="submit" class="btn">Request</button>
                        </div>



                        <div class="l2">
                                <div class="f">
                                        <label class="lable22" for="blood-bank-name">Campaign Name </label>
                                        <input class="input qw" type="text" placeholder="Full Name" id="cName" name="name">
                                        <small>error message</small>
                                </div>
                        </div>

                        <div class="l2">

                                <div class="f">
                                        <label class="lable22" for="street">City</label>
                                        <input class="input" type="text" placeholder="City" name="city" id="city">
                                        <small>error message</small>
                                </div>

                                <div class="f">
                                        <label class="lable22" for="city">House No. </label>
                                        <input class="input" type="text" placeholder="House No" id="houseno" name="house_no">
                                        <small>error message</small>
                                </div>

                        </div>

                        <div class="l2">
                                <div class="f">
                                        <label class="lable22" for="blood-bank-name">Street </label>
                                        <input class="input qw" type="text" placeholder="Street Name" id="street" name="street">
                                        <small>error message</small>
                                </div>
                        </div>

                        <div class="l2">

                                <div class="f">
                                        <label class="lable22" for="city">Phone No.</label>
                                        <input class="input" type="text" placeholder="Phone No" id="phone" name="telephone">
                                        <small>error message</small>
                                </div>

                                <div class="f">
                                        <label class="lable22" for="city">Date </label>
                                        <input class="input" type="date" placeholder="Date" id="date" name="date">
                                        <small>error message</small>
                                </div>

                        </div>






                        <div class="l3">
                                <div class="f">
                                        <div class="location as">
                                                <input type="text" id="locationInp" class="locationinp">
                                                
                                                <input type="text" class="inp1" id="p-latitude" name="latitude" hidden>
                                                <input type="text" class="inp1" id="p-longitude" name="longitude" hidden>
                                                <label for="cName" class="labels1">Location ( Select the Location )</label><br>
                                                <div class="map" id="map"></div>
                                                
                                        </div>
                                </div>
                        </div>








                </form>
        </div>
</div>