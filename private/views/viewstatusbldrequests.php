<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>
<title>View Status Requests</title>

<link rel="stylesheet" href="<?=ROOT?>/css/viewbldreqstyle.css">

<div class="section">           <!--main section except sidebar & navbar-->
        <div class="camptitle">
            <div class="campaign">Blood Requests</div>
        </div>

        <div class="navlinks">
            <a href="<?=ROOT?>/viewbldrequests"><div class="vreq">
                <div class="cont">View Requests</div>
            </div></a>

            <a href="<?=ROOT?>/viewstatusbldrequests"><div class="sreq activenav">
            <div class="cont">Sent Status</div>

            </div></a>

            <?php if($_SESSION['USER']->role=='Doctor') {?>

            <a href="<?=ROOT?>/bldrequestform"><div class="sendreq">
            <div class="cont">Send Request</div>

            </div></a>
            <?php } ?>
        </div>

        <div class="tbl">
        <table>
            <thead>
                <tr>
                    <th>BloodBank</th>
                    <th>Sent By </th>

                    <th>Date </th>
                    <th>Status</th>

                </tr>
            <thead>

            <?php if($rows!=NULL) {
                 foreach($rows as $row):?>
                    <div class="trows">
                    
                    <tr class="hov">
                        <td><?=$row->name ?></td>
                        <td>Dr.<?=$row->docname ?> </td>

                        <td><?=$row->date ?></td>

                        <td>
                            <?php if($row->status==0){
                                echo "Pending...";
                            }elseif($row->status==1){
                                echo "Accepted";
                            } elseif($row->status==2){
                                echo "Rejected";
                            }?>
                        </td>
                        
                        <td><a  href="<?=ROOT?>/viewbldreqdetails/index2?id=<?=$row->request_id?>"><button class="bdcvbtn"><i class="fas fa-eye" id="view_btn"></i></button></a></td>


                        
                        



                    
                    </tr>
                    </div>
                <?php endforeach; 
            }?>
               
            
        </table>
        </div>

        <?php if($rows!=NULL) {?>

<div class="pagination">
    <?php
        $current_url = "http";
        $current_url .= "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $current_url = strtok($current_url, '?');


    ?>
    <div class="pagin">
        <a href="<?=$current_url?>?page=1"><button class="pagebtn">First</button></a>
    </div>
    <div class="pagin">
        <a href="<?=$current_url?>?page=<?php 
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
        <a href="<?=$current_url?>?page=<?=$i?>"><button class="pagebtn"><?=$i?></button></a>
    </div>
    
<?php } ?> 
    <div class="pagin">
        <a href="<?=$current_url?>?page=<?php
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
        <a href="<?=$current_url?>?page=<?=$ess['noofpgs']?>"><button class="pagebtn">Last</button></a>
    </div>

</div><?php } ?>
    </div>
    
    

</div>
<?php 
    //   echo "<pre>";
    //  $a=$rows[0]->id;
    // print_r($rows);
    // print($a);
?>


</body>
</html>