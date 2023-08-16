
<?php

class Admin extends Controller
{

    function index($id = '')
    { 

        $staff = new Admin_Admin();
        $quarry = "SELECT * FROM admin";
        $data = $staff->query($quarry);


        $user  = new Admin_Admin();

        if (isset($_POST['editForm'])) {
            $id = $_POST['id'];
            unset($_POST['id']);
            unset($_POST['editForm']);
            $user->update($id, $_POST);
            $this->redirect('admin');
            return;
        } else if (count($_POST) > 0) {
            $user->insert($_POST);
            $this->redirect('admin');
            $errors = array();

            return;
        }



        $this->view('admin', ['rows' => $data]);
    }



}