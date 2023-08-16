<?php
class QRScanner extends Controller
{
    function index($id = '')
    {

        
            $campid=$_GET['id'];
        

        if(!Auth::logged_in()){
            $this->redirect('login');
        }


        
        $this->view('qrscan',['campid'=>$campid]);
        
    }
}