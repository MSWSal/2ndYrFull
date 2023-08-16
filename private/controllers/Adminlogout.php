<?php
class Adminlogout extends Controller
{
    function index($id = '')
    {
        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        Auth::logout();
        $this->redirect('adminlogin');
        
            

        
    }
}