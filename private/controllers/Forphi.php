<?php
class Forphi extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        

        
        $this->view('forphi');
       
    }
}