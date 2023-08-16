<?php
class Checkpreviouscamps extends Controller
{
    function index($id = '')
    {
        $id=7;
        $req=new Bdcreq();

        $radius=10;
        if(isset($_POST['search'])){
            $radius=$_POST['searchval'];
        }

        $q1="select * from donation_camp_request where camp_request_id=:id";
        $data1=$req->query($q1,[
            'id'=>$id,
        ]);
        $lat=$data1[0]->latitude;
        $lng=$data1[0]->longitude;

        $cmp=new Camp();
        $currentDate = date('Y-m-d'); 
        $threeMonthsAgo = strtotime('-3 months', strtotime($currentDate));
        $arr=array();
       
        $threeMonthsAgoFormatted = date('Y-m-d', $threeMonthsAgo);
        $arr['date']=$threeMonthsAgoFormatted; //get the date before 3 months from today
        $qry="select c.camp_id,c.latitude,c.longitude from blood_donation_camp c where c.date>=:date"; 
       $data=$cmp->query($qry,$arr);

       $d2=$cmp->findCampsWithinRadius($data,$lat,$lng,$radius);
       $d2cnt=count($d2);
        $this->view('checkoldcamps2',['d2'=>$d2,'d2cnt'=>$d2cnt]);
        
       
    }
}