<?php
class Viewcampsinmap extends Controller
{
    
    function index($id = '')
    {
        $flag=array();
        $cp=new Community_post();
        $currentDate = date("Y-m-d");
        $arr=array();
        $arr['date'] = $currentDate;
        $flag['flag']=1;
        $flag['nocamps']=0;

        $qry="select camp_id,latitude,longitude from blood_donation_camp where date=:date";


        if(isset($_GET['prog'])&&$_GET['prog']=='true'){
            $qry="select camp_id,latitude,longitude from blood_donation_camp where date=:date";
            $flag['flag']=1;
        }
        elseif(isset($_GET['upcoming'])&&$_GET['upcoming']=='true'){
            $qry="select camp_id,latitude,longitude from blood_donation_camp where date>=:date";
            $flag['flag']=0;
        }


        $data=$cp->query($qry,$arr);
        if($data){
            $flag['nocamps']=1;
        }
        // print_r($data);
       

        
        $this->view('User/viewcampsinmap',['data'=>$data,'flag'=>$flag]);
        
    }
}
