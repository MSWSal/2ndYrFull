<?php
class Newsfeed extends Controller
{
    function index()
    {
        $post=new Community_post();
        if(isset($_GET['id'])){
            $this->view('post_details');
        }
        $query="SELECT  community_post.post_id,community_post.title, community_post.image,community_post.date,community_post.description ,donor.name 
        as name FROM community_post
        INNER JOIN donor ON community_post.donor_id = donor.id  order by community_post.date desc";
        $data1=$post->query($query);

        $query="SELECT community_post.title, community_post.image,community_post.date,community_post.description ,doctor.name 
        as name FROM community_post
        INNER JOIN doctor ON community_post.doctor_id = doctor.id";
        $data2=$post->query($query);

        $query="SELECT community_post.title, community_post.image,community_post.date,community_post.description ,phi.name 
        as name FROM community_post
        INNER JOIN phi ON community_post.phi_id = phi.id";
        $data3=$post->query($query);

        $this->view('User/newsfeed',['data1'=>$data1,'data2'=>$data2,'data3'=>$data3]);

       

    }


}