
<?php

class AdminPublicUsers extends Controller
{

    function index()
    {

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $public = new Admin_PublicUsers();
        // $query = "SELECT * FROM donor ";
        $query = "SELECT donor.*, defect.reason
                    FROM donor
                    LEFT JOIN defect
                    ON donor.id = defect.donor_id ";

        $data = $public->query($query);





        // $query1 = "SELECT * FROM defect ";
        // $data = $public->query($query1);

        function BDefect($is_defect)
        {
            // If $is_defect is equal to 1, return true. Otherwise, return false.
            return $is_defect == 1 ? true : false;
        }



        // print_r($data);

        $this->view('adminpublicusers', ['rows' => $data]);
    }


    function index1()
    {
        if (count($_POST) > 0) {

            $text = $_POST['text'];
            $text = addslashes($text);

            // $str="mysql:host=localhost;dbname=bloodlink";

            // try{
            //     $con= new PDO($str,"root","");

            // }catch(PDOException $e){
            //     die($e->getmessage());
            // }
            // $don=new BLDonor();
            $usrs1 = new Admin_PublicUsers();

            $stm = "SELECT * FROM donor where name like '$text%'";


            $results = $usrs1->query($stm);

            echo json_encode($results);
            // $data = $user->query($query);
            // echo (json_encode($data));
        }
    }
}
