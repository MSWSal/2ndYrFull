<?php
class Search extends Controller
{
    public function index()
    {
        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $this->view('search');

    }
    public function data()
    {
        $user = new Admin_PublicUsers();

        if (count($_POST) > 0) {

            $text = $_POST['text'];
            $query = "SELECT * FROM donor where id like '$text%' OR name like '$text%' OR concat(id+' '+name) like '$text%'";
            $data = $user->query($query);
            echo (json_encode($data));
        }
    }

}
