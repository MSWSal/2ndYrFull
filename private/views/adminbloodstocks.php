<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>
<?php $i = 0 ?>
<title>Admin Blood Stocks</title>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminbloodstocks.css">





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
            <div class="">
                <p class="pp">View Blood Stocks</p>
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
            <h1 class="h1">Blood Stocks - Sri Lanka</h1>
        </div>


        <div class="chrtarea">
            <div class="canarea">
                <canvas id="chart"></canvas>
            </div>
        </div>


        <div class="thisMonth">
            <h1 class="this">This Month</h1>
        </div>

        <!-- 

<div class="num ">


    <div class="b1">
        <a class="a1" href="<?= ROOT ?>/AdminPublicUsers">
            <p class="p">Donors</p>
            <p class="num"><?= $rows[0]->DON ?></p>
        </a>
    </div>


    <div class="b1 dona">
        <a class="a1" href="<?= ROOT ?>/AdminAddBloodBank">
            <p class="p">Donations</p>
            <p class="num"><?= $rows1[0]->DONA  ?></p>
        </a>
    </div>

    <div class="b1 camp">
        <a class="a1" href="<?= ROOT ?>/AdminDonationCamps">
            <p class="p">Campaigns</p>
            <p class="num"><?= $rows2[0]->CAMP ?></p>
        </a>
    </div>

</div> -->



        <div class="table">
            <table class="table1">
                <thead>
                    <tr>
                        <th>Blood Bank</th>
                        <th>RBC</th>
                        <th>WBC</th>
                        <th>Plasma</th>
                        <th>Platelets</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows3 as $value) : ?>
                        <tr>
                            <td><?= $value->name ?></td>
                            <td class="row1"><?= $value->rbc_count ?></td>
                            <td class="row2"><?= $value->wbc_count ?></td>
                            <td class="row3"><?= $value->plasma_count ?></td>
                            <td class="row4"><?= $value->platelets_count ?></td>
                            <td id="id" name="id">
                                <a href="<?= ROOT ?>/AdminBloodStocksBloodBank?id=<?= $value->blood_bank_id ?>">
                                    <div class="upc">
                                        View
                                    </div>
                                </a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>

            </table>
            <script src="<?= ROOT ?>/scripts/bbbsscript1.js"></script>

        </div>
    </div>

</div>