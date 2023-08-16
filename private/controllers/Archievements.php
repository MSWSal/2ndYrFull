<?php
class Archievements extends Controller
{
    function index($id = '')
    {

    $uid=AUTH::getid();
    $arr=array();
    $arr['uid']=$uid;

        $bpckt=new Rawblood();
        $q1="select count(packet_id) as cnt from raw_blood_packet where donor_id=:uid"; 
        $res=$bpckt->query($q1,$arr);
        $data=array();
        $res=$res[0];
        $data['count']=$res->cnt;

        $q2="select collected_date from raw_blood_packet where donor_id=:uid";
        $res2=$bpckt->query($q2,$arr);
        // print_r($res2);
        $dates=array();
        foreach($res2 as $r){
            array_push($dates,$r->collected_date);

        }
        function compareDates($date1, $date2){
            return strtotime($date1) - strtotime($date2);
         }
      
        usort($dates, "compareDates");
        // print_r($dates);
        $threetimes= $bpckt->check3years($dates); //check weather donor has donated 3 times within a year
        $data['threetimesyear']=$threetimes;
        $this->view('User/archievements',$data);
        
       
    }
}