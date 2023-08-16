<?php
class Checkblood extends Controller
{
    function index($id = '')
    {
        $id=$_GET['id'];

        $st=$_GET['stat'];

        $arr=['status'=>$st];

       

        $bd=new Rawblood();

        if($id){
            $bd->updateStatus($id,$arr);
            $this->redirect("Brkbldform?id=".$id);
            
        }

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        
    }
}