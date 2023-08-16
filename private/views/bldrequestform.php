<?php $this->view('pageinit'); ?>
<?php $this->view('navup'); ?>
<title>Request blood</title>



<link rel="stylesheet" href="<?=ROOT?>/css/mainstyle.css">
<link rel="stylesheet" href="<?=ROOT?>/css/bldreqform.css">

<?php $date=date('Y-m-d');?>

<div class="section">           <!--main section except sidebar & navbar-->
        <div class="camptitle">
            <div class="campaign">Send Blood Requests</div>
        </div>

        <div class="navlinks">
            <a href="<?=ROOT?>/viewbldrequests"><div class="vreq">
                <div class="cont">View Requests</div>
            </div></a>

            <a href="<?=ROOT?>/viewstatusbldrequests"><div class="sreq">
            <div class="cont">Sent Status</div>

            </div></a>
        <?php if($_SESSION['USER']->role=='Doctor') {?>

            <a href="<?=ROOT?>/bldrequestform"><div class="sendreq activenav">
            <div class="cont">Send Request</div>

            </div></a>
        <?php } ?>
            
        </div>

        <div class="formbox">
          <form method="post" class="reqsendform">

              


              <input type="hidden" name="date" value=<?=$date?>>
              <input type="hidden" name="doctor_id" value=<?= $_SESSION['USER']->id;?>>
              <input type="hidden" name="blood_bank_id_source" value=<?= $_SESSION['USER']->blood_bank_id;?>>
              <input type="hidden" name="status" value=0>
              <input type="hidden" id="did" name="did"readonly value=<?= $_SESSION['USER']->id;?>>


              <div class="rows">
                  <div class="rowshort">
                      <div class="q">
                          Doctor Name
                      </div>
                      <div class="colon">:</div>
                      <input type="text" id="name" name="name" readonly value=<?= $_SESSION['USER']->name;?>></input>

                  </div>
                    <?php
                        if(count($common)>0){?>
                            <div class="rowshort">
                                <div class="q">
                                    To
                                </div>
                                <div class="colon">:</div>
                                <select id="bb" name="blood_bank_id_destination">
                                <option value="">-------------------------------------Select-----------------------------------</option>
                                <?php foreach($rows as $row):?>
                                    <?php if($row->blood_bank_id!=$_SESSION['USER']->blood_bank_id){?>
                                        
                                        <option value=<?= $row->blood_bank_id?>><?= $row->name?></option>

                                    <?php }?>

                        
                                <?php endforeach; ?>
                                
                                </select>

                            </div>
                        <?php } else {?>
                            <div class="err">Sorry Not Available</div>
                        <?php } ?>
                  

              </div>

             <div class="dash"></div>
             
             <table>
             <?php if(!empty($_SESSION['cart'])){?>
                <tr>
                    <th>Blood Type</th>
                    <th>Blood Group</th>
                    <th>Amount</th>
                    <th></th>

                </tr>
             <?php }?>
                <!-- <tr>
                    <th>Blood Type</th>
                    <th>Blood Group</th>
                    <th>Amount</th>
                    <th></th>

                </tr> -->
                <?php if(!empty($_SESSION['cart'])){
                    foreach($_SESSION['cart'] as $key=>$value){ ?>
                        <tr>
                            <td><?=$value['btype'];?></td>
                            <td><?=$value['bgrp'];?></td>
                            <td><input name=<?=$value['name']?> value=<?=$value['bamnt']?> readonly></td>
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
        <div class="Addbtnholder">
        <button class="Addbtn" onclick="openForm()"><i class="fas fa-plus"></i>Add</button>

        </div>

        <!-- --------------------------form popup-------------------- -->
        <div id="myForm" class="form-popup">
	  <form  method="post" class="form-container">
		<h2>Enter Blood Amount</h2>
	
		<div class="bt">Blood Type<select id="bt" name="bt">
            <option value="">-------------Select-------------</option>
            <option value="RBC">RBC</option>
            <option value="WBC">WBC</option>
            <option value="Platelettes">Platelettes</option>
            <option value="Plasma">Plasma</option>
          
        </select><small>sss</small></div>
	
		<div class="bt">Blood Group<select id="bg" name="bg">
            <option value="">-------------Select-------------</option>
            <option value="Ap">A+</option>
            <option value="An">A-</option>
            <option value="Bp">B+</option>
            <option value="Bn">B-</option>
            <option value="ABp">AB+</option>
            <option value="ABn">AB-</option>
            <option value="Op">O+</option>
            <option value="On">O-</option>

        </select><small>sss</small></div>
<div class="bt">
<input type="number" name="amnt" class="popin" id="amnt" placeholder="Enter Amount"><small>sss</small>

</div>
	
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

    <script>
         const form=document.getElementById('myForm');
        const bt=document.getElementById('bt');
        const bg=document.getElementById('bg');
        const amnt=document.getElementById('amnt');

        var valid=true;


        form.addEventListener('submit',(e)=>{
            valid=true;

            e.preventDefault();
            checkinputs();
            if(valid===true) {
                form.submit();
            }
        })

        async function checkinputs() {
            const btval=bt.value.trim();
            const bgval=bg.value.trim();
            const amntval=amnt.value.trim();
            
            var todaysDate = new Date();





            if(btval== '') {
                seterrorfor(bt,'Blood Type cannot be blank');
            } else {
                setsuccessfor(bt);
            }

           

            if(bgval== '') {
                seterrorfor(bg,'Blood Group cannot be blank');
            } else {
                setsuccessfor(bg);
            }

            if(amntval== '') {
                seterrorfor(amnt,'Amount cannot be blank');
            } else {
                setsuccessfor(amnt);
            }

           

        }

        function seterrorfor(input,message) {
            const formcontrol=input.parentElement;
            const small=formcontrol.querySelector('small');

            small.innerText=message;

            formcontrol.className= 'bt error';

            valid=false;

        }

        function setsuccessfor(input) {
            const formcontrol=input.parentElement;
            formcontrol.className= 'bt success'

        }

    </script>

</body>
</html>