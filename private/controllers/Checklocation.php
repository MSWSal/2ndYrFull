<?php
class Checklocation extends Controller
{
    function index($id = '')
    {


        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $def = new Defect();
        if (isset($_GET['check']) && $_GET['check'] == 'true') {
            $lat = $_GET['latitude'];
            $lng = $_GET['longitude'];

            $q1 = "select  dc.latitude,dc.longitude , def.type from raw_blood_packet bp inner join blood_donation_camp dc on bp.blood_donation_camp_id = dc.camp_id inner join defect def on 
            bp.donor_id= def.donor_id where bp.status=3 ";
            $res = $def->query($q1);
            $regArr = array();

            foreach ($res as $obj) {
                $regArr[] = array(
                    'latitude' => $obj->latitude,
                    'longitude' => $obj->longitude,
                    'type' => $obj->type
                );
            }
            $data=$def->findBranchesWithin10Km($lat,$lng,$regArr);
            $checkedarr=array(0,0,0,0,0,0);
            $e0=0;
            $e1=0;
            $e2=0;
            $e3=0;
            $e4=0;
            $e5=0;
            foreach ($data as $element) {
               
                // print("/n");
                if ($element == 0) {
                    $checkedarr[$e0]++;
                    print("0");
                }
                if ($element == 1) {
                    $checkedarr[$element]++;               }
                if ($element == 2) {
                    $checkedarr[$element]++;               }
                if ($element == 3) {
                    $checkedarr[$element]++;                }
                if ($element == 4) {
                    $checkedarr[$element]++;                }
                if ($element == 5) {
                    $checkedarr[$element]++;                }
               

            }

            $this->view('checkedlocationdetails2',['checkedarr'=>$checkedarr]);
            

        }



        else
        $this->view('checkcamplocation2');
    }
}