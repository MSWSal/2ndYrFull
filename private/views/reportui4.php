<?php $this->view('pageinit'); ?>
<link rel="stylesheet" href="<?=ROOT?>/css/reportstyle.css">
<script src="<?=ROOT?>/js/ajscriptreport4.js"></script>
<title>Report</title>


<script src="<?=ROOT?>/scripts/genrep2.js"></script>  
<button  class="subbtn sp" onclick="genPDF('Defect Report <?= date('Y')?>')"> <i class="fas fa-download"></i> pdf</button>


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
            Defect Report -<?= date('Y')?>
        </div>
        
        <div class="dash">

        </div>
        <div class="campname g">
            <div class="name">
            BloodBank
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?=$bb->name?> Blood Bank</div>
        </div>
        <div class="campdate g">
            <div class="name">
            Address
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?=$bb->house_no?>, <?=$bb->street?>, <?=$bb->city?></div>
        </div>
        <div class="location g">
            
            <div class="name">
            Contact No
            </div>
            <div class="colon">
                :
            </div>
            <div class="val">+94 <?=$bb->telephone?> </div>
        </div>
       
       
        <div class="stat">
            Defect Details
        </div>
        <div class="dash">
            
        </div>
        <div class="noofdonation g">
            
            <div class="name">
            No of BD Camps
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?=$bdc['bdccount']?></div>
        </div>
        <div class="noofdonors g">
        
            <div class="name">
            No of Donations
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?=$bdc['donationcount']?></div>

        </div>
        <div class="noofaccept g">
            <div class="name">
            No of Donors
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?=$bdc['doncount']?></div>

        </div>
        <div class="noofaccept g">
            <div class="name">
            No of Defects
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?=$bdc['defcount']?></div>

        </div>

        <div class="noofaccept g">
            <div class="name">
            Defect %
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?=($bdc['defcount']/$bdc['donationcount'])*100?>%</div>

        </div>
        <div class="stat">
            Defect Status -<?= date('Y')?> vs <?= date('Y')-1;?>
 
        </div>
        <div class="dash">
            
            </div>

            <div class="chrtarea">
                <div class="canarea">
                    <canvas id="chart" ></canvas>
                </div>
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