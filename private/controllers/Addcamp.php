<?php
class Addcamp extends Controller
{
    function index($id2 = '')
    {

        $user = $this->load_model('User');
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        // $id=Auth::getid();    
        // $data = $user->where("id", $id);
        $cmpreq=new Campreq();
        $cmp=new Camp();
        $arr = ['id' => $id2];  

        $query="select * from donation_camp_request where camp_request_id=:id";

        $reqdata=$cmpreq->query($query,$arr);
        $bldbank=$reqdata[0]->blood_bank;
        $qryhelper=array();
        $qryhelper['id']=$bldbank;
        
        $q2="select name from blood_bank where blood_bank_id=:id";
        $reqdata['bloodbank_name']=$cmpreq->query($q2,$qryhelper)[0]->name;

        // print_r($reqdata['bloodbank_name']);

        // $reqdata=$reqdata;
       
        $image=new Image();




        if (count($_POST) > 0) {
            $errors = array();

            // $camp = $this->load_model('Camp');
            // $user=new User();
           


                if($filename=$image->pic_validate()){
                    $id = Auth::getid();
                    
                    $_POST['camp_img'] = $filename;
                    
                   
               }

               $_POST['house_no']=$reqdata[0]->house_no;
               $_POST['street']=$reqdata[0]->street;
               $_POST['city']=$reqdata[0]->city;
               $_POST['latitude']=$reqdata[0]->latitude;
               $_POST['longitude']=$reqdata[0]->longitude;
               $_POST['blood_bank_id']=$reqdata[0]->blood_bank;
               $_POST['donor_id']=$reqdata[0]->donor_id;
               $_POST['camp_req_id']=$id2;


                $cmp->insert($_POST);


               $this->redirect('campaigns');
            
        }

      

        
        // print_r($reqdata);
        $this->view('User/addcamp',['reqdata'=>$reqdata]);
    }
}

?>