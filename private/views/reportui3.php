<?php $this->view('pageinit'); ?>
<link rel="stylesheet" href="<?=ROOT?>/css/reportstyle.css">
<title>Report</title>


<script src="<?=ROOT?>/scripts/genrep2.js"></script>  
<button  class="subbtn sp" onclick="genPDF('Defect Details')">pdf</button>


<div class="section" id="section">



    <div class="navbar">        <!--navbar-->

        <div class="nleft">

            <div class="imge"><img src="<?=ROOT?>/img/Logo.png" class="logo"></div>
            <div class="vbar">
            <!-- <img class="blackline">-->
            </div>
            <div class="blinkphi">

                <div class="blink">BloodLink</div>
                

            </div>
        </div>
        <div class="nright">
            Date:  <?= date('Y-m-d')?>
        </div>
    </div>
    <div class="content">
        <div class="ttlmain">
            Defect Report
        </div>
        
        <div class="dash">

        </div>
        <div class="campname g">
            <div class="name">
            Donor Id
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $don->id?></div>
        </div>
        <div class="campdate g">
            <div class="name">
            Donor Name
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $don->name?></div>
        </div>
        <div class="location g">
            
            <div class="name">
            Mobile NO
            </div>
            <div class="colon">
                :
            </div>
            <div class="val">+94<?= $don->mobile?></div>
        </div>
        <div class="bloodbank g">
            
            <div class="name">
            NIC
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $don->nic?></div>
        </div>
        <div class="bloodbank g">
            
            <div class="name">
            Address
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $don->houseno?>, <?= $don->street?>, <?= $don->city?></div>
        </div>
       
        <div class="stat">
            Doctor Details
        </div>
        <div class="dash">
            
        </div>
        <div class="noofdonation g">
            
            <div class="name">
            Doctor ID
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $doc->id?></div>
        </div>
        <div class="noofdonors g">
        
            <div class="name">
            Doctor Name
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $doc->name?></div>

        </div>
        <div class="noofaccept g">
            <div class="name">
            Contact No
            </div>
            <div class="colon">
                :
            </div>
            <div class="val">+94<?= $doc->telephone?></div>

        </div>
        <div class="noofaccept g">
            <div class="name">
            BloodBank
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $bb->name?></div>

        </div>
        <div class="stat">
            Defect Status
        </div>
        <div class="dash">
            
            </div>

        <div class="noofaccept g">
            <div class="name">
            Added Date
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $def->date?></div>

        </div>

        <div class="noofaccept g">
            <div class="name">
            Reason
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $def->reason?></div>

        </div>

        <div class="noofaccept g">
            <div class="name">
            Additional(If any)
            </div>
            <div class="colon">
                :
            </div>

        </div>
        <div class="textbox">
            

        </div>
        
        

       

        
        <div class="dashlast">
            
        </div>

        <div class="acknolege">
            <p>I here by certify that above information provided are true to my knowledge and up to date.</p>
        </div>

        <div class="signs">
            <div class="dashsign">
            PHI Signature
            </div>
            <div class="dashsign">
            Doctor Signature
            </div>
            <div class="dashsign">
            Date 
            </div>
        </div>


    </div>

</div>

<!--  -->
