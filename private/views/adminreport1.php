<?php $this->view('includes/pageinit'); ?>
<title>Admin report</title>

<link rel="stylesheet" href="<?= ROOT ?>/css/adminreport1.css">

<!-- <script src="<?= ROOT ?>/js/ajscriptreport2.js"></script> -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-piechart-outlabels@1.0.1/dist/chartjs-plugin-piechart-outlabels.min.js"></script>
<script src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>


<script src="<?= ROOT ?>/scripts/genrep2.js"></script>



<button class="subbtn sp" onclick="genPDF()">pdf</button>


<div class="section" id="section">

    <div class="repnav">

        <img src="<?= ROOT ?>/img/Logo.png" class="image" alt="Logo">

        <div class="date">
            <p>Date: <?= date("Y/m/d") ?></p>
        </div>

    </div>


    <div class="title_1">
        <h1>Last 30 Days Blood Banks Report</h1>
    </div>



    <div class="chart">

        <!-- Chart 1 -->
        <div class="canvasdiv">
            <canvas id="myChart"></canvas>
        </div>

        <?php
        $data = array(
            "RBC" => $rows4[0]->RBC,
            "WBC" =>  $rows5[0]->WBC,
            "Platelets" => $rows6[0]->PLATE,
            "Plasma" =>  $rows7[0]->PLASMA
        );
        ?>

        <!-- Chart 2 -->
        <div class="canvasdiv">
            <canvas id="myChart1"></canvas>
        </div>

        <?php
        $data1 = array(
            "HIV" => $rows3[0]->HIV,
            "Dengue" => $rows16[0]->Dengue,
            "Thalasemea" => $rows12[0]->Thalasemea,
            "Hemophilia" => $rows13[0]->Hemophilia,
            "Malaria" => $rows14[0]->Malaria,
            "Other" => $rows15[0]->Other,
        );
        ?>

    </div>

    <div class="chart_box">

        <div class="c1">

            <div class="b1">
                <div class="p">Donors</div>
                <div class="num"><?= $rows10[0]->DON ?></div>
            </div>

            <div class="b1">
                <div class="p">Donations</div>
                <div class="num"><?= $rows11[0]->BDC ?></div>
            </div>

            <div class="b1">
                <div class="p">Camps</div>
                <div class="num"><?= $rows9[0]->BDC ?></div>
            </div>

        </div>

    </div>


    <div class="note">
        <p>Special Notes</p>
        <textarea class="note1" placeholder="Write your notes . . ."></textarea>

    </div>




    <div class="acknolege">
        <p>I here by certify that above information provided are true to my knowledge and up to date.</p>
    </div>

    <div class="signs">
        <div class="dashsign">
            . . . . . . . . . . . . . . . . . <br>
            PHI Signature
        </div>
        <div class="dashsign">
            . . . . . . . . . . . . . . . . . . . . <br>
            Doctor Signature
        </div>
        <div class="dashsign">
            . . . . . . . . . . . . . . . . . <br>
            Date
        </div>
    </div>





</div>





<script>
    var data = <?php echo json_encode($data); ?>;

    // Create the chart
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
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
                borderColor: [
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
            title: {
                display: true,
                text: 'All Blood Types',
                fontSize: 24,
                fontColor: '#333',
                padding: 20
            },
            legend: {
                display: false // hide the legend as it is not needed for a bar chart
            },
            scales: {
                xAxes: [{
                    barPercentage: 0.3,
                    categoryPercentage: 0.8,
                    ticks: {
                        fontSize: 18
                    }
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        fontSize: 18
                    }
                }]
            }
        }
    });
</script>



<script>
    var data1 = <?php echo json_encode($data1); ?>;

    // Create the chart
    var ctx = document.getElementById('myChart1').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar', // change the chart type to bar
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
                display: false // hide the legend as it is not needed for a bar chart
            },
            title: {
                display: true,
                text: 'Defect Blood Types',
                fontSize: 24,
                fontColor: '#333',
                padding: 20
            },
            scales: {
                xAxes: [{
                    ticks: {
                        fontSize: 14 // set the font size of the x-axis labels
                    }
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        fontSize: 14 // set the font size of the y-axis labels
                    }
                }]
            }
        }
    });
</script>