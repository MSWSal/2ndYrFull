<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>
<title>Admin Bugs</title>

<?php $i = 0 ?>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminbugs.css">



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
            <div class=" ">
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
            <h1 class="h1">Feedbacks</h1>
        </div>







        <div class="table">
            <table class="table1">
                <thead>
                    <tr>
                        <th>Name</th>
                        <!-- <th>Bug ID</th> -->
                        <th>Bug Detail</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $value) : ?>
                        <tr>
                            <td><?= $value->name  ?></td>
                            <!-- <td><?= $value->bug_id ?></td> -->
                            <td>
                                <div class="cs-2">
                                    <p class="p1"><?= $value->bug_detail ?></p>

                                </div>
                            </td>
                            <td>
                                <?php if ($value->reply == null) { ?>

                                    <div class="cs-3">
                                        <a href="<?= ROOT ?>/AdminReplyBugs?id=<?= $value->bug_id ?>" class="reply">Reply</a>
                                    </div>

                                <?php } else { ?>

                                    <div class="cs-3">
                                        <a href="<?= ROOT ?>/AdminReplyBugs?id=<?= $value->bug_id ?>" class="reply">View</a>
                                    </div>

                                <?php } ?>


                            </td>
                            

                        </tr>

                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>



        <!-- <div class="sec2">

    <?php foreach ($rows as $value) : ?>

        <?php if ($i % 2 == 0 && $i != 0) : ?>
</div>
<div class="sec2">
<?php endif ?>
<div class="card">

    <div class="cs-1">
        <div class="nandd">
            <div class="name1"><?= $value->name  ?></div>
            <div class="date"><?= $value->bug_id ?></div>

        </div>

    </div>
    <div class="cs-2">
        <p><?= $value->bug_detail ?></p>

    </div>

    <?php if ($value->reply == null) { ?>

        <div class="cs-3">
            <a href="<?= ROOT ?>/AdminReplyBugs?id=<?= $value->bug_id ?>" class="reply">Reply</a>
        </div>

    <?php } else { ?>

        <div class="cs-3">
            <a href="<?= ROOT ?>/AdminReplyBugs?id=<?= $value->bug_id ?>" class="reply">View</a>
        </div>

    <?php } ?>


</div>
<?php $i++; ?>
<?php endforeach; ?>
</div> -->



    </div>


</div>