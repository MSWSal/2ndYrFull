<?php
class Bldrequestform extends Controller
{
    function index($id = '')
    {

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        if($_SESSION['USER']->role!='Doctor'){
            $this->redirect('login');

        }

        $did=$_SESSION['USER']->id;
        $bbid=$_SESSION['USER']->blood_bank_id;
        $date=date('Y-m-d');

        if(isset($_POST['addtocart'])){
            $str1;
            $str2;

            switch ($_POST['bt']) {
                case "RBC":
                  $str1="r";
                  break;
                case "WBC":
                    $str1="w";     
                     break;
                case "Platelettes":
                    $str1="plt";
                      break;
                  case "Plasma":
                    $str1="plsm";
                    break;
                default:
                  echo "unknown.";
                  break;
              }

              switch ($_POST['bg']) {
                case "Ap":
                  $str2="Ap";
                  break;
                case "An":
                    $str2="An";     
                     break;
                case "Bp":
                    $str2="Bp";
                      break;
                case "Bn":
                    $str2="Bn";
                    break;
                case "ABp":
                  $str2="ABp";
                  break;
                case "ABn":
                    $str2="ABn";     
                     break;
                case "Op":
                    $str2="Op";
                      break;
                case "On":
                    $str2="On";
                    break;
                default:
                  echo "unknown.";
                  break;
              }

              $str=$str1.$str2;

            if(isset($_SESSION['cart'])){
                $count=count($_SESSION['cart']);
                $itemarray=array(
                    'btype'=> $_POST['bt'],
                    'bgrp'=> $_POST['bg'],
                    'bamnt'=> $_POST['amnt'],
                    'name'=>$str

                );
                $_SESSION['cart'][$count] = $itemarray;

            } else{
                $itemarray=array(
                    'btype'=> $_POST['bt'],
                    'bgrp'=> $_POST['bg'],
                    'bamnt'=> $_POST['amnt'],
                    'name'=>$str

                );
                $_SESSION['cart'][0] = $itemarray;
            }
        }

        if(isset($_POST['sendreq'])){
            echo "<pre>";
            print_r($_POST);
            $breq=new BLbldreq();
            $breq->insert($_POST);

            unset($_SESSION['cart']);

            $this->redirect('viewstatusbldrequests');

        }

        if(isset($_POST['clearall'])){
            unset($_SESSION['cart']);

        }

        if(isset($_GET['action']) && !empty($_SESSION['cart'])){
            if($_GET['action']=="delete"){
                foreach($_SESSION['cart'] as $key => $value){
                    if($value['btype']==$_GET['bt'] && $value['bgrp']==$_GET['bg']){
                        unset($_SESSION['cart'][$key]);
                        echo '<script>window.location="http://localhost/Bloood%20Link%202/public/bldrequestform"</script>';
                    }
                }

            }
    

        }

        // ============================select 3 suitable blood banks=============================

        $array1 = array(1, 2, 3, 4, 5);
        $array2 = array(1, 2, 3, 4, 5);
        $array3 = array(3, 4);
        
        $bbs=new BLBloodbank();
        $q="SELECT blood_bank_id FROM blood_bank";
        $data2=$bbs->query($q);
        
        if($data2!=NULL){
            foreach($data2 as $key=>$value){
                $bbarray[]=$value->blood_bank_id;  //to get all bb ids into array
            }
        }


        
        $mainarr=array();
        $bloodarray=['rAp','rAn','rBp','rBn','rABp','rABn','rOp','rOn','wAp','wAn','wBp','wBn','wABp','wABn','wOp','wOn','pltAp','pltAn','pltBp','pltBn','pltABp','pltABn','pltOp','pltOn','pltAp','pltAn','pltBp','pltBn','pltABp','pltABn','pltOp','pltOn'];
        foreach($bloodarray as $k=>$v){
            $mainarr[$v]=$bbarray;
        }
        
        
        if(isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $key => $value){
                switch ($value['btype']) {
                    case "RBC":
                      $table='rbc';
                      break;
                    case "WBC":
                        $table='wbc';
                        break;
                    case "Platelettes":
                        $table='platelets';
                        break;
                      case "Plasma":
                        $table='plasma';
                        break;
                    default:
                      echo "unknown.";
                      break;
                  }
                  switch ($value['bgrp']) {
                    case "Ap":
                      $bgrp="A+";
                      break;
                    case "An":
                        $bgrp="A-";
                        break;
                    case "Bp":
                        $bgrp="B+";
                        break;
                    case "Bn":
                        $bgrp="B-";
                        break;
                    case "ABp":
                        $bgrp="AB+";
                        break;
                    case "ABn":
                        $bgrp="AB-";
                        break;
                    case "Op":
                        $bgrp="O+";
                        break;
                    case "On":
                        $bgrp="O-";
                        break;
                    default:
                      echo "unknown.";
                      break;
                  }
                //   echo $value['name'];
                  $bloodamnt=$value['bamnt'];
                  $q="select blood_bank_id,IFNULL(SUM(amount),0) from $table where blood_group='$bgrp' group by blood_bank_id having SUM(amount)>$bloodamnt";
                    $bbexdata=$bbs->query($q);
                    unset($mainarr[$value['name']]);
                    if($bbexdata!=NULL){
                        foreach($bbexdata as $k => $v){
                            // echo $k;
                            // echo $v->blood_bank_id;
                            $mainarr[$value['name']][]=$v->blood_bank_id;
                        }
                    }else{
                        $mainarr[$value['name']]=array();
                    }
                    
                
                    
            }
            
            

          
        }
            
        $common_values = array_intersect($mainarr['rAp'],$mainarr['rAn'],$mainarr['rBp'],$mainarr['rBn'],$mainarr['rABp'],$mainarr['rABn'],$mainarr['rOp'],$mainarr['rOn'],$mainarr['wAp'],$mainarr['wAn'],$mainarr['wBp'],$mainarr['wBn'],$mainarr['wABp'],$mainarr['wABn'],$mainarr['wOp'],$mainarr['wOn'],$mainarr['pltAp'],$mainarr['pltAn'],$mainarr['pltBp'],$mainarr['pltBn'],$mainarr['pltABp'],$mainarr['pltABn'],$mainarr['pltOp'],$mainarr['pltOn'],$mainarr['pltAp'],$mainarr['pltAn'],$mainarr['pltBp'],$mainarr['pltBn'],$mainarr['pltABp'],$mainarr['pltABn'],$mainarr['pltOp'],$mainarr['pltOn']);
    
        
        



        $bb=new BLBloodbank();
        $bbdata=$bb->findAll();


        
        $this->view('bldrequestform',['rows'=>$bbdata,'common'=>$common_values]);
       
    }
}