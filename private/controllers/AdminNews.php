<?php

class AdminNews extends Controller
{
    function index($id = '')
    {
        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        
        $news = new Admin_News();
        $quary = "SELECT * FROM news ";
        $data = $news->query($quary);


        $user = new Admin_News();
        if (count($_POST) > 0 ) {
            $user->insert($_POST);
            $this->redirect('adminnews');
            return;
        }


        // $id = $_GET['id'];
        // $query1 = "SELECT * FROM news where news_id = $id";
        // $data1 = $news->query($query1);









        $this->view('adminnews', ['rows' => $data]);
    }
}
