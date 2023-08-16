<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>
<title>View Blood Request</title>


<link rel="stylesheet" href="<?=ROOT?>/css/viewbldreqstyle.css">

<div class="section">           <!--main section except sidebar & navbar-->
        <div class="camptitle">
            <div class="campaign">Blood Requests</div>
        </div>

        <div class="navlinks">
            <a href="<?=ROOT?>/viewbldrequests"><div class="vreq activenav">
                <div class="cont">View Requests</div>
            </div></a>

            <a href="<?=ROOT?>/viewstatusbldrequests"><div class="sreq">
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
                    <th>Doctor</th>
                    <th>Date </th>
                    <th></th>
                    
                </tr>
            <thead>

            <?php if($rows!=NULL) {
                 foreach($rows as $row):?>
                    <div class="trows">
                    
                    <tr class="hov">
                        <td><?=$row->bbname ?></td>
                        <td><?=$row->name ?></td>
                        <td><?=$row->date ?></td>
                        <?php if($row->status==0){ ?>
                             <td>Pending</td>

                        <?php }elseif($row->status==1){?>
                            <td>Accepted</td>

                        <?php }elseif($row->status==2){?>
                            <td class="redtd">Rejected</td>

                        <?php }?>

                        <?php if($_SESSION['USER']->role=='Doctor'){
                             if($row->status==0){ ?>
                                <td><a  href="<?=ROOT?>/viewbldreqdetails?id=<?=$row->request_id?>"><button class="bdcvbtn"><i class="fas fa-eye" id="view_btn"></i></button></a></td>
   
                           <?php }elseif($row->status!=0){?>
                               <td><a  href="<?=ROOT?>/viewbldreqdetails/index2?id=<?=$row->request_id?>"><button class="bdcvbtn"><i class="fas fa-eye" id="view_btn"></i></button></a></td>
   
                           <?php }
                        }else{ ?>
                            <td><a  href="<?=ROOT?>/viewbldreqdetails/index2?id=<?=$row->request_id?>"><button class="bdcvbtn"><i class="fas fa-eye" id="view_btn"></i></button></a></td>
                        <?php }?>

                        

                    </tr>
                    </div>
                <?php endforeach; 
            }?>
               
            
        </table>
        </div>
</div>
    
    

</div>



</body>
</html>