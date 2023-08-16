<?php
class Removedefect extends Controller
{
    function index($id = '')
    {

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $docid=$_SESSION['USER']->id;

        $arr=array();
        $id=$_GET['id'];

        $don=new BLDonor();
        $def=new BLDefect();
        $data=$def->where("defect_id",$id);

        $donid=$data[0]->donor_id;



        if($id){
            
            

            $arr['is_defect']=0;
            $don->update($donid,$arr);
            $q="UPDATE defect SET doctor_id=:docid WHERE defect_id=$id";
            $def->query($q,[
                'docid'=>$docid,
            ]);
            $this->redirect('defectblood');

        }

        
        $this->view('home', ['rows' => $data[0]]);
       
    }
}