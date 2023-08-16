<?php
class Change_password extends Controller
{
    public function index()
    {
        if (isset($_POST['password'])) {
            
            if($_POST['password'] != $_POST['password_check']){
                echo ("Passwords do not match");
            }
            else{
            $user=new User();
         
            $email = $_SESSION['email'];
            if($user->where('email', $email)){
                $arr['password']=password_hash($_POST["password"],PASSWORD_DEFAULT);
                $data=$user->where('email',$email);
                $user->update($data[0]->id, $arr);
            }
            
            $this->redirect('login');
            }
          
        }
        $this->view('change_password');
    }
}