

<?php $this->view('pageinit'); ?>

<?php $this->view('nav'); ?>
<?php $this->view('navup'); ?>


<link rel="stylesheet" href="<?=ROOT?>/css/mainstyle.css">




    <div class="section">           <!--main section except sidebar & navbar-->
        <div class="camptitle">
            <div class="campaign">Campaigns</div>
            <?php if ($_SESSION['USER']->role!="Admin") { ?>
            <div class="newbtn"><button onclick="openForm()">Open Form</button></div>

            <?php }?>
            
            
        </div>

        <div class="navlinks">
        <a href="<?=ROOT?>/main"><div class="tocheck activenav">
            <div class="cont">To Check</div>
        </div></a>

        <a href="<?=ROOT?>/mainaccepts"><div class="checked">
        <div class="cont">Checked</div>

        </div></a>

        <a href="<?=ROOT?>/mainrejects"><div class="rejected">
        <div class="cont">Rejected</div>

        </div></a>
    </div>
        
    </div>
    <div class="formbox">
          <form method="post" class="reqsendform">
              <div class="row">
                  <div class="q">
                      Doctor Name
                  </div>
                  <div class="colon">:</div>
                  <input type="text" id="name" name="name" readonly value=<?= $_SESSION['USER']->name;?>></input>
              </div>
              <input type="hidden" name="date" value=<?=$date?>>
              <input type="hidden" name="doctor_id" value=<?= $_SESSION['USER']->id;?>>
              <input type="hidden" name="blood_bank_id_source" value=<?= $_SESSION['USER']->blood_bank_id;?>>
              <input type="hidden" name="status" value=0>



              <div class="rows">
                  <div class="rowshort">
                      <div class="q">
                          Doctor ID
                      </div>
                      <div class="colon">:</div>
                      <input type="text" id="did" name="did"readonly value=<?= $_SESSION['USER']->id;?>></input>

                  </div>
                    <?php
                        if(count($common)>0){?>
                            <div class="rowshort">
                                <div class="q">
                                    To
                                </div>
                                <div class="colon">:</div>
                                <select id="bb" name="blood_bank_id_destination">
                                <option value="">------------------------------------------------------------Select-----------------------------------------------------------</option>
                                <?php foreach($rows as $row):?>
                                    <?php if($row->blood_bank_id!=$_SESSION['USER']->blood_bank_id){?>
                                        
                                        <option value=<?= $row->blood_bank_id?>><?= $row->name?></option>

                                    <?php }?>

                        
                                <?php endforeach; ?>
                                
                                </select>

                            </div>
                        <?php } else {echo "Sorry not available";}?>
                  

              </div>

             <div class="dash"></div>
             
             <table>
                <tr>
                    <th>Blood Type</th>
                    <th>Blood Group</th>
                    <th>Amount</th>
                    <th></th>

                </tr>
                <?php if(!empty($_SESSION['cart'])){
                    foreach($_SESSION['cart'] as $key=>$value){ ?>
                        <tr>
                            <td><?=$value['btype'];?></td>
                            <td><?=$value['bgrp'];?></td>
                            <td><input name=<?=$value['name']?> value=<?=$value['bamnt']?>></td>
                            <td><a href="<?=ROOT?>/bldrequestform?action=delete&bt=<?=$value['btype'];?>&bg=<?=$value['bgrp'];?>">Remove</a></td>

                        </tr>

                    <?php }
                }?>
                
             </table>

             


             <?php if(!empty($_SESSION['cart'])  && count($common)>0){ ?>
                <div class="button sp">
                <input type="submit" class="btns" name="sendreq" value="Send Request">
                </div>
                <div class="button sp">
                <input type="submit" class="btns" name="clearall" value="Clear All">
                </div>

             <?php }elseif(!empty($_SESSION['cart'])){?>
                <div class="button sp">
                <input type="submit" class="btns" name="clearall" value="Clear All">
                </div>
             <?php }?>
              

              
              
          </form>
        </div>
        <button class="Addbtn" onclick="openForm()"><i class="fas fa-plus"></i>Add</button>

        <!-- --------------------------form popup-------------------- -->
        <div id="myForm" class="form-popup">
	  <form  method="post" class="form-container">
		<h2>Enter Blood Amount</h2>
	
		<div class="bt">Blood Type</div><select id="bt" name="bt">
            <option value="">-------------Select-------------</option>
            <option value="RBC">RBC</option>
            <option value="WBC">WBC</option>
            <option value="Platelettes">Platelettes</option>
            <option value="Plasma">Plasma</option>
          
        </select>
	
		<div class="bt">Blood Group</div><select id="bt" name="bg">
            <option value="">-------------Select-------------</option>
            <option value="Ap">A+</option>
            <option value="An">A-</option>
            <option value="Bp">B+</option>
            <option value="Bn">B-</option>
            <option value="ABp">AB+</option>
            <option value="ABn">AB-</option>
            <option value="Op">O+</option>
            <option value="On">O-</option>

        </select>

        <input type="number" name="amnt" class="popin" placeholder="Enter Amount">
	
		<input type="submit" class="btn" name="addtocart">
		<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
	  </form>
    </div>
      <!-- ---------------------------form popup end----------------------- -->
        
    </div>
    
    

</div>
<?php 
    //   echo "<pre>";
    //  $a=$rows[0]->id;
    // print_r($rows);
    // print($a);
?>

 <script>
		function openForm() {
  document.getElementById("myForm").classList.add("show");
}

function closeForm() {
  document.getElementById("myForm").classList.remove("show");
}

	</script>
  
</div>


</div>



</body>
</html>