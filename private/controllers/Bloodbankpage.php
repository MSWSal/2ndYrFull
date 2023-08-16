<?php
class Bloodbankpage extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $bb=new Bloodbank(); //bloodbank model
        $arr=array(); //array for prepared statement
        $arr['id']=$id;
        $qry="select * from blood_bank where blood_bank_id=:id";
        $data=$bb->query($qry,$arr);
        
        $this->view('User/bloodbankpageview',[$data]);
       
    }
}