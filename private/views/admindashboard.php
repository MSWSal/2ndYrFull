<?php $this->view('includes/pageinit'); ?>
<?php $this->view('adminnavupDashBoard'); ?>
<?php $i = 0 ?>
<title>Admin Ddashboard</title>

<link rel="stylesheet" href="<?= ROOT ?>/css/admindashboard.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>







<div class="main1">

    <div class="left">

        <div class="b12">
            <p></p>
        </div>

        <a class="a11" href="">
            <div class="">
                <p class="pp">Dash Board</p>  
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
            <h1 class="h1">Last 30 Days Report</h1>
        </div>
        <div class="num ">


            <div class="b1">
                <a class="a1" href="<?= ROOT ?>/AdminPublicUsers">
                    <p class="p">Donors</p>
                    <p class="num"><?= $rows[0]->DON ?></p>
                </a>
            </div>


            <div class="b1 dona">
                <a class="a1">
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

        </div>



        <div class="chart">


            <div class="canvasdiv">
                <canvas id="myChart"></canvas>
            </div>
            <?php
            // Data for the pie chart
            $data = array(
                "RBC" => $rows4[0]->RBC,
                "WBC" =>  $rows5[0]->WBC,
                "Platelets" => $rows6[0]->PLATE,
                "Plasma" =>  $rows7[0]->PLASMA
            );
            ?>


            <div class="canvasdiv">
                <canvas id="myChart1"></canvas>
            </div>
            <?php
            // Data for the pie chart
            $data1 = array(
                "HIV" => $rows3[0]->HIV,
                "Dengue" => $rows11[0]->Dengue,
                "Thalasemea" => $rows12[0]->Thalasemea,
                "Hemophilia" => $rows13[0]->Hemophilia,
                "Malaria" => $rows14[0]->Malaria,
                "Other" => $rows10[0]->Other,
            );
            ?>


        </div>

        <div class="chart1">

            <div class="canvasdiv">
                <h3>Blood Bank</h3>

                <div class="table">
                    <table class="table1">
                        <thead>
                            <tr>
                                
                                <th>Name</th>
                                <th>City</th>
                                <th>Street</th>
                                <th>House NO</th>
                                <th>Tel Number</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($rows8 as $value) : ?>
                                <tr>
                                    
                                    <td><?= $value->name ?></a></td>
                                    <td><?= $value->city ?></td>
                                    <td><?= $value->street ?></td>
                                    <td><?= $value->house_no ?></td>
                                    <td><?= $value->telephone ?></td>
                                </tr>


                            <?php $i++;
                            endforeach; ?>
                        </tbody>

                    </table>

                </div>

            </div>

            <div class="canvasdiv">
                <h3>Blood Donation Camps</h3>
                <div class="table">
                    <table class="table1">
                        <thead>
                            <tr>
                                
                                <th>Name</th>
                                <th>City</th>
                                <th>Date</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rows9 as $value) : ?>
                                <tr>
                                    
                                    <td><?= $value->camp_name ?></td>
                                    <td><?= $value->city ?></td>
                                    <td><?= $value->date ?></td>
                                    <td>
                                        <?php
                                        $cdate = date("y-m-d");

                                        if ((strtotime($cdate) < (strtotime($value->date)))) { ?>
                                            <div class="upc"><?php echo "Upcoming"; ?></div>
                                        <?php }
                                        if ((strtotime($cdate) == (strtotime($value->date)))) { ?>
                                            <div class="ong"><?php echo "Ongoing"; ?></div>
                                        <?php }
                                        if ((strtotime($cdate) > (strtotime($value->date)))) { ?>
                                            <div class="clo"><?php echo "Closed"; ?></div>
                                        <?php }
                                        ?>
                                    </td>

                                </tr>

                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>



    </div>


</div>














<script>
    // Get the data from PHP
    var data = <?php echo json_encode($data); ?>;

    // Create the chart
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: Object.keys(data),
            datasets: [{
                data: Object.values(data),
                backgroundColor: [
                    '#051367',
                    '#2D31FA',
                    '#5D8BF4',
                    '#90E0FF'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
                labels: {
                    fontSize: 18 // set the font size of the legend labels
                }
            },
            title: {
                display: true,
                text: 'All Blood Types',
                fontSize: 24,
                fontColor: '#333'
            }
        }
    });
</script>




<script>
    // Get the data from PHP
    var data1 = <?php echo json_encode($data1); ?>;

    // Create the chart
    var ctx = document.getElementById('myChart1').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: Object.keys(data1),
            datasets: [{
                data: Object.values(data1),
                backgroundColor: [
                    '#011f4b',
                    '#03396c',
                    '#005b96',
                    '#6497b1',
                    '#b3cde0'
                ],
                
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
                labels: {
                    fontSize: 18 // set the font size of the legend labels
                }
            },
            title: {
                display: true,
                text: 'Defect Blood Types',
                fontSize: 24,
                fontColor: '#333'
            }
        }
    });
</script>