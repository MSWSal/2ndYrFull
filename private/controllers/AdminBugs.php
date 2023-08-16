
<?php

class AdminBugs extends Controller
{

    function index()
    {

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $bug = new Admin_Bugs(); 
        // $quary = "SELECT * FROM bugs";

        $quary = "SELECT bugs.*, donor.name
                FROM bugs
                INNER JOIN donor on bugs.donor_id = donor.id
                ORDER BY bugs.bug_id ";

        $data = $bug->query($quary);
        
        // print_r($data);

        $this->view('adminbugs', ['rows'=>$data]);

    }


}