<?php
class Reqbloodform extends Controller
{
    function index($id = '')
    {
        if(count($_POST)>0){

            $bdc=new Bdcreq();
            
            $arr['name'] = $_POST['name'];
            $arr['location'] = $_POST['location'];
            $arr['date'] = $_POST['date'];
            $arr['bloodbank'] = $_POST['bloodbank'];
            $arr['status'] = 1;
            $arr['accrej'] = 1;

            $bdc->insert($arr);

            $this->redirect('main');





        }

        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        
        // $data=$user->where('id', 1);
        $this->view('reqbloodform');//, ['rows' => $data]);
        // $this->view('home');
    }
}