<?php
class Addtodefect extends Controller
{
    function index($id = '')
    {   
        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        
        if($_SESSION['USER']->role=='Donor'){
            $this->redirect('login');

        }
        $id=$_GET['id'];

        $bp=new Rawblood();
        $data=$bp->where("packet_id",$id);

        $data=$data[0];

        $did=$data->donor_id;

        $don=new BLDonor();

        $dondata=$don->where("id",$did);
        $dondata=$dondata[0];
        print_r($dondata);
        if(count($_POST)>0){

            $def=new BLDefect();
            
            $arr['lab_id'] = $_POST['labid'];
            $arr['donor_id'] = $_POST['donid'];
            $arr['date'] = $_POST['date'];
            $arr['type']= $_POST['type'];
            $arr['reason'] = $_POST['reason'];

            $arr2['is_defect']=1;

            $arr3['status']=3;

            $bp->updateStatus($id,$arr3);
            $don->update($did,$arr2);

            $def->insert($arr);

            $this->redirect('viewdonationsrejected');


        }



        $this->view('addtodefect',['rows'=>$data,'rows2'=>$dondata]);
       
    }
}