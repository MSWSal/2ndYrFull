<?php
class Camppage extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        // print_r($_GET['id']);
        $id = $_GET['id'];

        $camp = new Camp();

        if ($id) {
            $arr=array();
            $arr['id'] = $id;
            $qry="select * from campDetails where camp_id = :id";
            $reqdata=$camp->query($qry,$arr);
            // print_r($reqdata);
            $orgenizer=$reqdata[0]->donor_id;
            $currentuser=Auth::getid();
            // print($orgenizer);
            $flags=array();
            $flags['userflg']=0;
            if($orgenizer==$currentuser){
                $flags['userflg']=1;
            }
            // $data = $camp->where("camp_id",$id);
            
            $this->view('User/camppage', ['rows' =>$reqdata[0],'flags'=>$flags]);
        }
        else{
            // print_r($id);
            // echo "$id";
            echo "not found";
        }
        
    }
}