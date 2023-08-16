

<?php

class AdminReplyBugs extends Controller
{

    function index()
    {

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $bug = new Admin_ReplyBugs(); 


        $id = $_GET['id'];

        $data = $bug->where('bug_id', $id);
        $quary = "SELECT bugs.*, donor.name
                  FROM bugs
                  INNER JOIN donor on bugs.donor_id = donor.id
                  WHERE bugs.bug_id = $id ORDER BY bugs.bug_id ";
        $data = $bug->query($quary);


        // $this->redirect('adminbugs');
        //   print_r($data);

        if (count($_POST) > 0) {
            $arr['reply'] = $_POST['reply'];
            $bug->update_reply($id, $arr);
            $this->redirect('adminbugs');
            $errors = array();
        }

        $this->view('adminreplybugs', ['rows'=>$data[0]]);

    }


}