

<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>
<title>Upcoming Blood Donation Campaigns</title>


<link rel="stylesheet" href="<?=ROOT?>/css/bdchistorystyle.css">




    <div class="section">           <!--main section except sidebar & navbar-->
        <div class="camptitle">
            <div class="campaign">Upcoming Campaigns</div>
            <?php if ($_SESSION['USER']->role!="Admin") { ?>
            <div class="newbtn"><a href="<?=ROOT?>/form"><button class="btn" >New</button></a></div>

            <?php }?>
            
        </div>
        <div class="tbl">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>Doctor</th>

                </tr>
            <thead>
            <?php foreach($rows as $row):
                $cdate=date("y-m-d");?>
                    <div class="trows">
                    <tr class="hov">
                        <td><?=$row->camp_name ?></td>
                        <td><?=$row->house_no?>,<?=$row->street?>,<?=$row->city?></td>
                        <td><?=$row->date ?></td>
                        <td><?=$row->start_time ?></td>
                        <?php if($row->doctor_id==NULL){?>
                            <?php if($_SESSION['USER']->role=='PHI'){?>
                                <td><a  href="<?=ROOT?>/reqdetails?id=<?=$row->camp_id?>"><button class="btn">Assign</button></a></td>
                            <?php }?>
                        <?php }?>
                        
                        
                        <td><a  href="<?=ROOT?>/reqdetails?id=<?=$row->camp_id?>"><button class="bdcvbtn"><i class="fas fa-eye" id="view_btn"></i></button></a></td>
    
    
    
                    
                    </tr>
                    </div>
                    
                
            <?php endforeach; ?>
        </table>
        </div>
    </div>
    <?php if($rows!=NULL) {?>

    <div class="pagination">
            <div class="pagin">
                <a href="<?=ROOT?>/upbdconly?page=1"><button class="pagebtn">First</button></a>
            </div>
            <div class="pagin">
                <a href="<?=ROOT?>/upbdconly?page=<?php 
                    if(!isset($_GET['page'])){
                        echo "1";
                    }elseif(($_GET['page']-1)<1){
                        echo "1";
                    } else{
                        echo $_GET['page']-1;
                    }
                    
                
                ?>"><button class="pagebtn"><<</button></a>
            </div>
       <?php for($i=1;$i<=$ess['noofpgs'];$i++) { ?>
            <div class="pagin">
                <a href="<?=ROOT?>/upbdconly?page=<?=$i?>"><button class="pagebtn"><?=$i?></button></a>
            </div>
            
       <?php } ?> 
            <div class="pagin">
                <a href="<?=ROOT?>/upbdconly?page=<?php
                    if(!isset($_GET['page'])){
                        echo "2";
                    } elseif(($_GET['page']+1)>$ess['noofpgs']){
                        echo $ess['noofpgs'];
                    } else{
                        echo $_GET['page']+1;
                    }
                    
                
                ?>"><button class="pagebtn">>></button></a>
            </div>
            <div class="pagin">
                <a href="<?=ROOT?>/upbdconly?page=<?=$ess['noofpgs']?>"><button class="pagebtn">Last</button></a>
            </div>
    
    </div><?php } ?>

</div>
<?php 
    //   echo "<pre>";
    //  $a=$rows[0]->id;
    // print_r($rows);
    // print($a);
?>


</body>
</html>