<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>
<title>Admin Blood Bank</title>

<script src="https://kit.fontawesome.com/1a2c8fa8df.js" crossorigin="anonymous"></script>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTET7frzRd7t4FvurRzw28rbqEE7_oWFU&callback=initMap&libraries=places"></script>
<script src="http://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script defer src="<?= ROOT ?>/js/reqdonationcamps.js"></script>


<?php $i = 0 ?>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminaddbloodbank.css">


<div class="main1">

    <div class="left">
        <div class="b12">
            <p></p>
        </div>

        <a class="a11" href="<?= ROOT ?>/AdminDashBoard">
            <div class="b11">
                <p class="">Dash Board</p>
            </div>
        </a>

        <a class="a11" href="<?= ROOT ?>/AdminHome">
            <div class="b11_1">
                <p class="pp">Blood Bank</p>
            </div>
        </a>


        <a class="a11" href="<?= ROOT ?>/AdminBloodStocks">
            <div class="b11">
                <p>View Blood Stocks</p>
            </div>
        </a>


        <a class="a11" href="<?= ROOT ?>/AdminDonationCamps">
            <div class="b11">
                <p>View Blood Donation <br> Camps</p>
            </div>
        </a>


        <a class="a11" href="<?= ROOT ?>/AdminStaffUsers">
            <div class="b11">
                <p>Staff Users</p>
            </div>
        </a>


        <a class="a11" href="<?= ROOT ?>/AdminPublicUsers">
            <div class="b11">
                <p>Public Users</p>
            </div>
        </a>



        <a class="a11" href="<?= ROOT ?>/AdminBugs">
            <div class="b11">
                <p>Feedbacks</p>
            </div>
        </a>


        <a class="a11" href="<?= ROOT ?>/AdminNews">
            <div class="b11">
                <p>News</p>
            </div>
        </a>

        <a class="a11" href="<?= ROOT ?>/Admin">
            <div class="b11">
                <p class="">Admin</p>
            </div>
        </a>

    </div>

    <div class="right">


        <div class="">
            <h1 class="h2">Add Blood Bank</h1>
        </div>

        <div id="" class="">
            <form method="post" class="" id="Add_BB">



                <div class="l2">
                    <div class="f">
                        <label class="lable22" for="blood-bank-name">Blood Bank Name </label>
                        <input class="input qw" type="text" placeholder="Full Name" name="name" id="name">
                        <small>error message</small>
                    </div>
                </div>

                <div class="l2">

                    <div class="f">
                        <label class="lable22" for="street">Telephone No.</label>
                        <input class="input" type="text" placeholder="Telephone Number" name="telephone" id="telephone">
                        <small>error message</small>
                    </div>

                    <div class="f">
                        <label class="lable22" for="city">House No. </label>
                        <input class="input" type="text" placeholder="House No" name="house_no" id="house_no">
                        <small>error message</small>
                    </div>

                </div>

                <div class="l2">

                    <div class="f">
                        <label class="lable22" for="city">City</label>
                        <input class="input" type="text" placeholder="City" id="city" name="city">
                        <small>error message</small>
                    </div>

                    <div class="f">
                        <label class="lable22" for="city">Street </label>
                        <input class="input" type="text" placeholder="Street" id="street" name="street">
                        <small>error message</small>
                    </div>

                </div>


                <div class="l2">

                    <div class="f">
                        <label class="lable22" for="street">District</label>
                        <select class="input sele" id="district" name="district">
                            <option value="Ampara">Ampara</option>
                            <option value="Anuradhapura">Anuradhapura</option>
                            <option value="Badulla">Badulla</option>
                            <option value="Batticaloa">Batticaloa</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Galle">Galle</option>
                            <option value="Gampaha">Gampaha</option>
                            <option value="Hambantota">Hambantota</option>
                            <option value="Jaffna">Jaffna</option>
                            <option value="Kalutara">Kalutara</option>
                            <option value="Kandy">Kandy</option>
                            <option value="Kegalle">Kegalle</option>
                            <option value="Kilinochchi">Kilinochchi</option>
                            <option value="Kurunegala">Kurunegala</option>
                            <option value="Mannar">Mannar</option>
                            <option value="Matale">Matale</option>
                            <option value="Matara">Matara</option>
                            <option value="Monaragala">Monaragala</option>
                            <option value="Mullaitivu">Mullaitivu</option>
                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                            <option value="Polonnaruwa">Polonnaruwa</option>
                            <option value="Puttalam">Puttalam</option>
                            <option value="Ratnapura">Ratnapura</option>
                            <option value="Trincomalee">Trincomalee</option>
                            <option value="Vavuniya">Vavuniya</option>
                        </select>
                        <small>error message</small>
                    </div>

                    <div class="f">
                        <label class="lable22" for="city">Province </label>
                        <select class="input sele" id="province" name="province">
                            <option value="Central">Central</option>
                            <option value="Eastern">Eastern</option>
                            <option value="Northern">Northern</option>
                            <option value="North Central">North Central</option>
                            <option value="North Western">North Western</option>
                            <option value="Sabaragamuwa">Sabaragamuwa</option>
                            <option value="Southern">Southern</option>
                            <option value="Uva">Uva</option>
                            <option value="Western">Western</option>
                        </select>
                        <small>error message</small>
                    </div>

                </div>



                <div class="l3">
                    <div class="f">
                        <div class="location as">
                            <input type="text" id="locationInp" class="locationinp">

                            <input type="text" class="inp1" id="p-latitude" name="latitude" hidden>
                            <input type="text" class="inp1" id="p-longitude" name="longitude" hidden>

                            <div class="map" id="map"></div>

                        </div>
                    </div>
                </div>



                <div class="but2">
                    <input type="submit" class="add_bank1" name="">

                </div>

            </form>
        </div>
    </div>

</div>


<script src="<?= ROOT ?>/js/AdminAddbloodbank.js"></script>