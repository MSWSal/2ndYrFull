<?php

class AdminAddBloodBank extends Controller
{

    function index()
    {
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $user = new Admin_Home();
        if (count($_POST) > 0) {
            $user->insert($_POST);
            $this->redirect('adminhome');
            $errors = array();
        }


        $this->view('adminaddbloodbank'); 

    }
}