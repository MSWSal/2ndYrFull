<?php
class Signup extends Controller
{
    function index()
    {

        $errors = array();
        if (count($_POST) > 0) {
            $errors = array();

            // $user = $this->load_model('User');
            $user=new User();
            if ($user->validate($_POST)) {
                
                $age=date("Y")-substr($_POST['nic'],0,4);

                $_POST['age']=$age;
                
                $_POST['is_registered']=1;
                $user->insert($_POST);


                $this->redirect('login');
            } else {
                //errors
                $errors = $user->errors;
            }
        }


        $this->view('signup', [
            'errors' => $errors, ]);




    }
}