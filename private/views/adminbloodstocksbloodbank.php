<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>
<?php $i = 0 ?>
<title>Admin Blood Stock Blood Bank</title>


<link rel="stylesheet" href="<?= ROOT ?>/css/adminbloodstocksbloodbank.css">




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
            <h1 class="h1">Stocks - <?= $rows[0]->name ?></h1>
        </div>


        <div class="chrtarea">
            <div class="canarea">
                <canvas id="chart"></canvas>
            </div>
        </div>


        <div class="bloodtable">

            <div class="red">
                <div class="thisMonth">
                    <h1 class="this">Red Blood</h1>
                </div>


                <div class="table">
                    <table class="table1">
                        <thead>
                            <tr>
                                <th>Blood Type</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>A+</td>
                                <td><?= $rows1[0]->Ap_amount ?></td>
                            </tr>
                            <tr>
                                <td>A-</td>
                                <td><?= $rows2[0]->An_amount ?></td>
                            </tr>
                            <tr>
                                <td>B+</td>
                                <td><?= $rows3[0]->Bp_amount ?></td>
                            </tr>
                            <tr>
                                <td>B-</td>
                                <td><?= $rows4[0]->Bn_amount ?></td>
                            </tr>
                            <tr>
                                <td>AB+</td>
                                <td><?= $rows5[0]->ABp_amount ?></td>
                            </tr>
                            <tr>
                                <td>AB-</td>
                                <td><?= $rows6[0]->ABn_amount ?></td>
                            </tr>
                            <tr>
                                <td>O+</td>
                                <td><?= $rows7[0]->Op_amount ?></td>
                            </tr>
                            <tr>
                                <td>O-</td>
                                <td><?= $rows8[0]->On_amount ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="white">
                <div class="thisMonth">
                    <h1 class="this">White Blood</h1>
                </div>


                <div class="table">
                    <table class="table1">
                        <thead>
                            <tr>
                                <th>Blood Type</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>A+</td>
                                <td><?= $rows9[0]->Ap_amount ?></td>
                            </tr>
                            <tr>
                                <td>A-</td>
                                <td><?= $rows10[0]->An_amount ?></td>
                            </tr>
                            <tr>
                                <td>B+</td>
                                <td><?= $rows11[0]->Bp_amount ?></td>
                            </tr>
                            <tr>
                                <td>B-</td>
                                <td><?= $rows12[0]->Bn_amount ?></td>
                            </tr>
                            <tr>
                                <td>AB+</td>
                                <td><?= $rows13[0]->ABp_amount ?></td>
                            </tr>
                            <tr>
                                <td>AB-</td>
                                <td><?= $rows14[0]->ABn_amount ?></td>
                            </tr>
                            <tr>
                                <td>O+</td>
                                <td><?= $rows15[0]->Op_amount ?></td>
                            </tr>
                            <tr>
                                <td>O-</td>
                                <td><?= $rows16[0]->On_amount ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="plasma">
                <div class="thisMonth">
                    <h1 class="this">Plasma</h1>
                </div>


                <div class="table">
                    <table class="table1">
                        <thead>
                            <tr>
                                <th>Blood Type</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>A+</td>
                                <td><?= $rows17[0]->Ap_amount ?></td>
                            </tr>
                            <tr>
                                <td>A-</td>
                                <td><?= $rows18[0]->An_amount ?></td>
                            </tr>
                            <tr>
                                <td>B+</td>
                                <td><?= $rows19[0]->Bp_amount ?></td>
                            </tr>
                            <tr>
                                <td>B-</td>
                                <td><?= $rows20[0]->Bn_amount ?></td>
                            </tr>
                            <tr>
                                <td>AB+</td>
                                <td><?= $rows21[0]->ABp_amount ?></td>
                            </tr>
                            <tr>
                                <td>AB-</td>
                                <td><?= $rows22[0]->ABn_amount ?></td>
                            </tr>
                            <tr>
                                <td>O+</td>
                                <td><?= $rows23[0]->Op_amount ?></td>
                            </tr>
                            <tr>
                                <td>O-</td>
                                <td><?= $rows24[0]->On_amount ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>

            <div class="platelets">
                <div class="thisMonth">
                    <h1 class="this">Platelets</h1>
                </div>


                <div class="table">
                    <table class="table1">
                        <thead>
                            <tr>
                                <th>Blood Type</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>A+</td>
                                <td><?= $rows25[0]->Ap_amount ?></td>
                            </tr>
                            <tr>
                                <td>A-</td>
                                <td><?= $rows26[0]->An_amount ?></td>
                            </tr>
                            <tr>
                                <td>B+</td>
                                <td><?= $rows27[0]->Bp_amount ?></td>
                            </tr>
                            <tr>
                                <td>B-</td>
                                <td><?= $rows28[0]->Bn_amount ?></td>
                            </tr>
                            <tr>
                                <td>AB+</td>
                                <td><?= $rows29[0]->ABp_amount ?></td>
                            </tr>
                            <tr>
                                <td>AB-</td>
                                <td><?= $rows30[0]->ABn_amount ?></td>
                            </tr>
                            <tr>
                                <td>O+</td>
                                <td><?= $rows31[0]->Op_amount ?></td>
                            </tr>
                            <tr>
                                <td>O-</td>
                                <td><?= $rows32[0]->On_amount ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>






    </div>

</div>




<!-- <script src="<?= ROOT ?>/scripts/bbbsscript.js"></script> -->

<script>
    var canvas = document.getElementById("chart");
    var config = {
        type: "bar",
        data: {
            labels: ["A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-"],
            datasets: [{
                label: "RBC",
                data: [ <?= $rows1[0]->Ap_amount ?>, <?= $rows2[0]->An_amount ?>, <?= $rows3[0]->Bp_amount ?>, <?= $rows4[0]->Bn_amount ?>, <?= $rows5[0]->ABp_amount ?>, <?= $rows6[0]->ABn_amount ?>, <?= $rows7[0]->Op_amount ?>, <?= $rows8[0]->On_amount ?>],
                backgroundColor: [
                    'rgba(5, 19, 103, 1)'

                ]
            }, {
                label: "WBC",
                data: [ <?= $rows9[0]->Ap_amount ?>, <?= $rows10[0]->An_amount ?>, <?= $rows11[0]->Bp_amount ?>, <?= $rows12[0]->Bn_amount ?>, <?= $rows13[0]->ABp_amount ?>, <?= $rows14[0]->ABn_amount ?>, <?= $rows15[0]->Op_amount ?>, <?= $rows16[0]->On_amount ?>],
                backgroundColor: [
                    'rgba(45, 49, 250, 1)'
                ]
            }, {
                label: "Plasma",
                data: [ <?= $rows17[0]->Ap_amount ?>, <?= $rows18[0]->An_amount ?>, <?= $rows19[0]->Bp_amount ?>, <?= $rows20[0]->Bn_amount ?>, <?= $rows21[0]->ABp_amount ?>, <?= $rows22[0]->ABn_amount ?>, <?= $rows23[0]->Op_amount ?>, <?= $rows24[0]->On_amount ?>],
                backgroundColor: [
                    'rgba(93, 139, 244, 1)'
                ]
            }, {
                label: "Platelettes",
                data: [ <?= $rows25[0]->Ap_amount ?>, <?= $rows26[0]->An_amount ?>, <?= $rows27[0]->Bp_amount ?>, <?= $rows28[0]->Bn_amount ?>, <?= $rows29[0]->ABp_amount ?>, <?= $rows30[0]->ABn_amount ?>, <?= $rows31[0]->Op_amount ?>, <?= $rows32[0]->On_amount ?>],
                backgroundColor: [
                    'rgba(0,0,0,0,1)'
                ]
            }]
        }

    }


    var barchart = new Chart(canvas, config);







</script>