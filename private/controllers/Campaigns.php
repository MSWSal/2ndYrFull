<?php
class Campaigns extends Controller
{
    function index($id = '')
    {


        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $flag=array(); //to change the css classes of buttons



        $camp = new Camp();
        $query = "select * from blood_donation_camp where date >= :date";
        // $data = $camp->findAll();
        $date = date("Y-m-d");
        $arr = ['date' => $date];  
        $flag[0]=1; 

        if((isset($_GET['date'])&&strlen($_GET['date']))&&(isset($_GET['find'])&&strlen($_GET['find']))){
            $find = $_GET['find'] . '%';
            $query = "select * from blood_donation_camp where (camp_name like :camp_name) &&  date = :date";
            $arr['date'] = $_GET['date'];
            $arr['camp_name'] = $find;
        } else {



            if (isset($_GET['find']) && strlen($_GET['find'])) {
                $find = $_GET['find'] . '%';
                $query = "select * from blood_donation_camp where (camp_name like :camp_name) &&  date >= :date";
                $arr['camp_name'] = $find;



            }
            if (isset($_GET['date']) && strlen($_GET['date'])) {
                $query = "select * from blood_donation_camp where date = :date";
                $arr['date'] = $_GET['date'];
            }
        }


        if (isset($_GET['prog'])) {
            
            $query = "select * from blood_donation_camp where date = :date ";
            $flag[0]=0;

        }

        if (isset($_GET['mycamps'])) {

            $id=AUTH::getid(); //AUTH::getNIC();
            $query = "select * from blood_donation_camp where  donor_id = :id ";
            $arr = ['id' => $id];
            $flag[0]=2;

        }
        // $query = "select * from campaign where (camp_name like 'd%') &&  date >= 2023-01-10";

        $data = $camp->query($query,$arr);
        
        // print_r([$data]);
        $this->view('User/campaigns', ['data'=>$data,'flag'=>$flag]);


    }
}