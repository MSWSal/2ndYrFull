<?php
class Rejectblood extends Controller
{
    function index($id = '')
    {
        $id=$_GET['id'];
        // print_r($id);

        $st=$_GET['stat'];
        // print_r($st);

        $arr=['status'=>$st];

        // echo "<pre>";
        // print_r($arr['nnn']);

        $bd=new Rawblood();

        if($id){
            $bd->updateStatus($id,$arr);
            $this->redirect('viewdonations');

        }

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

      
    }
}