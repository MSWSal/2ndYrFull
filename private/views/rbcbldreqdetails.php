<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>
<title>RBC Requests</title>




<link rel="stylesheet" href="<?=ROOT?>/css/temp2.css">
<div class="title">
<?=$ttl?>
</div>
<div class="section">
    <div class="boxrow">
        <div class="boxi">
            <div class="ttl">Amount Requested</div>
            <div class="value">
                <?=$amnt?>
            </div>
        </div>
        <div class="boxi">
            <div class="ttl">Possible</div>
            <div class="value">
                <?=$send?>
            </div>
        </div>
            <div class="boxi">
            <div class="ttl">Remaining</div>
            <div class="value">
                <?=$remain?>
            </div>
        </div>

    </div>
    <div class="boxrow2">
        <?php if($send>=$amnt && $remain>0){ ?>
        <a href="<?=ROOT?>/sendaccept?<?= http_build_query(array('idarray' => $ids))?>&name=<?=$name?>"><button class="acc">Accept</button>

        <?php } ?>
        <a href="<?=ROOT?>/sendaccept/index3?id=<?=$id?>"><button class="rej">Reject</button>

    </div>
</div>
