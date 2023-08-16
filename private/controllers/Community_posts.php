<?php
class Community_posts extends Controller
{
    public function index()
    {
        $user = new User();
        $image = new Image();
        $post = new Community_post();
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $data = $user->where('id', Auth::getid());
        if (count($_POST) > 0) {
            // print_r($_POST);
            if ($filename = $image->pic_validate()) {
                $id = Auth::getid();

                $_POST['image'] = $filename;

            }
            $arr['image'] = $_POST['image'];
            $arr['title'] = $_POST['title'];
            $arr['date']=date('Y-m-d');
            $arr['description'] = $_POST['description'];
            if ($_SESSION['USER']->role == "Donor") {
                $arr['donor_id'] = Auth::getid();
            } else if ($_SESSION['USER']->role == "PHI") {
                $arr['phi_id'] = Auth::getid();
            } else if ($_SESSION['USER']->role == "Doctor") {
                $arr['doctor_id'] = Auth::getid();
            }
            $post->insert($arr);
            $this->redirect('newsfeed');
            // header("Location:community_posts");
        }
        $data = $data[0];

        $this->view('User/community_post', ['rows' => $data]);
    }

}