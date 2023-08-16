<?php $this->view("includes/navbar", ); ?>
<?php $i = 0;
// print_r($flag[0]);
?>

<link rel="stylesheet" href="<?= ROOT ?>/css/campaigns.css">
<title>Campaigns</title>
<!-- <div class="sec0"> <div class="org-button">Wanna organize a blood donation camp ?</div> </div> -->
<div class="sec1">
    <h2 class="sec1-h">campaigns</h2>
    <div class="sec1-sub">
        <form method="get" class="searchfrom">
            <input class="inp1" name="date" value="<?= isset($_GET['date']) ? $_GET['date'] : '' ?>" type="date">
            <input class="inp1" type="text" value="<?= isset($_GET['find']) ? $_GET['find'] : '' ?>" name="find">
            <button class="search-btn" type="submit">Search</button>
        </form>

    </div>

</div>
<a href="<?=ROOT?>/viewcampsinmap"> <div class="locsearch">
    <img class="locicon" src="<?= ROOT ?>/img/locicon.png" alt="">
    <h4 class="viewonm">View on Map</h4>
</div>
</a>
<div class="sec2">
    <button id="upcoming-btn" type="button" class="upcoming-btn <?php if ($flag[0] == 1)
        echo "selected" ?>">Upcoming</button>
        <button id="progress-btn" class="progress-btn <?php if ($flag[0] == 0)
        echo "selected" ?>">Today</button>
        <button id="mycamps-btn" class="mycamps-btn <?php if ($flag[0] == 2)
        echo "selected" ?> ">MyCampaigns</button>
    </div>
    <div class="sec3">

    <?php if ((!$data)) { ?>



        <h1>No campaigns</h1>

    <?php } else { ?>


        <?php foreach ($data as $value): ?>

            <?php if ($i % 3 == 0 && $i != 0): ?>
            </div>
            <div class="sec3">
            <?php endif ?>
            <a href="<?= ROOT ?>/camppage?id=<?= $data[$i]->camp_id ?>">
                <div class="card">
                    <div class="c-top">
                        <img class="cimg" src="<?= ROOT . '/' . $data[$i]->camp_img ?>" alt="">
                    </div>
                    <div class="c-bottom">
                        <h3 class="cheading">
                            <?= $data[$i]->camp_name ?>
                        </h3>
                        <small class="datesmall">
                            <?= $data[$i]->date ?>
                        </small>
                        <p class="desctxt">
                            <?php $marks = strlen($data[$i]->description);
                            echo ($marks < 155) ? $data[$i]->description : substr($data[$i]->description, 0, 150.) . "..."; ?>
                        </p>

                    </div>
                </div>
            </a>
            <?php $i++; ?>
        <?php endforeach; ?>


    </div>
<?php } ?>

<script src="<?= ROOT ?>/js/campaigns.js"></script>
</body>

</html>