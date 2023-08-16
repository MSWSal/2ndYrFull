<?php
$dir = dirname(__DIR__, 2);
require_once($dir . "/public/libraries/tcpdf/tcpdf.php");
class Dashboard extends Controller
{
    function index($id = '')
    {   
        $month=date('m');
        $year=$thisyear=date('Y');
        $preyear=$year-1;

        if(isset($_GET['yearvalsub'])){
            $thisyear=$_GET['yearval'];
            
        }
        

        $bbid=$_SESSION['USER']->blood_bank_id;

        $essentials=array();

        // ---------------------------------blood requests------------------------------
        $bld=new BLbldreq();
        $q1="SELECT IFNULL(COUNT(request_id),0) AS count FROM blood_request WHERE blood_bank_id_destination=:bbid AND status=0";
        $dataa=$bld->query($q1,[
            'bbid'=>$bbid,
        ]);
        $essentials['bldreqavailable']=$dataa[0]->count;

        $q2="SELECT IFNULL(COUNT(request_id),0) AS count FROM blood_request WHERE blood_bank_id_source=:bbid AND status=0";

        $dataa=$bld->query($q2,[
            'bbid'=>$bbid,
        ]);
        $essentials['bldreqsent']=$dataa[0]->count;
       

        // ---------------------------------this month bdc-------------------------------
            $bdc=new BLBdc();
       
            $data=$bdc->thismonthcamps("blood_bank_id",$bbid,"date",$month,$year);
            if ($data!=NULL){
                $essentials['bdccount']=count($data);

            }else{
                $essentials['bdccount']=0;

            }

        // -------------------------------------this month bdc end-----------------------------

        // -------------------------------------this year--------------------------------------
        $bdc=new BLBdc();
       
            $data=$bdc->thisyearcamps("blood_bank_id",$bbid,"date",$thisyear);
            if ($data!=NULL){
                $essentials['bdccountyear']=count($data);

            }else{
                $essentials['bdccountyear']=0;

            }

            $bdc=new Rawblood();
       
            $data=$bdc->thisyeardonations("blood_bank_id",$bbid,"collected_date",$thisyear);
            if ($data!=NULL){
                $essentials['donationcountyear']=count($data);
    
            }else{
                $essentials['donationcountyear']=0;
    
            }

            $data=$bdc->thisyeardonors("blood_bank_id",$bbid,"collected_date",$thisyear);
            if ($data!=NULL){
                $essentials['donorcountyear']=count($data);

            }else{
                $essentials['donorcountyear']=0;

            }
        

        // ---------------------------------this month donations-------------------------------
        $bdc=new Rawblood();
       
        $data=$bdc->thismonthdonations("blood_bank_id",$bbid,"collected_date",$month,$year);
        if ($data!=NULL){
            $essentials['donationcount']=count($data);

        }else{
            $essentials['donationcount']=0;

        }

    // -------------------------------------this month donations end-----------------------------

    // ---------------------------------this month donors-------------------------------
    
       
    $data=$bdc->thismonthdonors("blood_bank_id",$bbid,"collected_date",$month,$year);
    if ($data!=NULL){
        $essentials['donorcount']=count($data);

    }else{
        $essentials['donorcount']=0;

    }

// -------------------------------------this month donors end-----------------------------


    $datdef=$bdc->thismonthdefect("blood_bank_id",$bbid,"collected_date",$month,$year);
    $thismonthrej['rej']=$datdef[0]->count;

    $datnondef=$bdc->thismonthnondefect("blood_bank_id",$bbid,"collected_date",$month,$year);
    $thismonthrej['nonrej']=$datnondef[0]->count;

    $datdef=$bdc->thisyeardefect("blood_bank_id",$bbid,"collected_date",$year);
    $thisyearrej['rej']=$datdef[0]->count;

    $datnondef=$bdc->thisyearnondefect("blood_bank_id",$bbid,"collected_date",$year);
    $thisyearrej['nonrej']=$datnondef[0]->count;

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


            
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $defarray=array();
        $predefarray=array();
        $def=new BLDefect();

        
        $q1="SELECT IFNULL(COUNT(defect.donor_id),0) AS count FROM defect INNER JOIN doctor ON doctor.id=defect.doctor_id WHERE doctor.blood_bank_id=$bbid AND defect.type='Other' AND YEAR(defect.date)=$year";
        $data=$def->query($q1);
        $defarray['other']=$data[0]->count;

        $q1="SELECT IFNULL(COUNT(defect.donor_id),0) AS count FROM defect INNER JOIN doctor ON doctor.id=defect.doctor_id WHERE doctor.blood_bank_id=$bbid AND defect.type='HIV/AIDS' AND YEAR(defect.date)=$year";
        $data=$def->query($q1);
        $defarray['HIV']=$data[0]->count;

        $q1="SELECT IFNULL(COUNT(defect.donor_id),0) AS count FROM defect INNER JOIN doctor ON doctor.id=defect.doctor_id WHERE doctor.blood_bank_id=$bbid AND defect.type='Thalasemea' AND YEAR(defect.date)=$year";
        $data=$def->query($q1);
        $defarray['Thalasemea']=$data[0]->count;

        $q1="SELECT IFNULL(COUNT(defect.donor_id),0) AS count FROM defect INNER JOIN doctor ON doctor.id=defect.doctor_id WHERE doctor.blood_bank_id=$bbid AND defect.type='Hemophilia' AND YEAR(defect.date)=$year";
        $data=$def->query($q1);
        $defarray['Hemophilia']=$data[0]->count;

        $q1="SELECT IFNULL(COUNT(defect.donor_id),0) AS count FROM defect INNER JOIN doctor ON doctor.id=defect.doctor_id WHERE doctor.blood_bank_id=$bbid AND defect.type='Dengue' AND YEAR(defect.date)=$year";
        $data=$def->query($q1);
        $defarray['Dengue']=$data[0]->count;

        $q1="SELECT IFNULL(COUNT(defect.donor_id),0) AS count FROM defect INNER JOIN doctor ON doctor.id=defect.doctor_id WHERE doctor.blood_bank_id=$bbid AND defect.type='Malaria' AND YEAR(defect.date)=$year";
        $data=$def->query($q1);
        $defarray['Malaria']=$data[0]->count;

        // ======================previous year==========================

        $q1="SELECT IFNULL(COUNT(defect.donor_id),0) AS count FROM defect INNER JOIN doctor ON doctor.id=defect.doctor_id WHERE doctor.blood_bank_id=$bbid AND defect.type='Other' AND YEAR(defect.date)=$preyear";
        $data=$def->query($q1);
        $predefarray['other']=$data[0]->count;

        $q1="SELECT IFNULL(COUNT(defect.donor_id),0) AS count FROM defect INNER JOIN doctor ON doctor.id=defect.doctor_id WHERE doctor.blood_bank_id=$bbid AND defect.type='HIV/AIDS' AND YEAR(defect.date)=$preyear";
        $data=$def->query($q1);
        $predefarray['HIV']=$data[0]->count;

        $q1="SELECT IFNULL(COUNT(defect.donor_id),0) AS count FROM defect INNER JOIN doctor ON doctor.id=defect.doctor_id WHERE doctor.blood_bank_id=$bbid AND defect.type='Thalasemea' AND YEAR(defect.date)=$preyear";
        $data=$def->query($q1);
        $predefarray['Thalasemea']=$data[0]->count;

        $q1="SELECT IFNULL(COUNT(defect.donor_id),0) AS count FROM defect INNER JOIN doctor ON doctor.id=defect.doctor_id WHERE doctor.blood_bank_id=$bbid AND defect.type='Hemophilia' AND YEAR(defect.date)=$preyear";
        $data=$def->query($q1);
        $predefarray['Hemophilia']=$data[0]->count;

        $q1="SELECT IFNULL(COUNT(defect.donor_id),0) AS count FROM defect INNER JOIN doctor ON doctor.id=defect.doctor_id WHERE doctor.blood_bank_id=$bbid AND defect.type='Dengue' AND YEAR(defect.date)=$preyear";
        $data=$def->query($q1);
        $predefarray['Dengue']=$data[0]->count;

        $q1="SELECT IFNULL(COUNT(defect.donor_id),0) AS count FROM defect INNER JOIN doctor ON doctor.id=defect.doctor_id WHERE doctor.blood_bank_id=$bbid AND defect.type='Malaria' AND YEAR(defect.date)=$preyear";
        $data=$def->query($q1);
        $predefarray['Malaria']=$data[0]->count;
        
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $response = array("rbc" => $rbcarray, "wbc" => $wbcarray,"plt" => $pltarray,"plsm" => $plsmarray,'rejthismonth'=>$thismonthrej,'rejthisyear'=>$thisyearrej,"defect" => $defarray,"predefect"=>$predefarray);
                
            
            echo json_encode($response);
        } else {
            $this->view('dashboard', ['rbc' => $data1,'wbc' => $data2,'plsm' => $data3,'plt' => $data4,'ess'=>$essentials]);        
        }
    }
}