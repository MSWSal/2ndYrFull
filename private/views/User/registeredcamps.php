<?php $this->view("includes/navbar");?>
<link rel="stylesheet" href="<?=ROOT?>/css/registeredcamps.css">

<title>view requests</title>
<div class="sec1">
<div class="table">
    <table class="table1">
        <thead>
            <tr>
                <th>Camp ID</th>
                <th> Camp Name</th>
                <th>Date</th>
                <th>NO</th>
                <th>Street</th>
                <th>City</th>
                <th>Status</th>
                <th></th>

            </tr>
        </thead>
        <tbody>
       
          
       
        <?php foreach ($res as $value) : ?>
                <tr>
                    <td><?=$value->camp_id?></td>
                    <td><?=$value->camp_name?></td>
                    <td><?=$value->date?></td>
                    <td><?=$value->house_no?></td>
                    <td><?=$value->street?></td>
                    <td><?=$value->city?></td>
                    <?php
                    $sts='';
                   if($value->status=='1'){
                    $sts='registered';

                   }
                   else if($value->status=='2'){
                    $sts='completed';

                   }
                   else if($value->status=='0'){
                    $sts='Unavailable';
                   }

                   
                  

                    ?>
                        
                   
                    <td>  <a href=""><button class="btn <?=$sts?> "><?=$sts?></button></a></td>
                    <td><a class="viewcamp" href="<?=ROOT?>/camppage?id=<?=$value->camp_id?>"><img class="viewimg <?php if(($value->status=='1')) :echo"visiblebtn"?> <?php endif;?>"src="<?=ROOT?>/images/view.png" alt=""></a>
                 <a class="viewcampbtn2 " href="<?=ROOT?>/myregisteredcamps/<?=$value->camp_id?>?remove=true"><button class="btn2 <?php if(($value->status=='1')) :echo"visiblebtn"?> <?php endif;?>">X</button>
               
               </td>

                </tr>
                <?php endforeach; ?>
               
        </tbody> 
    </table>

</div>
</div>