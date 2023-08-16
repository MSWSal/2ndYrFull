
<?php

class AdminBloodbankHome extends Controller
{

    function index($id = '')
    {
        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $bank = new Admin_BloodbankHome();
        $id = $_GET['id'];
        $quary = "SELECT * FROM blood_bank WHERE blood_bank_id = $id";
        $data = $bank->query($quary);

        // if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
        //     $latitude = $_POST['latitude'];
        //     $longitude = $_POST['longitude'];
        //     $update_query = "UPDATE blood_bank SET latitude = $latitude, longitude = $longitude WHERE blood_bank_id = $id";
        //     $bank->query($update_query);
        // }

        if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
            $latitude = $_POST['latitude'];
            $longitude = $_POST['longitude'];
            $update_query = "UPDATE blood_bank SET latitude = $latitude, longitude = $longitude WHERE blood_bank_id = $id";
            $bank->query($update_query);

            // Hide the button using CSS
            echo '<style type="text/css">.but { display: none; }</style>';

            // Redirect to the home page
            // $this->view('adminbloodbankhome', ['rows' => $bank]);

        }

        $this->view('adminbloodbankhome', ['rows' => $data]);
    }





    // function addMapAndRedirectToHome()
    // {
    //     $bank = new Admin_BloodbankHome();
    //     $id = $_GET['id'];
    //     if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
    //         $latitude = $_POST['latitude'];
    //         $longitude = $_POST['longitude'];
    //         $update_query = "UPDATE blood_bank SET latitude = $latitude, longitude = $longitude WHERE blood_bank_id = $id";
    //         $bank->query($update_query);

    //         // Hide the button using CSS
    //         echo '<style type="text/css">.but { display: none; }</style>';

    //         // Redirect to the home page
    //         $this->view('adminbloodbankhome', ['rows' => $bank]);
    //         exit();
    //     }
    // }
}
