<?php $this->view('pageinit'); ?>
<link rel="stylesheet" href="<?=ROOT?>/css/reportstyle.css">
<script src="<?=ROOT?>/js/ajscriptreport.js"></script>
<title>Report</title>



<script src="<?=ROOT?>/scripts/genrep2.js"></script>  
<button  class="subbtn sp" onclick="genPDF('BDC report')">pdf</button>

<form>
        <input type="hidden" placeholder="Search Lab..." class="jssearch" value=<?=$id?>>

    </form>
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
            Blood Donation Camp Report-Year <?=date('Y')?>
        </div>
        <div class="dash">

        </div>
        <div class="campname g">
            <div class="name">
            camp name
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $bdc->camp_name?></div>
        </div>
        <div class="campdate g">
            <div class="name">
            camp date
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $bdc->date?></div>
        </div>
        <div class="location g">
            
            <div class="name">
            location
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $bdc->address?></div>
        </div>
        <div class="bloodbank g">
            
            <div class="name">
            bloodbank
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $bb->name?></div>
        </div>
        <div class="docid g">
            
            <div class="name">
            assigned doctor
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $doc->name?></div>
        </div>
        <div class="stat">
            Statistics
        </div>
        <div class="dash">
            
        </div>
        <div class="noofdonation g">
            
            <div class="name">
            No of Donations
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $doncount->count?></div>
        </div>
        <div class="noofdonors g">
        
            <div class="name">
            No of Donors
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $doncount->count?></div>

        </div>
        <div class="noofaccept g">
            <div class="name">
            No of Acceptance
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $acccount[0]->count?></div>

        </div>
        <div class="noofreject g">
            <div class="name">
            No of Rejections
            </div>
            <div class="colon">
                :
            </div>
            <div class="val"><?= $rejcount[0]->count?></div>

        </div>
        <div class="bldamount g">
        
            <div class="name">
            No of Rejections
            </div>
            <div class="colon">
                :
            </div>
            <div class="val">cccccccc</div>

            

        </div>
        <div class="stat">
            Amount of Blood
        </div>
        <div class="dash">
            
        </div>
        <!-- <div class="chrtarea">
                <div class="canarea">
                    <canvas id="chart" ></canvas>
                </div>
            </div> -->

            <div class="bldtypeamnts">
            <div class="btypes">
                <div class="btype"><u>RBC</u></div>
                    <div class="amnts">
                        <div class="type">A+</div>
                        <div class="val"><?= $rbc['Ap']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">A-</div>
                        <div class="val"><?= $rbc['An']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">B+</div>
                        <div class="val"><?= $rbc['Bp']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">B-</div>
                        <div class="val"><?= $rbc['Bn']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">AB+</div>
                        <div class="val"><?= $rbc['ABp']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">AB-</div>
                        <div class="val"><?= $rbc['ABn']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">O+</div>
                        <div class="val"><?= $rbc['Op']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">O-</div>
                        <div class="val"><?= $rbc['On']?></div>
                    </div>
            </div>

            <div class="btypes">
                <div class="btype"><u>WBC</u></div>
                <div class="amnts">
                        <div class="type">A+</div>
                        <div class="val"><?= $wbc['Ap']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">A-</div>
                        <div class="val"><?= $wbc['An']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">B+</div>
                        <div class="val"><?= $wbc['Bp']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">B-</div>
                        <div class="val"><?= $wbc['Bn']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">AB+</div>
                        <div class="val"><?= $wbc['ABp']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">AB-</div>
                        <div class="val"><?= $wbc['ABn']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">O+</div>
                        <div class="val"><?= $wbc['Op']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">O-</div>
                        <div class="val"><?= $wbc['On']?></div>
                    </div>
                

            </div>
            <div class="btypes">
                <div class="btype"><u>Platelettes</u></div>
                <div class="amnts">
                        <div class="type">A+</div>
                        <div class="val"><?= $plt['Ap']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">A-</div>
                        <div class="val"><?= $plt['An']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">B+</div>
                        <div class="val"><?= $plt['Bp']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">B-</div>
                        <div class="val"><?= $plt['Bn']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">AB+</div>
                        <div class="val"><?= $plt['ABp']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">AB-</div>
                        <div class="val"><?= $plt['ABn']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">O+</div>
                        <div class="val"><?= $plt['Op']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">O-</div>
                        <div class="val"><?= $plt['On']?></div>
                    </div>

            </div>
            <div class="btypes">
                <div class="btype"><u>Plasma</u></div>
                <div class="amnts">
                        <div class="type">A+</div>
                        <div class="val"><?= $plsm['Ap']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">A-</div>
                        <div class="val"><?= $plsm['An']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">B+</div>
                        <div class="val"><?= $plsm['Bp']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">B-</div>
                        <div class="val"><?= $plsm['Bn']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">AB+</div>
                        <div class="val"><?= $plsm['ABp']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">AB-</div>
                        <div class="val"><?= $plsm['ABn']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">O+</div>
                        <div class="val"><?= $plsm['Op']?></div>
                    </div>
                    <div class="amnts">
                        <div class="type">O-</div>
                        <div class="val"><?= $plsm['On']?></div>
                    </div>

            </div>

        </div>
        <div class="dashlast">
            
        </div>

        <div class="acknolege">
            <p>I here by certify that above information provided are true to my knowledge and up to date.</p>
        </div>
        <div class="signs">
            <div class="dashsign">
            PHI
            </div>
            <div class="dashsign">
            Doctor
            </div>
            <div class="dashsign">
            Date
            </div>
        </div>


    </div>
                <!-- <button  class="subbtn sp" onclick="genPDF()">pdf</button> -->

</div>

<!--  -->
