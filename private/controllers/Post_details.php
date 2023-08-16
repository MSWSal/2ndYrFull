<?php
class Post_details extends Controller
{
    public function index()
    {
        $post = new Community_post();
        $id = $_GET['id'];
        $query="select doctor_id,phi_id,donor_id from community_post where post_id=:id";
        $user=$post->query($query,['id'=>$id]);
        $user=$user[0];
        if($user->donor_id!=0){
            $query="select donor.*, community_post.* from donor inner join community_post on donor.id = community_post.donor_id where community_post.post_id=:id";
            $arr=['id'=>$id];
            $data=$post->query($query, $arr);
            $data=$data[0];
        }
        else if($user->doctor_id!=0){
            $query="select doctor.*, community_post.* from doctor inner join community_post on doctor.id = community_post.doctor_id where community_post.post_id=:id";
            $arr=['id'=>$id];
            $data=$post->query($query, $arr);
            $data=$data[0];
        }
        else if($user->phi_id!=0){
            $query="select phi.*, community_post.* from phi inner join community_post on phi.id = community_post.phi_id where community_post.post_id=:id";
            $arr=['id'=>$id];
            $data=$post->query($query, $arr);
            $data=$data[0];
        }
        $this->view('User/post_details', ['data'=>$data]);

    }

}
