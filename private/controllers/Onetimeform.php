<?php
class Onetimeform extends Controller
{
    function index($id = '')
    {   

        if(count($_POST)>0){
            $bp=new Rawblood();

            if($_POST['def']==1){
                $this->redirect('onetimeui');

            }else{
                    $arr['amount'] = 450;
                $arr['donor_id'] = $_POST['id'];
                $arr['collected_date'] = $_POST['date'];
                $arr['blood_bank_id'] = $_SESSION['USER']->blood_bank_id;
                $arr['blood_donation_camp_id'] = 1;//how...........
            

                $bp->insert($arr);

                $this->redirect('onetimeui');
            }

            
            





        }
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        // $bd=new Rawblood();
        // $query1="SELECT donor.* FROM donor INNER JOIN raw_blood_packet ON donor.id=raw_blood_packet.donor_id WHERE raw_blood_packet.blood_donation_camp_id=$id";
        // $data=$bd->query($query1);


        $this->view('onetimeform');
       
    }
}