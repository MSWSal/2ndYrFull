<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>
<?php $i = 0 ?>
<title>Admin reply bugs</title>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminreplybugs.css">



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
            <div class="">
                <p class="pp">Feedbacks</p>
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
            <h1 class="h1">Reply Feedbacks</h1>
        </div>









        <div class="details">
            <div class="name1"> Donor Name : <?= $rows->name ?></div>
            <!-- <div class="date"> Bug ID : <?= $rows->bug_id ?></div> -->


            <div class="cs-2">
                <p> Bug Detail : <?= $rows->bug_detail ?></p>
            </div>

        </div>


        <?php if ($rows->reply == null) { ?>

            <div class="form-add">
                <form method="post" id="form">
                    <div class="name">
                        <label class="label" for="reply">Reply :</label>
                        <input class="Bname" type="text" id="reply" name="reply">
                        <!-- <textarea class="note1" placeholder="Reply . . ."></textarea> -->
                        <button class="add_bank" type="submit">Submit</button>
                    </div>
                </form>
            </div>

        <?php } else { ?>

            <div class="details1 cs-2">
                <p> Reply : <?= $rows->reply ?></p>
            </div>


        <?php } ?>


    </div>
</div>