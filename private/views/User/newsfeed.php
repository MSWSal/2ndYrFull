<?php $this->view("includes/navbar");?>
<link rel="stylesheet" href="<?=ROOT?>/css/newsfeed.css">
<title>News-Feed</title>
<div class="sec1">
<a href="<?=ROOT?>/news"><button id="news-btn" type="button" class="news-btn">News</button></a> 
        <a href="<?=ROOT?>/newsfeed"><button id="posts-btn" class="posts-btn">Posts</button></a>
        
        
</div>
<div class="sec2">
    <h1>Community Post</h1>
    <a href="community_posts"><button class="post-btn">Add +</button></a>
</div>

<div class="sec3">
   <?php $i=0;?>
   <?php if($data1):?>
   <?php foreach ($data1 as $d):?>
    <a href="post_details?id=<?=$data1[$i]->post_id?>">
    <div class="card">
        <div class="c-sec">
            <div class="c-sec-h"> <h1> <u><?php echo(substr($data1[$i]->title,0,30))?> </u></h1>
          <p> <small>Posted by <b><?=$data1[$i]->name?></b> on <?=$data1[$i]->date?> </small></p> 
            </div>
            <div class="c-sec-cont"> <p> <?php echo( substr($data1[$i]->description,0,200)."...");?></p> </div>
        </div>
        <div class="c-img">
            <img src=" <?=$data1[$i]->image?>" alt="">
        </div>
    </div>
   </a>
    <?php $i++;?>
    <?php endforeach;?>
    <?php endif ?>

    <?php if($data2):?>
   <?php foreach ($data2 as $d):?>
    <div class="card">
        <div class="c-sec">
            <div class="c-sec-h"> <h1> <u> <?php echo(substr($data2[$i]->title,0,20))?> </u></h1> 
           <p> <small>Posted by <b><?=$data2[$i]->name?></b> on <?=$data2[$i]->date?> </small></p>
            </div>
            <div class="c-sec-cont"> <p> <?php echo( substr($data2[$i]->description,0,200)."...");?></p> </div>
        </div>
        <div class="c-img">
            <img src=" <?=$data2[$i]->image?>" alt="">
        </div>
    </div>
    <?php $i++;?>
    <?php endforeach;?>
    <?php endif ?>

    <?php if($data3):?>
   <?php foreach ($data3 as $d):?>
    <div class="card">
        <div class="c-sec">
            <div class="c-sec-h"> <h1> <u> <?php echo(substr($data3[$i]->title,0,20))?> </u></h1>
            <small>Posted by <b><?=$data3[$i]->name?></b> on <?=$data3[$i]->date?> </small>
            </div>
            <div class="c-sec-cont"> <p> <?php echo( substr($data3[$i]->description,0,200)."...");?>p> </div>
        </div>
        <div class="c-img">
            <img src=" <?=$data3[$i]->image?>" alt="">
        </div>
    </div>
    <?php $i++;?>
    <?php endforeach;?>
    <?php endif ?>
    

</div>