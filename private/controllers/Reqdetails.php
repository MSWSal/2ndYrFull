<?php
class Reqdetails extends Controller
{
    function index($id = '')
    {   
        $id=$_GET['id'];
        // print_r($id);

        $bdc=new BLBdc();

        if(count($_POST)>0){

            // echo $_POST['docid'];
            $arr['doctor_id'] = $_POST['docid'];

            $bdc->updatedoc($id,$arr);
            $this->redirect('upbdconly');

        }
        
        $bbid=$_SESSION['USER']->blood_bank_id;

        $doc=new BLDoc();
        $q1="SELECT * FROM doctor WHERE blood_bank_id=:bbid";
        $data1=$doc->query($q1,[
            'bbid'=>$bbid,
        ]);
      

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        

        if($id){
            $data=$bdc->where("camp_id",$id);
            
        }




        // $data=$user->where('id', 1);
        $this->view('reqdetails', ['rows' => $data[0],'rows2'=>$data1]);
        // $this->view('home');
    }
}