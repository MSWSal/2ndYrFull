<?php $this->view("includes/navbar");?>
<link rel="stylesheet" href="<?=ROOT?>/css/post.css">
<title>Community post</title>

<div class="container">
    <h1><?=$data->title?></h1>
    <p>Posted on <b><span class="date"><?=$data->date?></span></b></p>
    <div class="content">
        <div class="image">
        <img class="img" src="<?=ROOT?>/<?=$data->image?>" alt="">
        </div>
        <div class="details">
            <?=$data->description?>
            <h3><b>Contact</b></h3>
            <p><i class="fa-solid fa-xl fa-user"></i>&nbsp;&nbsp;&nbsp;<?=$data->name?></p>
            <p><i class="fa-solid fa-xl fa-phone"></i>&nbsp;&nbsp;&nbsp;<?=$data->mobile?></p>
        </div>
    </div>
    <div class="description">

    </div>
</div>