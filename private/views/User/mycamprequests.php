<?php $this->view("includes/navbar", $data); ?>
<link rel="stylesheet" href="<?=ROOT?>/css/mycamprequests.css">
<title>view requests</title>

<h2 class="heading">My Camp Oganize Requests</h2>
<div class="sec0">
   
   <a href="<?=ROOT?>/camporgreq"> <button class="addbtn">+ Add</button> </a>
</div>

<div class="sec1">

   
<div class="table">
    <table class="table1">
        <thead>
            <tr>
                <th>Request ID</th>
                <th> Camp Name</th>
                <th>Date</th>
                <th>City</th>
                <th>Street</th>
                <th>NO</th>
                <th>Status</th>

            </tr>
        </thead>
        <tbody>
       
        <?php foreach ($data[0] as $value) : ?>
                <tr>
                    <td><?=$value->camp_request_id?></td>
                    <td><?=$value->name?></td>
                    <td><?=$value->date?></td>
                    <td><?=$value->city?></td>
                    <td><?=$value->street?></td>
                    <td><?=$value->house_no?></td>
                    <?php
                    $link="";
                    if($value->status==0){
                        $class="pending";
                        $val="pending";
                        
                    } 
                    else if($value->status==1){
                        $class="accepted";
                        $val="Organize";
                        $link=ROOT."/addcamp/".$value->camp_request_id;
                    }
                    else if($value->status==2){
                        $class="rejected";
                        $val="rejected";
                        
                        
                    }else if($value->status==3){
                        $class="Completed";
                        $val="Completed";
                        
                    }   

                    ?>
                   
                    <td>  <a href="<?=$link?>"><button class="btn <?=$class?>"><?=$val?></button></a></td>
                    

                </tr>
                <?php endforeach; ?>
               
        </tbody>
    </table>

</div>
</div>
