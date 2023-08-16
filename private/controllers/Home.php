<?php
class Home extends Controller
{
    function index($id = '')
    {


        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $cp=new Community_post();
        $qry="select * from community_post order by date desc limit 12";
        $data=$cp->query($qry);
        // $data = $user->where("email", $email);

        // print_r($data);
        
        $this->view('User/home', ['data'=>$data]);
       
    }
}