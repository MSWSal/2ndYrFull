<?php
class Mydefectblood extends Controller
{
    function index($id = '')
    {
        $bbid=$_SESSION['USER']->blood_bank_id;
        $did =$_SESSION['USER']->id;

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        if($_SESSION['USER']->role!='Doctor'){
            $this->redirect('login');

        }
// ----------------------------------pagination-----------------------
        $data2=array();

        $essentials=array();
        $resultsperpage= 15;

        $bdc = new BLDefect();
        $query1="select defect.*,doctor.blood_bank_id,donor.name FROM defect INNER JOIN doctor ON defect.doctor_id=doctor.id INNER JOIN donor ON defect.donor_id=donor.id where doctor.blood_bank_id=$bbid AND defect.doctor_id=$did AND donor.is_defect=1";

        $data=$bdc->query($query1);

        if($data!=NULL){
        $numofresults=count($data);
        $numofpages= ceil($numofresults/$resultsperpage);

        $essentials['noofpgs']=$numofpages;

        if(!isset($_GET['page']) or $_GET['page']> $numofpages or $_GET['page']< 1){
            $page=1;
        } else{
            $page=$_GET['page'];
        }

        $thispagefirstres=($page-1)*$resultsperpage;

        $query2="select defect.*,doctor.blood_bank_id,donor.name FROM defect INNER JOIN doctor ON defect.doctor_id=doctor.id INNER JOIN donor ON defect.donor_id=donor.id where doctor.blood_bank_id=$bbid AND defect.doctor_id=$did AND donor.is_defect=1 order by defect.defect_id limit $thispagefirstres,$resultsperpage";


        $data2=$bdc->query($query2);
       
        }
// ----------------------------------pagination end----------------------
        

        
        $this->view('mydefectblood',['rows'=>$data2,'ess'=>$essentials]);
       
    }

    function index2(){
        $bbid=$_SESSION['USER']->blood_bank_id;
        $did =$_SESSION['USER']->id;

        if (count($_POST) > 0) {

            $text = $_POST['text'];
            $text=addslashes($text);
            
            $bdc = new BLDefect();
            $stm="select defect.*,doctor.blood_bank_id,donor.name as donname FROM defect INNER JOIN doctor ON defect.doctor_id=doctor.id INNER JOIN donor ON defect.donor_id=donor.id where doctor.blood_bank_id=$bbid AND defect.doctor_id=$did AND donor.name like '$text%'";
    


            
            $results=$bdc->query($stm);
            
            echo json_encode($results);
            
             }
    }
}