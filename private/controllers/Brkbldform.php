<?php
class Brkbldform extends Controller
{
    function index($id = '')
    {

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        
        $data=array();
        $id=$_GET['id'];
        $dataid['id']=$id;

        

        $bp = new Rawblood();
        $data=$bp->where("packet_id",$id);
        

        $Amount=$data[0]->amount;
        $Collected_date=$data[0]->collected_date; //useful
        $Blood_bank_ID=$data[0]->blood_bank_id;
        $Donor_id=$data[0]->donor_id;
        $Blood_Donation_camp_ID=$data[0]->blood_donation_camp_id;
        $Status=$data[0]->status;

        $rexpdate = date('Y-m-d',strtotime($Collected_date. ' +42 days'));
        $wexpdate = date('Y-m-d',strtotime($Collected_date. ' +1 days'));
        $pltexpdate = date('Y-m-d',strtotime($Collected_date. ' +5 days'));
        $plsmexpdate = date('Y-m-d',strtotime($Collected_date. ' +5 days'));



        // echo $expdate;

        if(count($_POST)>0){

            $rbc=new Rbc();
            $wbc=new Wbc();
            $plt=new Platelettes();
            $plsm=new Plasma();

            // echo $_POST['RBCamount'];

            
            $arr1['exp_date'] = $rexpdate;
            $arr1['amount'] = $_POST['RBCamount'];
            $arr1['blood_group'] = $_POST['BloodGroup'];
            $arr1['donor_id'] = $Donor_id; //should come from table...
            $arr1['lab_id'] = $_SESSION['USER']->id;
            $arr1['packet_id'] = $id;
            $arr1['blood_bank_id'] =$Blood_bank_ID;

            $arr2['exp_date'] = $wexpdate;
            
            $arr2['amount'] = $_POST['WBCamount'];
            $arr2['blood_group'] = $_POST['BloodGroup'];
            $arr2['donor_id'] = $Donor_id; //should come from table...
            $arr2['lab_id'] = $_SESSION['USER']->id;
            $arr2['packet_id'] = $id;
            $arr2['blood_bank_id'] =$Blood_bank_ID;

            $arr3['exp_date'] = $pltexpdate;
            $arr3['amount'] = $_POST['PLTamount'];
            $arr3['blood_group'] = $_POST['BloodGroup'];
            $arr3['donor_id'] = $Donor_id; //should come from table...
            $arr3['lab_id'] = $_SESSION['USER']->id;
            $arr3['packet_id'] = $id;
            $arr3['blood_bank_id'] =$Blood_bank_ID;

            $arr4['exp_date'] = $plsmexpdate;
            $arr4['amount'] = $_POST['PLSMamount'];
            $arr4['blood_group'] = $_POST['BloodGroup'];
            $arr4['donor_id'] = $Donor_id; //should come from table...
            $arr4['lab_id'] = $_SESSION['USER']->id;
            $arr4['packet_id'] = $id;
            $arr4['blood_bank_id'] =$Blood_bank_ID;
            
            
            

            $rbc->insert($arr1);
            $wbc->insert($arr2);
            $plt->insert($arr3);
            $plsm->insert($arr4);

            $arr5['status']=1;  //------------set packet status to 'checked'...
            $bp->updateStatus($id,$arr5);



            $this->redirect('viewdonations');





        }


         $this->view('brkbldform',['dat'=>$dataid]);
         
        

    }
}