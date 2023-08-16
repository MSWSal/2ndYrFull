<?php
class Docusers extends Controller
{
    function index($id = '')
    {
            $data2=array();

            $essentials=array();
            $resultsperpage= 15;
            
            $usrs = new BLDoc();
            $data = $usrs->findAll();

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


            $data2= $usrs->paginall($thispagefirstres,$resultsperpage);
        }

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        

         $this->view('docusers', ['rows' => $data2,'ess' => $essentials]);
        
    }

    function index2(){
        if (count($_POST) > 0) {

            $text = $_POST['text'];
            $text=addslashes($text);
            
           
            $usrs = new BLDoc();

            $stm="select * from doctor where name like '$text%'";

            
            $results=$usrs->query($stm);
            
            echo json_encode($results);
            
             }
    }
}