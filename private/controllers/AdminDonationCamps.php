

<?php

class AdminDonationCamps extends Controller
{

    function index($id = '')
    {
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $num = new Admin_DonationCamps();
        $data = $num->findAll();

        $data2 = array();

        $essentials = array();
        $resultsperpage = 15;

        $usrs = new Admin_DonationCamps();
        $quarry = "SELECT blood_donation_camp.*, blood_bank.name AS blood_bank_name
        FROM blood_donation_camp
        LEFT JOIN blood_bank 
        ON blood_donation_camp.blood_bank_id = blood_bank.blood_bank_id;
        
                    ";
        $data = $usrs->query($quarry);

        if ($data != NULL) {
            $numofresults = count($data);
            $numofpages = ceil($numofresults / $resultsperpage);

            $essentials['noofpgs'] = $numofpages;

            // echo $numofpages;

            if (!isset($_GET['page']) or $_GET['page'] > $numofpages or $_GET['page'] < 1) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }

            $thispagefirstres = ($page - 1) * $resultsperpage;

            // $sql="select * from bdcreq order by id desc limit $thispagefirstres,$resultsperpage";

            $data2 = $usrs->paginall($thispagefirstres, $resultsperpage);
        }



        // $bdc = $this->load_model('Bdcreq');

        // $arr['fullname'] = "harini silva";
        // $arr['email'] = "hello@gmail.com";
        // $arr['nic'] = "200016206040";
        // $arr['mobile'] = "0703802708";
        // $arr['city'] = "auckland";
        // $arr['address'] = "1/90 mahiyangana road badulla";
        // $arr['password'] = "$2y$10$.3UNYspSG3a59vZNJpqFPORLv8QUbmRKNOSkp3YDiYkhS.NdsiQ96";
        // $arr['profile_img'] = "";
        // $bs = new Addblood(); //model instantiated
        // $data2 = $bs->findAll();

        // $user->insert($arr);
        // $user->delete(25);
        // $usrs = new Sysusers(); //model instantiated
        // $data = $usrs->findAll();

        // $data=$user->where('id', 1);
        $this->view('admindonationcamps', ['rows1' => $data2, 'ess' => $essentials,'rows'=>$data]);
        //  $this->redirect('404');
        // $this->view('home');
    }

    function index2()
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
            $usrs1 = new Admin_DonationCamps();

            $stm = "SELECT * from blood_donation_camp where camp_name like '$text%'";


            $results = $usrs1->query($stm);

            echo json_encode($results);
            // $data = $user->query($query);
            // echo (json_encode($data));
        }
    }
    


    // $this->view('admindonationcamps', ['rows'=>$data]);

}


