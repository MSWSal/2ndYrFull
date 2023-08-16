<?php
class Donor_details extends Controller
{
    public function index()
    {
        $date=date('Y-m-d');
        $bbid=$_SESSION['USER']->blood_bank_id;
        $id = 1;
        $campid=$_GET['campid'];
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }

        $donor = new User();
        $data = $donor->where('id', $id);
        $data = $data[0];

        date_default_timezone_set("Asia/Calcutta");
        $date1 = date('Y-m-d');
        $date2 = $data->last_donated;
        $diff = abs(strtotime($date2) - strtotime($date1));
        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        // ?

        
        if($months>=3 || $years>=1){
            $eligible=1;
        }
        else if ($months<3){
            $eligible=0;
        }

        $defect = new Defect();
        $check = $defect->where('donor_id', $id);
        if ($check) {
            $check = $check[0];
        } else {
            $check = 0;
        }
        if (isset($_POST['accept']) > 0) {
            $blood_packet = new Rawblood();
            $arr['donor_id'] = $id;
            $blood_bank_id = $arr['blood_bank_id'] = $bbid;
            $blood_donation_camp_id = $arr['blood_donation_camp_id'] = $campid;
            $arr['amount']=450;
            $arr['collected_date']=$date;
            $blood_packet->insert($arr);

            $q="UPDATE donor SET last_donated=CURDATE() where id=$id"; //update last donated date
            $don=new User();
            $don->query($q);

            $this->redirect('viewdonations');

        }
        $this->view('donor_details', ['data' => $data, 'check' => $check,'eligible'=>$eligible,'campid'=>$campid]);
    }



}
