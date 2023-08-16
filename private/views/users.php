<?php $this->view('includes/pageinit'); ?>

        <?php $this->view('includes/nav'); ?>
        <?php $this->view('includes/navup'); ?>

        <link rel="stylesheet" href="<?=ROOT?>/css/mainstyle.css">


        <div class="section">           <!--main section except sidebar & navbar-->
            <div class="camptitle">
                <div class="campaign">System Users</div>
                <?php if($_SESSION['USER']->role=="Admin"){ ?>
                <div class="newbtn"><a href="<?=ROOT?>/addusrform"><button class="btn" >New</button></a></div>

                <?php }?>
            </div>
            <div class="tbl">
            <table>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>NIC</th>
                        <th>Role</th>
                        <th>Tel No</th>
                        <th>Email</th>
                        

                    </tr>
                <thead>
                <?php foreach($rows as $row):?>
                    <tr>
                        
                        <td><a  href="<?=ROOT?>/reqdetails?id=<?=$row->id?>"><?=$row->uid ?></a></td>
                        <td><?=$row->name ?></td>
                        <td><?=$row->nic ?></td>
                        <td><?=$row->role?></td>
                        <td>
                        <?=$row->tel ?>
                        </td>
                        <td>
                            <?=$row->email ?>
                        </td>


                    
                    </tr>
                <?php endforeach; ?>
            </table>
            </div>

            <div class="pagination">
                <div class="pagin">
                    <a href="<?=ROOT?>/users?page=1"><button class="pagebtn">First</button></a>
                </div>
                <div class="pagin">
                    <a href="<?=ROOT?>/users?page=<?php 
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
                    <a href="<?=ROOT?>/users?page=<?=$i?>"><button class="pagebtn"><?=$i?></button></a>
                </div>
                
           <?php } ?> 
                <div class="pagin">
                    <a href="<?=ROOT?>/users?page=<?php
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
                    <a href="<?=ROOT?>/users?page=<?=$ess['noofpgs']?>"><button class="pagebtn">Last</button></a>
                </div>
        
        </div>

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