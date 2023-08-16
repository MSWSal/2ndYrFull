<?php
class News extends Controller
{
    function index($id = '')
    {

        $cp=new Community_post();
        $qry="select * from news order by news_id desc limit 8";
        $data=$cp->query($qry);

        // print_r($data);


        
        $this->view('User/news',['data'=>$data]);
        
    }
}