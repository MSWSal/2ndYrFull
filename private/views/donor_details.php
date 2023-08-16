<?php $this->view("pageinit");?>

<?php $this->view("navup");?>
<title>Donor Detail</title>

<link rel="stylesheet" href="<?=ROOT?>/css/donor_details.css">
<div class="container">
<a href="<?=ROOT?>/qrscanner?id=<?=$campid?>"><button class="backqr">Back to QR</button></a>
<a href="<?=ROOT?>/search?id=<?=$campid?>"><button class="backsearch">Back to Search</button></a>

    
    <div class="card">
        <div class='top'>
            <img src="<?=$data->profile_img?>">
        </div>
        <div class='bottom'>
            <h1><?=$data->name?></h1>
            <small><?=$data->city?></small>
            <?php if($eligible=='0'): ?>
                <small class='error'><i class="fa-solid fa-circle-exclamation"></i> Has donated blood less than 3 months ago.</small>
            <?php endif; ?>
            <br>
            <div class="details">
                <?php if ($check && $data->is_defect==1): ?> 
                    <button class="btn" id="button">View Defect</button>
                    <div class="defect" id="defect">
                        <?=$check->reason?>
                    </div>
                <?php endif;?>
                <p>Age: <?=$data->age?></p>
                <p>Email: <?=$data->email?></p>
                <p>NIC: <?=$data->nic?></p>
            </div>
            <form method="post">
            <?php if ($check || !$eligible): ?>
                <button class="btn large" name="accept" disabled>Accept</button>
                <br>
                <!-- <button class="btn large" name="goback">Back</button> -->

                <?php endif;?>
                <?php if (!$check && $eligible): ?>
                <button class="btn large" name="accept" >Accept</button>
                <?php endif;?>

            </form>
        </div>
    </div>
</div>

<script src="<?=ROOT?>/js/defect.js"></script>
</body>