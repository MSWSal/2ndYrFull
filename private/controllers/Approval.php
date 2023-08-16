<?php
class Approval extends Controller
{
    function index($id = '')
    {   
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        if($_SESSION['USER']->role!='PHI'){
            $this->redirect('login');

        }
        $pid=$_SESSION['USER']->id;
        $id=$_GET['id'];

        $st=$_GET['stat'];

        $arr['status']=$st;
        $arr['phi_id']=$pid;

        

        $bdapp=new Bdcreq();

        if($id){
            $bdapp->updatestatus($id,$arr);
            $this->redirect('main');

           
        }

        

        
    }
}