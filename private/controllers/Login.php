<?php
class Login extends Controller
{
    function index()
    {

        $errors = array();
        $correct=1;
        if (count($_POST) > 0) {
            $docuser = new BLDoc();
            $phiuser = new BLPHI();
            $labuser = new BLLab();
            $adminuser=new BLadmin();
            $user = new User();


            if ($row = $user->where('email', $_POST['email'])) {
                $row = $row[0];

                if (password_verify($_POST['password'], $row->password)) {
                    Auth::authenticate($row);
                    $_SESSION['USER']->role="Donor";
                    $this->redirect('home');
                }
                else{
                    $correct=0;
                }
            }
            else if ($row = $user->where('nic', $_POST['email'])) {
                $row = $row[0];

                if (password_verify($_POST['password'], $row->password)) {
                    Auth::authenticate($row);
                    $_SESSION['USER']->role="Donor";
                    $this->redirect('home');
                }
                else{
                    $correct=false;
                }
            }

           
            else if ($row = $docuser->where('email', $_POST['email'])) {
                $row = $row[0];
               

                if (password_verify($_POST['password'], $row->password)) {
                    
                     Auth::authenticate($row);
                     $_SESSION['USER']->role="Doctor";

                    $this->redirect('dashboard');
                } else{
                    $correct=false;
                }
            } 

            else if ($row = $phiuser->where('email', $_POST['email'])) {
                $row = $row[0];
                

                if (password_verify($_POST['password'], $row->password)) {
                    
                     Auth::authenticate($row);
                     $_SESSION['USER']->role="PHI";

                    $this->redirect('dashboard');
                } else{
                    $correct=false;
                }
            }
             else if ($row = $adminuser->where('email', $_POST['email'])) {
                $row = $row[0];
                

                if (password_verify($_POST['password'], $row->password)) {
                    
                     Auth::authenticate($row);
                     $_SESSION['USER']->role="Admin";

                    $this->redirect('admindashboard');
                } else{
                    $correct=false;
                }
            } 

            else if ($row = $labuser->where('email', $_POST['email'])) {
                $row = $row[0];
               

                if (password_verify($_POST['password'], $row->password)) {
                    
                     Auth::authenticate($row);
                     $_SESSION['USER']->role="Lab";

                    $this->redirect('dashboard');
                } else{
                    $correct=0;
                }
            }else{
                $correct=0;
            } 




        }
        $err=array();
        $err['iscorrect']=$correct;
        $this->view('login',['err'=>$err]);
    }
}