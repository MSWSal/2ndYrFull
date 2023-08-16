<?php $this->view("includes/navbar", $data); ?>
<title>News</title>
<link rel="stylesheet" href="<?= ROOT ?>/css/news.css">
<?php 
// print_r($data);
?>

<div class="sec1">
       <a href="<?=ROOT?>/news"><button id="news-btn" type="button" class="news-btn">News</button></a> 
        <a href="<?=ROOT?>/newsfeed"><button id="posts-btn" class="posts-btn">Posts</button></a>
        
</div>
<div class="sec1">

    <h1>News</h1>
</div>
<div class="div1">

    <div class="box1">
        <a href="<?=$data[0]->link?>">
        <div class="box1-img">
            <img src="<?= ROOT ?>/images/Frame_16.png" alt="">
        </div>

        <p><?=$data[0]->description?>
        </p>
        </a>
    </div>



    <div class="box2">
        <a href="<?=$data[1]->link?>">
        <div class="box2-img">
            <img src="<?= ROOT ?>/images/Frame_17.png" alt="" class="Frame_16_img">
        </div>
        <p><?=$data[1]->description?>
        </p>
        </a>

    </div>
</div>






<div class="div2">

    <div class="box3">
        <a href="<?=$data[2]->link?>">
        <div class="b3-img">
            <img src="<?= ROOT ?>/images/Frame_18.png" alt="" class="d2-img">
        </div>
        <p><?=$data[2]->description?>
        </p>
        </a>
    </div>

    <div class="box3">
        <a href="<?=$data[3]->link?>">
        <div class="b3-img">
            <img src="<?= ROOT ?>/images/Frame_18.png" alt="" class="d2-img">
        </div>
        <p><?=$data[3]->description?>
        </p>
        </a>

    </div>

    <div class="box3">
        <a href="<?=$data[4]->link?>">
        <div class="b3-img">
            <img src="Frame_18.png" alt="" class="d2-img">
        </div>
        <p><?=$data[4]->description?>
        </p>
        </a>

    </div>



</div>


<div class="div2">

    <div class="box3">
        <a href="<?=$data[5]->link?>">
        <div class="b3-img">
            <img src="<?= ROOT ?>/images/Frame_18.png" alt="" class="d2-img">
        </div>
        <p><?=$data[5]->description?>
        </p>
        </a>

    </div>

    <div class="box3">
    <a href="<?=$data[6]->link?>">
        <div class="b3-img">
            <img src="<?= ROOT ?>/images/Frame_18.png" alt="" class="d2-img">
        </div>
        <p><?=$data[6]->description?>
        </p>
        </a>
    </div>

    <div class="box3">
        <a href="<?=$data[7]->link?>">
        <div class="b3-img">
            <img src="Frame_18.png" alt="" class="d2-img">
        </div>
        <p><?=$data[7]->description?>
        </p>
        </a>
    </div>



</div>

</body>

</html>