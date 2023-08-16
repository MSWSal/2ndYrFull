<?php
class Regtoacamp extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

      $reg2cmp=new Campreg();
      $donor=new User();
      $id=AUTH::getid();
      if($_GET['click']=='true'){
        $arr=array();
        $arr['id']=$id;
        $arr['cid']=$_GET['id'];
        // echo"byee ";
        $q="select * from register where donor_id=:id and camp_id=:cid";
       
        $res=$reg2cmp->query($q,$arr);
        print_r($res);
        if(!$res&&$donor->isEligible($id)){
       
        $qry="INSERT INTO register(donor_id,camp_id) VALUES (:id,:cid)";
        $reg2cmp->query($qry,$arr);
        }

      }
    
      $this->redirect('camppage?id='.$_GET['id']);
      

        
        
        
    }
}