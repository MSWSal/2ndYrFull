<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>
<title>Admin News</title>

<?php $i = 0 ?>
<link rel="stylesheet" href="<?= ROOT ?>/css/adminnews.css">

<div class="overlay" id="overlay"></div>



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
            <div class="b11">
                <p class="">Blood Bank</p>
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
            <div class="">
                <p class="pp">News</p>
            </div>
        </a>

        <a class="a11" href="<?= ROOT ?>/Admin">
            <div class="b11">
                <p class="">Admin</p>
            </div>
        </a>

    </div>

    <div class="right">


        <h1 class="h1">News</h1>

        <div class="heading">


           
            <div class="city">


                <div id="myForm1" class="form-popup">
                    <form method="post" class="form-container" id="add_news">

                        <h2>Add News</h2>

                        <div class="f">
                            <label class="lable22" for="blood-bank-name">Title : </label>
                            <input class="input" type="text" id="title" name="title"><br>
                            <small>error message</small>
                        </div>

                        <div class="f">
                            <label class="lable22" for="blood-bank-name">Admin ID : </label>
                            <input class="input" type="text" id="admin_id" name="admin_id"><br>
                            <small>error message</small>
                        </div>

                        <div class="f">
                            <label class="lable22" for="street">Link : </label>
                            <input class="input" type="text" id="link" name="link"><br>
                            <small>error message</small>
                        </div>

                        <div class="f">
                        <label class="lable22" for="street">Add Image : </label>
                            <input type="file" name="file" id="file" class="file">
                            <small class="ss">error message</small>
                        </div>

                        <div class="f">
                            <label class="lable22" for="blood-bank-name">Description :</label>
                            <textarea class="input pw" id="description" name="description"></textarea><br>
                            <small>error message</small>

                        </div>




                        <div class="but2">
                            <input type="submit" class="add_bank1" name="">
                            <!-- <button name="add"><input type="submit" class="add_bank1" name=""></button> -->
                            <button type="button" class="add_bank1" onclick="closeForm1()">Close</button>
                        </div>

                    </form>
                </div>

            </div>



        </div>



        <div class="sec2">
            <?php foreach ($rows as $value) : ?>
                <?php if ($i % 2 == 0 && $i != 0) : ?>
        </div>
        <div class="sec2">
        <?php endif ?>
        <div class="card">
            <div class="">
                <div class="nandd">
                    <div class="name1"><h2> News - <?= $i+1 ?></h2></div>
                    <!-- <div class="date"><?= $value->news_id ?></div> -->
                    <p class="p12">
                        <?php
                        $text = $value->description;
                        $limit = 275; // The maximum number of characters to show before the "Read More" link
                        if (strlen($text) > $limit) {
                            $text = substr($text, 0, $limit) . '... <a id="myForm" href="#" onclick="openForm(' . $value->news_id . ')">Read More</a><span id="moreText" style="display:none;">';
                        }
                        echo '<p>' . $text . '</p>';
                        ?>
                    </p>
                </div>
            </div>
            <div class="butt">
                <div class="cs-31">
                    <a class="a1 reply" href="<?= ROOT ?>/AdminEditNews?id=<?= $value->news_id ?>">Edit</a>
                </div>
            </div>
            <div class="city">
                <div id="myForm<?= $value->news_id ?>" class="form-popup myForm">
                    <form method="post" class="form-container">
                        <h2><?= $value->title ?></h2>
                        <!-- <div class="name1">
                            <label class="lable22" for="blood-bank-name">News ID</label>
                            <p class="des">
                            <div class="box12">
                                <?= $value->news_id ?>
                            </div>
                            </p>
                        </div> -->
                        <div class="map">
                            <label class="lable22" class="loc" for="map">Description</label>
                            <p class="des">
                            <div class="box12">
                                <?= $value->description ?>
                            </div>
                            </p>
                        </div>
                        <div class="but2">
                            <button type="button" class="add_bank1" onclick="closeForm(<?= $value->news_id ?>)">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php $i++; ?>
    <?php endforeach; ?>
        </div>



    </div>


</div>











<script src="<?= ROOT ?>/js/add_news.js"></script>




<script>
    function openForm1() {
        document.getElementById("myForm1").classList.add("show");
        document.querySelector(".overlay").style.display = "block";
    }

    function closeForm1() {
        document.getElementById("myForm1").classList.remove("show");
        document.querySelector(".overlay").style.display = "none";
    }

    function openForm(id) {
        document.getElementById("moreText").style.display = "inline";
        document.getElementById("myForm" + id).classList.add("show");
        document.querySelector(".overlay").style.display = "block";
    }

    function closeForm(id) {
        document.getElementById("myForm" + id).classList.remove("show");
        document.querySelector(".overlay").style.display = "none";
    }
</script>














