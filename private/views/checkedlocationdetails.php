<?php $this->view("navup", ); ?>
<link rel="stylesheet" href="<?= ROOT ?>/css/checkedlocationdetails.css">
<title>check locationzssss</title>
<?php 
// print_r($checkedarr);







?>

<div class="box">
<div class="stats">
    <div class="donatedNo">
        <h2>HIV/AIDS :</h2> <span class="times"> <?=$checkedarr[1]?></span>
    </div>
    <div class="donatedNo">
        <h2>Thalasemea :</h2> <span class="times"> <?=$checkedarr[2]?></span>
    </div>
    <div class="donatedNo">
        <h2>Hemophilia :</h2> <span class="times"> <?=$checkedarr[3]?></span>
    </div>
    <div class="donatedNo">
        <h2>Dengue :</h2> <span class="times"> <?=$checkedarr[4]?></span>
    </div>
    <div class="donatedNo">
        <h2>Malaria :</h2> <span class="times"> <?=$checkedarr[5]?></span>
    </div>

    <div class="donatedNo">
        <h2>Other :</h2> <span class="times"> <?=$checkedarr[0]?></span>
    </div>

   

</div>
</div>
