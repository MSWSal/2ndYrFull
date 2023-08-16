<?php
class Reportui extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $id=$_GET['id'];

        $bdc=new BLBdc();
        $bb=new BLBloodbank();
        $bp=new Rawblood();
        $doc=new BLDoc();

        $bdcdata=$bdc->where("camp_id",$id);
        $bdcdata=$bdcdata[0];

        $did=$bdcdata->doctor_id;
        $docdata=$doc->where("id",$did);
        $docdata=$docdata[0];

        $bbid=$_SESSION['USER']->blood_bank_id;
        $bbdata=$bb->where("blood_bank_id",$bbid);
        $bbdata=$bbdata[0];

        $q1="SELECT COUNT(packet_id) AS count FROM raw_blood_packet WHERE blood_donation_camp_id=$id";
        $countdonation=$bp->query($q1);
        $countdonation=$countdonation[0];

        $q2="SELECT COUNT(packet_id) AS count FROM raw_blood_packet WHERE blood_donation_camp_id=$id AND status=1";
        $countaccept=$bp->query($q2);

        $q3="SELECT COUNT(packet_id) AS count FROM raw_blood_packet WHERE blood_donation_camp_id=$id AND status>1";
        $countreject=$bp->query($q3);

        $rbc = new Rbc(); //model instantiated
        $q="SELECT IFNULL(SUM(rbc.amount),0) AS sum FROM rbc INNER JOIN raw_blood_packet ON rbc.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND rbc.blood_group='A+'";
        $data1=$rbc->query($q);
        $q="SELECT IFNULL(SUM(rbc.amount),0) AS sum FROM rbc INNER JOIN raw_blood_packet ON rbc.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND rbc.blood_group='A-'";
        $data2=$rbc->query($q);
        $q="SELECT IFNULL(SUM(rbc.amount),0) AS sum FROM rbc INNER JOIN raw_blood_packet ON rbc.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND rbc.blood_group='B+'";
        $data3=$rbc->query($q);
        $q="SELECT IFNULL(SUM(rbc.amount),0) AS sum FROM rbc INNER JOIN raw_blood_packet ON rbc.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND rbc.blood_group='B-'";
        $data4=$rbc->query($q);
        $q="SELECT IFNULL(SUM(rbc.amount),0) AS sum FROM rbc INNER JOIN raw_blood_packet ON rbc.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND rbc.blood_group='AB+'";
        $data5=$rbc->query($q);
        $q="SELECT IFNULL(SUM(rbc.amount),0) AS sum FROM rbc INNER JOIN raw_blood_packet ON rbc.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND rbc.blood_group='AB-'";
        $data6=$rbc->query($q);
        $q="SELECT IFNULL(SUM(rbc.amount),0) AS sum FROM rbc INNER JOIN raw_blood_packet ON rbc.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND rbc.blood_group='O+'";
        $data7=$rbc->query($q);
        $q="SELECT IFNULL(SUM(rbc.amount),0) AS sum FROM rbc INNER JOIN raw_blood_packet ON rbc.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND rbc.blood_group='O-'";
        $data8=$rbc->query($q);
            

            $rbcarray['Ap']=$data1[0]->sum;
            $rbcarray['An']=$data2[0]->sum;
            $rbcarray['Bp']=$data3[0]->sum;
            $rbcarray['Bn']=$data4[0]->sum;
            $rbcarray['ABp']=$data5[0]->sum;
            $rbcarray['ABn']=$data6[0]->sum;
            $rbcarray['Op']=$data7[0]->sum;
            $rbcarray['On']=$data8[0]->sum;

        
        $wbc = new Wbc(); //model instantiated

        $q="SELECT IFNULL(SUM(wbc.amount),0) AS sum FROM wbc INNER JOIN raw_blood_packet ON wbc.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND wbc.blood_group='A+'";
        $data1=$wbc->query($q);
        $q="SELECT IFNULL(SUM(wbc.amount),0) AS sum FROM wbc INNER JOIN raw_blood_packet ON wbc.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND wbc.blood_group='A-'";
        $data2=$wbc->query($q);
        $q="SELECT IFNULL(SUM(wbc.amount),0) AS sum FROM wbc INNER JOIN raw_blood_packet ON wbc.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND wbc.blood_group='B+'";
        $data3=$wbc->query($q);
        $q="SELECT IFNULL(SUM(wbc.amount),0) AS sum FROM wbc INNER JOIN raw_blood_packet ON wbc.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND wbc.blood_group='B-'";
        $data4=$wbc->query($q);
        $q="SELECT IFNULL(SUM(wbc.amount),0) AS sum FROM wbc INNER JOIN raw_blood_packet ON wbc.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND wbc.blood_group='AB+'";
        $data5=$wbc->query($q);
        $q="SELECT IFNULL(SUM(wbc.amount),0) AS sum FROM wbc INNER JOIN raw_blood_packet ON wbc.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND wbc.blood_group='AB-'";
        $data6=$wbc->query($q);
        $q="SELECT IFNULL(SUM(wbc.amount),0) AS sum FROM wbc INNER JOIN raw_blood_packet ON wbc.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND wbc.blood_group='O+'";
        $data7=$wbc->query($q);
        $q="SELECT IFNULL(SUM(wbc.amount),0) AS sum FROM wbc INNER JOIN raw_blood_packet ON wbc.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND wbc.blood_group='O-'";
        $data8=$wbc->query($q);
        

        $wbcarray['Ap']=$data1[0]->sum;
        $wbcarray['An']=$data2[0]->sum;
        $wbcarray['Bp']=$data3[0]->sum;
        $wbcarray['Bn']=$data4[0]->sum;
        $wbcarray['ABp']=$data5[0]->sum;
        $wbcarray['ABn']=$data6[0]->sum;
        $wbcarray['Op']=$data7[0]->sum;
        $wbcarray['On']=$data8[0]->sum;

        $plsm = new Plasma(); //model instantiated
        $q="SELECT IFNULL(SUM(plasma.amount),0) AS sum FROM plasma INNER JOIN raw_blood_packet ON plasma.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND plasma.blood_group='A+'";
        $data1=$plsm->query($q);
        $q="SELECT IFNULL(SUM(plasma.amount),0) AS sum FROM plasma INNER JOIN raw_blood_packet ON plasma.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND plasma.blood_group='A-'";
        $data2=$plsm->query($q);
        $q="SELECT IFNULL(SUM(plasma.amount),0) AS sum FROM plasma INNER JOIN raw_blood_packet ON plasma.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND plasma.blood_group='B+'";
        $data3=$plsm->query($q);
        $q="SELECT IFNULL(SUM(plasma.amount),0) AS sum FROM plasma INNER JOIN raw_blood_packet ON plasma.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND plasma.blood_group='B-'";
        $data4=$plsm->query($q);
        $q="SELECT IFNULL(SUM(plasma.amount),0) AS sum FROM plasma INNER JOIN raw_blood_packet ON plasma.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND plasma.blood_group='AB+'";
        $data5=$plsm->query($q);
        $q="SELECT IFNULL(SUM(plasma.amount),0) AS sum FROM plasma INNER JOIN raw_blood_packet ON plasma.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND plasma.blood_group='AB-'";
        $data6=$plsm->query($q);
        $q="SELECT IFNULL(SUM(plasma.amount),0) AS sum FROM plasma INNER JOIN raw_blood_packet ON plasma.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND plasma.blood_group='O+'";
        $data7=$plsm->query($q);
        $q="SELECT IFNULL(SUM(plasma.amount),0) AS sum FROM plasma INNER JOIN raw_blood_packet ON plasma.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND plasma.blood_group='O-'";
        $data8=$plsm->query($q);

        $plsmarray['Ap']=$data1[0]->sum;
        $plsmarray['An']=$data2[0]->sum;
        $plsmarray['Bp']=$data3[0]->sum;
        $plsmarray['Bn']=$data4[0]->sum;
        $plsmarray['ABp']=$data5[0]->sum;
        $plsmarray['ABn']=$data6[0]->sum;
        $plsmarray['Op']=$data7[0]->sum;
        $plsmarray['On']=$data8[0]->sum;

        $plt = new Platelettes(); //model instantiated
        $q="SELECT IFNULL(SUM(platelets.amount),0) AS sum FROM platelets INNER JOIN raw_blood_packet ON platelets.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND platelets.blood_group='A+'";
        $data1=$plt->query($q);
        $q="SELECT IFNULL(SUM(platelets.amount),0) AS sum FROM platelets INNER JOIN raw_blood_packet ON platelets.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND platelets.blood_group='A-'";
        $data2=$plt->query($q);
        $q="SELECT IFNULL(SUM(platelets.amount),0) AS sum FROM platelets INNER JOIN raw_blood_packet ON platelets.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND platelets.blood_group='B+'";
        $data3=$plt->query($q);
        $q="SELECT IFNULL(SUM(platelets.amount),0) AS sum FROM platelets INNER JOIN raw_blood_packet ON platelets.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND platelets.blood_group='B-'";
        $data4=$plt->query($q);
        $q="SELECT IFNULL(SUM(platelets.amount),0) AS sum FROM platelets INNER JOIN raw_blood_packet ON platelets.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND platelets.blood_group='AB+'";
        $data5=$plt->query($q);
        $q="SELECT IFNULL(SUM(platelets.amount),0) AS sum FROM platelets INNER JOIN raw_blood_packet ON platelets.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND platelets.blood_group='AB-'";
        $data6=$plt->query($q);
        $q="SELECT IFNULL(SUM(platelets.amount),0) AS sum FROM platelets INNER JOIN raw_blood_packet ON platelets.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND platelets.blood_group='O+'";
        $data7=$plt->query($q);
        $q="SELECT IFNULL(SUM(platelets.amount),0) AS sum FROM platelets INNER JOIN raw_blood_packet ON platelets.packet_id=raw_blood_packet.packet_id WHERE raw_blood_packet.blood_donation_camp_id=$id AND platelets.blood_group='O-'";
        $data8=$plt->query($q);

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
            $this->view('reportui',['bdc'=>$bdcdata,'doc'=>$docdata,'bb'=>$bbdata,'doncount'=>$countdonation,'acccount'=>$countaccept,'rejcount'=>$countreject,'rbc'=> $rbcarray,'wbc'=>$wbcarray,'plt'=> $pltarray,'plsm'=>$plsmarray,'id'=>$id]);
        }
       
    }

    
}