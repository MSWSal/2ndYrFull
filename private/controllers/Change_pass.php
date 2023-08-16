<?php
class Change_pass extends Controller
{
    public function index()
    {
        $user = new User();

        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $data = $user->where('id', Auth::getid());

        if (isset($_POST['current_pass'])) {

            // print_r($_POST);

            if (!password_verify($_POST['current_pass'], $data[0]->password)) {
                echo ('current password is incorrect!');
            } else if ($_POST['new_pass'] != $_POST['re_enter_pass']) {
                echo ("Passwords do not match!");
            } else if (strlen($_POST["new_pass"]) < 8) {
                echo ("Password must be at least 8 characters");
            } else if (!preg_match("/[a-z]/i", $_POST["new_pass"])) {
                echo ("Password must contain at least one letter");
            } else if (!preg_match("/[0-9]/", $_POST["new_pass"])) {
                echo ("Password must contain at least one number");
            } else {
                $arr['password'] = password_hash($_POST["new_pass"], PASSWORD_DEFAULT);
                $user->update(Auth::getid(), $arr);
                $this->redirect('profile');
            }

        }

        $this->view('change_pass');
    }

}