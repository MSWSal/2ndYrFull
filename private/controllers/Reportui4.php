<?php
class Reportui4 extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $bbid=$_SESSION['USER']->blood_bank_id;
        $year=date('Y');
        $preyear=$year-1;
        
        $def=new BLDefect();
        $bb=new BLBloodbank();
        

        $bbdata=$bb->where("blood_bank_id",$bbid);
        $bbdata=$bbdata[0];
        $defarray=array();
        $predefarray=array();

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

  

        $bdc=new BLBdc();
        $q="SELECT IFNULL(COUNT(camp_id),0) AS count FROM blood_donation_camp WHERE blood_bank_id=$bbid AND YEAR(date)=$year";
        $data=$bdc->query($q);
        $bdcarray['bdccount']=$data[0]->count;

        $bp=new Rawblood();
        $q="SELECT IFNULL(COUNT(packet_id),0) AS count FROM raw_blood_packet WHERE blood_bank_id=$bbid AND YEAR(collected_date)=$year";
        $data=$bp->query($q);
        $bdcarray['donationcount']=$data[0]->count;

        $q="SELECT IFNULL(COUNT(donor_id),0) AS count FROM raw_blood_packet WHERE blood_bank_id=$bbid AND YEAR(collected_date)=$year";
        $data=$bp->query($q);
        $bdcarray['doncount']=$data[0]->count;

        $q="SELECT IFNULL(COUNT(packet_id),0) AS count FROM raw_blood_packet WHERE blood_bank_id=$bbid AND YEAR(collected_date)=$year AND status>1";
        $data=$bp->query($q);
        $bdcarray['defcount']=$data[0]->count;
        

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            

            $response = array("defect" => $defarray,"predefect"=>$predefarray);
                
            

            echo json_encode($response);
        } else {
            $this->view('reportui4',['bb'=>$bbdata,'bdc'=>$bdcarray]);//,['doc'=>$docdata,'bb'=>$bbdata,'don'=>$dondata,'def'=>$defdata]);
        }

        

        


    }
}