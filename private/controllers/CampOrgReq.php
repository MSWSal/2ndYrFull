<?php
class CampOrgReq extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $creq=new Campreq(); 
        unset($_GET['url']);
        if(isset($_GET)&&count($_GET)>0){
            print_r($_GET);
            $_GET['donor_id']=Auth::getid();

            $qry="select blood_bank_id,name,latitude,longitude from blood_bank";
            $data=$creq->query($qry) ;
            echo $_GET['city'];

          $_GET['blood_bank'] = ($creq->findClosestBoodbank($_GET['latitude'],$_GET['longitude'],$data)); //finding dis using  The haversine formula  

          

           
            $creq->insert($_GET);
            unset($_GET);
            header("location: Viewcampreqstatus");

        }
       
    
      




        $this->view('User/reqdonationcamp');
        
    }
}
?>