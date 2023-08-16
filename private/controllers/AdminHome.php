<?php

class AdminHome extends Controller
{

    function index($id = '')
    {
        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $news = new Admin_Home();
        $query = "SELECT * FROM blood_bank";
        $data7 = $news->query($query);


        $user = new Admin_Home();
        if (isset($_POST['editForm'])) {
            $id = $_POST['blood_bank_id'];
            unset($_POST['blood_bank_id']);
            unset($_POST['editForm']);
            print_r($_POST);


            $user->update2($id, $_POST);
            $this->redirect('adminhome');

            // return;
        } else if (count($_POST) > 0) {
            $user->insert($_POST);
            $this->redirect('adminhome');
            return;
        }

        // $news = new Admin_Home();


        $this->view('adminhome', ['rows3' => $data7]);
    }



    function index1()
    {
        if (count($_POST) > 0) {

            $text = $_POST['text'];
            $text = addslashes($text);

            // $str="mysql:host=localhost;dbname=bloodlink";

            // try{
            //     $con= new PDO($str,"root","");

            // }catch(PDOException $e){
            //     die($e->getmessage());
            // }
            // $don=new BLDonor();
            $usrs1 = new Admin_Home();

            $stm = "SELECT * FROM blood_bank where name like '$text%'";


            $results = $usrs1->query($stm);

            echo json_encode($results);
            // $data = $user->query($query);
            // echo (json_encode($data));
        }
    }


}


