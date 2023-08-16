<?php
class Phiusers extends Controller
{
    function index($id = '')
    {
        if($_SESSION['USER']=='Donor'){
            $this->redirect('login');

        }

            $data2=array();

            $essentials=array();
            $resultsperpage= 15;
            
            $usrs = new BLPHI();
            $data = $usrs->findAll();

            if($data!=NULL){
            $numofresults=count($data);
            $numofpages= ceil($numofresults/$resultsperpage);

            $essentials['noofpgs']=$numofpages;

            // echo $numofpages;

            if(!isset($_GET['page']) or $_GET['page']> $numofpages or $_GET['page']< 1){
                $page=1;
            } else{
                $page=$_GET['page'];
            }

            $thispagefirstres=($page-1)*$resultsperpage;


            $data2= $usrs->paginall($thispagefirstres,$resultsperpage);

        }

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        
         $this->view('phiusers', ['rows' => $data2,'ess' => $essentials]);
        
    }

    function index2(){
        if (count($_POST) > 0) {

            $text = $_POST['text'];
            $text=addslashes($text);
            
            
            $usrs = new BLPHI();

            $stm="select * from phi where name like '$text%'";

            
            $results=$usrs->query($stm);
            
            echo json_encode($results);
            
             }
    }
}