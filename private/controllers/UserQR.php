<?php
class UserQR extends Controller
{
    function index($id='')
    {


        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $id=Auth::getid();

        $qr=new QR();
        $qr->DownloaduserQR($id);



       
        
        // print_r([$data]);
        // $this->view('mycamprequests');


    }
}
