<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>
<?php $i = 0 ?>
<title>Admin Edit news</title>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminaddnews.css">


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
                <p>Blood Bank</p>
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





        <div class="">
            <h1 class="h1">Update News</h1>
        </div>

        <?php foreach ($rows as $value) : ?>

            <div class="form-add">
                <form method="post" id="update_news" enctype="multipart/form-data">


                  

                    <div class="f">
                        <label class="lable22" for="blood-bank-name">Description :</label>
                        <input class="input" type="text" id="description" name="description" value="<?= $value->description ?>">
                        <small>error message</small>
                    </div>


                    <div class="f">
                            <label class="lable22" for="telephone-number">Image : </label>
                            <input type="file" name="file" id="file" class="file">      
                            <small>error message</small>                 
                    </div>


                    <div class="f">
                        <label class="lable22" for="no">Link : </label>
                        <input class="input" type="text" id="link" name="link" value="<?= $value->link ?>"><br>
                        <small>error message</small>
                    </div>

                    <div class="add">
                        <button class="add_bank" href="<?= ROOT ?>/AdminNews" type="submit">Update</button>
                    </div>

                </form>
            </div>



        <?php endforeach; ?>
    </div>
</div>




<script src="<?= ROOT ?>/js/update_news.js"></script>