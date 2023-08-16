<?php
class Sendaccept extends Controller
{
    function index()
    {
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $arraystr=$_GET['idarray'];
        $name=$_GET['name'];

        // echo $arraystr;
        // $array=explode(',',$arraystr);

        echo "<pre>";
        print_r($arraystr);

        echo $name;

        if(!isset($_SESSION['bld'])){
            echo 'creating session';
            $_SESSION['bld']=array();
        }

        if(isset($_SESSION['bld'][$name]['reject'])){
            unset($_SESSION['bld'][$name]['reject']);
        }

        $_SESSION['bld'][$name]['items']=$arraystr;
        $_SESSION['bld'][$name]['accept']=1;

        var_dump($_SESSION['bld'][$name]['items']);

        // redirect('viewbldreqdetails');
        $this->redirect('viewbldreqdetails');

        

        

        $this->view('sendaccept');




    }

    function index2()
    {
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $name=$_GET['name'];

        if(!isset($_SESSION['bld'])){
            echo 'creating session';
            $_SESSION['bld']=array();
        }

        if(isset($_SESSION['bld'][$name]['accept'])){
            unset($_SESSION['bld'][$name]['accept']);
            unset($_SESSION['bld'][$name]['items']);

        }

        
        $_SESSION['bld'][$name]['reject']=1;

        

        // redirect('viewbldreqdetails');
        $this->redirect('viewbldreqdetails');

        

        

        $this->view('sendaccept');




    }

    function index3()
    {
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $id=$_GET['id'];
        $did=$_SESSION['USER']->id;


        if(isset($_SESSION['bld'])){
            unset($_SESSION['bld']);
        }

        $q1="UPDATE blood_request SET status=2, respond_doc_id=:did WHERE request_id=:id";
        $bldreq=new BLbldreq();
        $bldreq->query($q1,[
            'did'=>$did,
            'id'=>$id
        ]);

        // redirect('viewbldreqdetails');
        $this->redirect('viewbldrequests');

    }

    function index4()
    {
        if(!Auth::logged_in()){
            $this->redirect('login');
        }
    

        $bbid=$_GET['bb'];
        $rbc= new Rbc();
        $wbc= new Wbc();
        $plt= new Platelettes();
        $plsm= new Plasma();

        $rbcarr=array('rAp','rAn','rBp','rBn','rABp','rABn','rOp','rOn');
        foreach($rbcarr as $key => $value){
            if(isset($_SESSION['bld'][$value]['accept'])){
                foreach($_SESSION['bld'][$value]['items'] as $k => $v){
                    $q1="UPDATE rbc SET blood_bank_id=:bbid WHERE final_packet_id=:v";
                    $rbc->query($q1,[
                        'bbid'=>$bbid,
                        'v'=>$v
                    ]);
                }
            }
        }

        $wbcarr=array('wAp','wAn','wBp','wBn','wABp','wABn','wOp','wOn');
        foreach($wbcarr as $key => $value){
            if(isset($_SESSION['bld'][$value]['accept'])){
                foreach($_SESSION['bld'][$value]['items'] as $k => $v){
                    $q1="UPDATE wbc SET blood_bank_id=:bbid WHERE final_packet_id=:v";
                    $wbc->query($q1,[
                        'bbid'=>$bbid,
                        'v'=>$v,
                    ]);
                }
            }
        }

        $pltarr=array('pltAp','pltAn','pltBp','pltBn','pltABp','pltABn','pltOp','pltOn');
        foreach($pltarr as $key => $value){
            if(isset($_SESSION['bld'][$value]['accept'])){
                foreach($_SESSION['bld'][$value]['items'] as $k => $v){
                    $q1="UPDATE platelets SET blood_bank_id=:bbid WHERE final_packet_id=:v";
                    $plt->query($q1,[
                        'bbid'=>$bbid,
                        'v'=>$v,
                    ]);
                }
            }
        }

        $plsmarr=array('plsmAp','plsmAn','plsmBp','plsmBn','plsmABp','plsmABn','plsmOp','plsmOn');
        foreach($plsmarr as $key => $value){
            if(isset($_SESSION['bld'][$value]['accept'])){
                foreach($_SESSION['bld'][$value]['items'] as $k => $v){
                    $q1="UPDATE plasma SET blood_bank_id=:bbid WHERE final_packet_id=:v";
                    $plsm->query($q1,[
                        'bbid'=>$bbid,
                        'v'=>$v,
                    ]);
                }
            }
        }

        $did=$_SESSION['USER']->id;
        $id=$_GET['id'];


            unset($_SESSION['bld']);
            $q1="UPDATE blood_request SET status=1, respond_doc_id=:did WHERE request_id=:id";
            $bldreq=new BLbldreq();
            $bldreq->query($q1,[
                'did'=>$did,
                'id'=>$id,
            ]);

        // $q1="UPDATE blood_request SET status=2, respond_doc_id=$did WHERE request_id=$id";
        // $bldreq=new BLbldreq();
        // $bldreq->query($q1);

        // // redirect('viewbldreqdetails');
        // $this->redirect('viewbldrequests');
        $this->view('sendaccept');

    }

    function index5()
    {
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        if(isset($_SESSION['bld'])){
            unset($_SESSION['bld']);
        }

        // redirect('viewbldreqdetails');
        $this->redirect('viewbldrequests');

    }

    
}