

<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>
<title>One Time UI</title>


<link rel="stylesheet" href="<?=ROOT?>/css/onetimeuistyle.css">




    <div class="section">           <!--main section except sidebar & navbar-->
        <div class="camptitle">
            <div class="campaign">Add Donations</div>  
            <div class="newbtn"><img class="onetimg" src="<?=ROOT?>/images/add-512.png"><a href="<?=ROOT?>/qrscanner?id=<?=$campid?>"><button class="btnonet">QR</button></a><img class="onetimg" src="<?=ROOT?>/images/add-user.png"><a href="<?=ROOT?>/search?id=<?=$campid?>"><button class="btnonet">Search</button></a></div>

        </div>
        <div class="tbl">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>NIC</th>
                    <th>Mobile</th>
                    
                    

                </tr>
            <thead>
            <?php if($rows!=NULL) {
             foreach($rows as $row):?>
                <div class="trows">
                
                <tr class="hov">
                    <td><?=$row->name ?></td>
                    <td><?=$row->email ?></td>
                    <td><?=$row->nic ?></td>
                    <td><?=$row->mobile ?></td>
                </tr>
                </div>
            <?php endforeach; 
        }?>
        </table>
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