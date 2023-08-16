
<?php

class AdminPublicUsersProfile extends Controller
{

    function index($id = '')
    {
        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $bank = new Admin_PublicUsersProfile();
        $id = $_GET['id'];
        $quary = "SELECT * FROM donor WHERE id = $id";
        $data = $bank->query($quary);


        $this->view('adminpublicusersprofile', ['rows' => $data]);

    }
}