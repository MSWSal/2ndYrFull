<?php
class Search extends Controller
{
    public function index($id = '')
    {   
        $campid=$_GET['id'];
        $campidstr=(string)$campid;
        // echo $campidstr;
        $donor = new User();
        // $guest = new Guest_donor();
        if (isset($_POST['name'])) {
            $arr['name'] = $_POST['name'];
            $arr['nic'] = $_POST['nic'];
            $arr['is_registered']=0;
            $donor->insert($arr);   
                  // ===============had to make email null to do this............................
            $this->redirect('search');
        }
        

        
        if (isset($_POST['donor'])) {
            $data1 = $donor->where('nic', $_POST['donor']);
            if ($data1) {
                $data = $data1[0];
                $str=$campid."s".$data->id."s";
                $this->redirect("donor_details?id=".$data->id."&campid=".$campid);
            } else {
                $data = 0;
            }
           
            $this->view('search', ['data' => $data]);
        } else {
            $this->view('search');
        }

    }
}
