<?php
class BecomeaDonor extends Controller
{
    function index()
    {
        $user = new User();

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $data = $user->where('id', Auth::getid());

        if (isset($_GET['click'])) {
            $click = $_GET['click'];
            if($click=='wheretodonate'){
            $bloodbank = new Bloodbank();
            $query = "select * from blood_bank ";
            $data = $bloodbank->query($query);
            // print_r($data);
            $this->view('User/wheretodonate', [$data]);
        }
        else if($click=='amieligible'){
            $this->view('User/amieligible', ['rows' => $data]);
        }else if($click=='whendonating'){
             $this->view('User/whendonating', ['rows' => $data]);
        }else if($click=='beforedonate'){
             $this->view('User/beforedonate', ['rows' => $data]);
        }else if($click=='afterdonate'){
             $this->view('User/afterdonate', ['rows' => $data]);
        }else if($click=='waystodonate'){
            $this->view('User/waystodonate', ['rows' => $data]);
        }
        else if($click=='campaigns'){
            $cp=new Camp();
            $flag=array();
            $cp=new Community_post();
            $currentDate = date("Y-m-d");
            $arr=array();
            $arr['date'] = $currentDate;
            $flag['flag']=1;
            $flag['nocamps']=0;
            $qry="select camp_id,latitude,longitude from blood_donation_camp where date>=:date";
            $data=$cp->query($qry,$arr);
            if($data){
                $flag['nocamps']=1;
            }
            $this->view('User/waystodonatecamps', ['data'=>$data,'flag'=>$flag]);
        }

        }
        else{$this->view('User/waystodonate', ['rows' => $data]);
        }

       
       
        
        
    }

}