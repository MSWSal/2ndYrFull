<?php
class Myregisteredcamps extends Controller
{
    function index($cid = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $id=AUTH::getid();
        $reg=new Campreg();

        $arr=array();
        $arr['id'] = $id;
        if($cid!='' && $_GET['remove']=='true'){ //unregister request
            $q2="update register set status=4 where camp_id=:cid";
            $arr2=array();
            $arr2['cid']=$cid;
            $reg->query($q2,$arr2);
            $this->redirect('myregisteredcamps');
        }
        



        
        $q1="select distinct c.camp_id,c.camp_name,c.date,c.house_no,c.street,c.city, r.status from register r inner join blood_donation_camp c on r.camp_id=c.camp_id where r.donor_id=:id and r.status!=4"; //status = 4 means registration is cancelled
        $res=$reg->query($q1,$arr);
        // $res=$res[0];
        // print_r($res);

      



        $this->view('User/registeredcamps',['res'=>$res]);

        

       
    }
}