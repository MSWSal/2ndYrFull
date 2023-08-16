<?php
class Reportui3 extends Controller
{
    function index($id = '')
    {


      
        $id=$_GET['id'];
        $def=new BLDefect();
        $bb=new BLBloodbank();
        $doc=new BLDoc();
        $don=new BLDonor();

        $defdata=$def->where("defect_id",$id);
        $defdata=$defdata[0];

        $did=$defdata->doctor_id;
        $donid=$defdata->donor_id;
        
        $docdata=$doc->where("id",$did);
        $docdata=$docdata[0];

        $dondata=$don->where("id",$donid);
        $dondata=$dondata[0];

        $bbid=$_SESSION['USER']->blood_bank_id;
        $bbdata=$bb->where("blood_bank_id",$bbid);
        $bbdata=$bbdata[0];



        

        

        $this->view('reportui3',['doc'=>$docdata,'bb'=>$bbdata,'don'=>$dondata,'def'=>$defdata]);

    }
}