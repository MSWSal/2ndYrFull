

<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>
<title>Bdc Accepts</title>



<link rel="stylesheet" href="<?=ROOT?>/css/stylemain.css">




    <div class="section">           <!--main section except sidebar & navbar-->
        <div class="camptitle">
            <div class="campaign">Campaigns</div>

        </div>

        <div class="navlinks">
        <a href="<?=ROOT?>/main"><div class="tocheck">
            <div class="cont">To Check</div>
        </div></a>

        <a href="<?=ROOT?>/mainaccepts"><div class="checked activenav">
        <div class="cont">Checked</div>

        </div></a>

        <a href="<?=ROOT?>/mainrejects"><div class="rejected">
        <div class="cont">Rejected</div>

        </div></a>
    </div>

    <div class="search">
            <form method="post">
                <input type="text" placeholder="&#xf002; Search Donors..." name="searchval" class="jssearch">
                <input type="submit" name="search" class="search" value="Search"></button>

            </form>

        </div>
        
        <div class="tbl">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>City</th>
                    <th>Street</th>
                    <th>Date</th>
                    
                    <th>Status</th>
                    <th></th>
                    <th></th>

                </tr>
            <thead>
            <?php if($rows!=NULL) {
             foreach($rows as $row):?>
                <div class="trows">
                
                <tr class="hov">
                    <td><?=$row->name ?></td>
                    <td><?=$row->city ?></td>
                    <td><?=$row->street ?></td>
                    <td><?=$row->date ?></td>
                    
                    <td>
                    <?php       //status indicators
                            $cdate=date("y-m-d");
                            // echo $cdate;
                            if ((strtotime($cdate)<(strtotime($row->date)))&&($row->status==0 || $row->status==1)) {?>
                               <div class="upc"><?php echo "Upcoming";?></div> 
                           <?php }
                            if ((strtotime($cdate)==(strtotime($row->date)))&&($row->status==1)) {?>
                                <div class="ong"><?php echo "Ongoing";?></div>
                            <?php }
                            if ((strtotime($cdate)>(strtotime($row->date)))&&($row->status==1)) {
                                echo "Closed";
                            }
                            if($row->status==2){?>
                                <div class="rej"><?php echo "Rejected";?></div>
                            <?php }
                            ?>
                    </td>
                    <td><?php           //accept/reject buttons
                            if ($row->status==0 && $_SESSION['USER']->role=="PHI" ){  ?>
                                <a href="<?=ROOT?>/approval?id=<?php echo $row->camp_request_id; ?>&stat=1"><button class="btn">Accept</button></a> <a href="<?=ROOT?>/approval?id=<?php echo $row->camp_request_id; ?>&stat=2"><button class="btn">Reject</button>
                        <?php } ?>
                            
                    
                    </td>
                    



                
                </tr>
                </div>
            <?php endforeach; 
        }?>
        </table>
        </div>
    </div>
    <?php if($rows!=NULL) {?>

    <div class="pagination">
            <div class="pagin">
                <a href="<?=ROOT?>/Main?page=1"><button class="pagebtn">First</button></a>
            </div>
            <div class="pagin">
                <a href="<?=ROOT?>/Main?page=<?php 
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
                <a href="<?=ROOT?>/Main?page=<?=$i?>"><button class="pagebtn"><?=$i?></button></a>
            </div>
            
       <?php } ?> 
            <div class="pagin">
                <a href="<?=ROOT?>/Main?page=<?php
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
                <a href="<?=ROOT?>/Main?page=<?=$ess['noofpgs']?>"><button class="pagebtn">Last</button></a>
            </div>
    
    </div><?php } ?>

   

  
</div>

    


</div>




</body>
</html>