<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>
<title>Admin Blood Bank Home</title>

<script src="https://kit.fontawesome.com/1a2c8fa8df.js" crossorigin="anonymous"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTET7frzRd7t4FvurRzw28rbqEE7_oWFU&callback=initMap&libraries=places"></script>
<script src="http://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script defer src="<?= ROOT ?>/js/reqdonationcamps.js"></script>

<?php $i = 0 ?>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminbloodbankhome.css">




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
            <h1 class="h1"><?= $rows[0]->name ?></h1>
        </div>

        <div class="form-add">
            <form method="post" id="form">
                <div class="d">
                    <div class="close">
                        <div class="d3">
                            <div class="city">
                                <label for="blood-bank-name">Name</label>
                                <label class="infor" id="name" name="name">: <?= $rows[0]->name ?></label>
                            </div>
                        </div>

                        <div class="d2">
                            <div class="">
                                <label for="telephone-number">Mobile </label>
                                <label class="infor" id="telephone" name="telephone">: <?= $rows[0]->telephone ?></label>
                            </div>
                        </div>

                        <div class="d3">
                            <div class="city">
                                <label for="no">House No. </label>
                                <label class="infor" id="house_no" name="house_no">: <?= $rows[0]->house_no ?></label>
                            </div>
                        </div>

                        <div class="street">
                            <label for="street">Street</label>
                            <label class="infor" id="street" name="street">: <?= $rows[0]->street ?></label>
                        </div>

                        <div class="d2">
                            <div class="city">
                                <label for="city">City </label>
                                <label class="infor" id="city" name="city">: <?= $rows[0]->city ?></label>
                            </div>
                        </div>

                        <div class="d3">
                            <div class="city">
                                <label for="no">Province </label>
                                <label class="infor" id="house_no" name="house_no">: <?= $rows[0]->province ?></label>
                            </div>
                        </div>

                        <div class="d2">
                            <div class="city">
                                <label for="city">District </label>
                                <label class="infor" id="city" name="city">: <?= $rows[0]->district ?></label>
                            </div>
                        </div>


                    </div>

                    <div class="map">
                        <input type="text" id="locationInp" class="locationinp">

                        <input type="text" class="inp1" id="p-latitude" name="latitude" hidden>
                        <input type="text" class="inp1" id="p-longitude" name="longitude" hidden>

                        <div class="map" id="map"></div>
                        <div class="but"><a href="<?= ROOT ?>/adminbloodbankhome?id=<?= $rows[0]->blood_bank_id ?>"><button type="button" class="btn" id="addMap">Add Map</button></a></div>
                            <!-- <button type="button" class="btn" id="addMap" href = "<?= ROOT ?>/adminbloodbankhome/addMapAndRedirectToHome">Add Map</button> -->
                            
                        </div>
                    </div>



                </div>

            </form>
        </div>
    </div>

</div>