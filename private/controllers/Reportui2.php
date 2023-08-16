<?php
class Reportui2 extends Controller
{
    function index($id = '')
    {



        $bdc=new BLBdc();
        $bb=new BLBloodbank();
        $bp=new Rawblood();
        $doc=new BLDoc();

        

        

        $bbid=$_SESSION['USER']->blood_bank_id;
        $bbdata=$bb->where("blood_bank_id",$bbid);
        $bbdata=$bbdata[0];

        $q1="SELECT COUNT(packet_id) AS count FROM raw_blood_packet WHERE blood_bank_id=$bbid";
        $countdonation=$bp->query($q1);
        $countdonation=$countdonation[0];

        $q2="SELECT COUNT(packet_id) AS count FROM raw_blood_packet WHERE blood_bank_id=$bbid AND status=1";
        $countaccept=$bp->query($q2);

        $q3="SELECT COUNT(packet_id) AS count FROM raw_blood_packet WHERE blood_bank_id=$bbid AND status>1";
        $countreject=$bp->query($q3);
        $rbc = new Rbc(); //model instantiated
        $data1=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","A+");
        $data2=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","A-");
        $data3=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","B+");
        $data4=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","B-");
        $data5=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","AB+");
        $data6=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","AB-");
        $data7=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","O+");
        $data8=$rbc->getbgrp("blood_bank_id",$bbid,"blood_group","O-");

        $rbcarray['Ap']=$data1[0]->sum;
        $rbcarray['An']=$data2[0]->sum;
        $rbcarray['Bp']=$data3[0]->sum;
        $rbcarray['Bn']=$data4[0]->sum;
        $rbcarray['ABp']=$data5[0]->sum;
        $rbcarray['ABn']=$data6[0]->sum;
        $rbcarray['Op']=$data7[0]->sum;
        $rbcarray['On']=$data8[0]->sum;



        $wbc = new Wbc(); //model instantiated
        $data1=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","A+");
        $data2=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","A-");
        $data3=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","B+");
        $data4=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","B-");
        $data5=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","AB+");
        $data6=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","AB-");
        $data7=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","O+");
        $data8=$wbc->getbgrp("blood_bank_id",$bbid,"blood_group","O-");

        $wbcarray['Ap']=$data1[0]->sum;
        $wbcarray['An']=$data2[0]->sum;
        $wbcarray['Bp']=$data3[0]->sum;
        $wbcarray['Bn']=$data4[0]->sum;
        $wbcarray['ABp']=$data5[0]->sum;
        $wbcarray['ABn']=$data6[0]->sum;
        $wbcarray['Op']=$data7[0]->sum;
        $wbcarray['On']=$data8[0]->sum;

        $plsm = new Plasma(); //model instantiated
        $data1=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","A+");
        $data2=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","A-");
        $data3=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","B+");
        $data4=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","B-");
        $data5=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","AB+");
        $data6=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","AB-");
        $data7=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","O+");
        $data8=$plsm->getbgrp("blood_bank_id",$bbid,"blood_group","O-");

        $plsmarray['Ap']=$data1[0]->sum;
        $plsmarray['An']=$data2[0]->sum;
        $plsmarray['Bp']=$data3[0]->sum;
        $plsmarray['Bn']=$data4[0]->sum;
        $plsmarray['ABp']=$data5[0]->sum;
        $plsmarray['ABn']=$data6[0]->sum;
        $plsmarray['Op']=$data7[0]->sum;
        $plsmarray['On']=$data8[0]->sum;

        $plt = new Platelettes(); //model instantiated
        $data1=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","A+");
        $data2=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","A-");
        $data3=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","B+");
        $data4=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","B-");
        $data5=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","AB+");
        $data6=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","AB-");
        $data7=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","O+");
        $data8=$plt->getbgrp("blood_bank_id",$bbid,"blood_group","O-");

        $pltarray['Ap']=$data1[0]->sum;
        $pltarray['An']=$data2[0]->sum;
        $pltarray['Bp']=$data3[0]->sum;
        $pltarray['Bn']=$data4[0]->sum;
        $pltarray['ABp']=$data5[0]->sum;
        $pltarray['ABn']=$data6[0]->sum;
        $pltarray['Op']=$data7[0]->sum;
        $pltarray['On']=$data8[0]->sum;

        


        if($_SERVER['REQUEST_METHOD'] === 'POST') {
           

            $response = array("rbc" => $rbcarray, "wbc" => $wbcarray,"plt" => $pltarray,"plsm" => $plsmarray);
                
            

            echo json_encode($response);
        } else {
            $this->view('reportui2',['bb'=>$bbdata,'doncount'=>$countdonation,'acccount'=>$countaccept,'rejcount'=>$countreject,'rbc'=> $rbcarray,'wbc'=>$wbcarray,'plt'=> $pltarray,'plsm'=>$plsmarray]);
        }
       
    }
}