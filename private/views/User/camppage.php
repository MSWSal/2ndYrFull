
 <?php $this->view("includes/navbar",); ?>

    <link rel="stylesheet" href="<?=ROOT?>/css/camppage.css">
    <title><?= $data['rows']->camp_name?></title>

    <div class="sec1">
        <h2 class="sec1-h"><?= $data['rows']->camp_name?></h2>
        <div class="div-a">
     <?php if($flags['userflg']==1) :?>  <?php if(($data['rows']->date)<=date("Y-m-d")):?> <a href="<?=ROOT?>/viewcampfeedback?id=<?=$data['rows']->camp_id?>" class="qrbtn">Feedback</a><?php endif;?>
         <a href="<?=ROOT?>/campqr?id='<?=$data['rows']->camp_id?>'" class="qrbtn">GET QR</a>
        <?php endif;?>
    </div>
</div>

    <div class="sec2">
        <div class="sec2-1">
            <div class="s2Img">
                <img class="s2pic" src="<?=ROOT.'/'.$data['rows']->camp_img?>" alt="">
            
            </div>
            <div class="s2Info">
                <span class="ftext">Place : </span> <span class="vtext"><?= $data['rows']->house_no." ".$data['rows']->street."<br>".$data['rows']->city ?></span> <br>
                <span class="ftext">Start Time : </span> <span class="vtext"><?= $data['rows']->start_time?></span><br>
                <span class="ftext">Date : </span><span class="vtext"><?= $data['rows']->date?></span><br>
                <span class="ftext">BloodBank : </span><span class="vtext"><?= $data['rows']->name?></span><br>
                <span class="ftext">Organizer : </span><span class="vtext"><?= $data['rows']->org_name?></span><br>
                <span class="ftext">Phone No : </span> <span class="vtext"><?= $data['rows']->mobile?></span><br>
            </div>
        </div>
        <div class="sec2-2">
            <div class="sec2Desc">
            <?= $data['rows']->description?>
            </div>
            <a class="lnk " href="<?=ROOT?>/regtoacamp?id=<?=$data['rows']->camp_id?>&click=true"><button class="btn btndisabled" >Register</button></a>
        </div>
    </div>




        
        
    </body>
</html>