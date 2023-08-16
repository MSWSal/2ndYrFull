<?php

class AdminReport1 extends Controller
{

    function index($id = '')
    {

        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $num4 = new Admin_Home();
        $quary4 = "SELECT SUM(amount) AS RBC FROM rbc;";
        $data4 = $num4->query($quary4);

        $num5 = new Admin_Home();
        $quary5 = "SELECT SUM(amount) AS WBC FROM wbc";
        $data5 = $num5->query($quary5);

        $num6 = new Admin_Home();
        $quary6 = "SELECT SUM(amount) AS PLATE FROM platelets";
        $data6 = $num6->query($quary6);

        $num7 = new Admin_Home();
        $quary7 = "SELECT SUM(amount) AS PLASMA FROM plasma";
        $data7 = $num7->query($quary7);



        $num9 = new Admin_Home();
        $quary9 = "SELECT COUNT(*) AS BDC FROM blood_donation_camp WHERE date >= DATE_SUB(NOW(), INTERVAL 30 DAY)";
        $data9 = $num9->query($quary9);

        $num10 = new Admin_Home();
        // $quary10 = "SELECT SUM(total)
        //             FROM (
        //             SELECT SUM(rbc.amount) + COUNT(defect.defect_id) AS total
        //             FROM rbc
        //             JOIN defect ON rbc.donor_id = defect.donor_id
        //             GROUP BY rbc.donor_id
        //             ) AS combined_result";
        $quary10 = "SELECT COUNT(*) AS DON FROM donor";
        // $quary10 = "SELECT COUNT(*) AS DON FROM donor WHERE date >= DATE_SUB(NOW(), INTERVAL 30 DAY";
        $data10 = $num10->query($quary10);
        // $total_sum = implode('', $data10[0]);
        // echo $total_sum;

        $num11 = new Admin_Home();
        $quary11 = "SELECT COUNT(*) AS BDC FROM blood_donation_camp";
        $data11 = $num11->query($quary11);





        $num3 = new Admin_Home();
        $quary3 = "SELECT COUNT(*) AS HIV FROM defect WHERE reason='HIV'";
        $data3 = $num3->query($quary3);

        $num15 = new Admin_Home();
        $quary15 = "SELECT COUNT(*) AS Other FROM defect WHERE reason='Other'";
        $data15 = $num15->query($quary15);

        $num16 = new Admin_Home();
        $quary16 = "SELECT COUNT(*) AS Dengue FROM defect WHERE reason='Dengue'";
        $data16 = $num16->query($quary16);

        $num12 = new Admin_Home();
        $quary12 = "SELECT COUNT(*) AS Thalasemea FROM defect WHERE reason='Thalasemea'";
        $data12 = $num12->query($quary12);

        $num13 = new Admin_Home();
        $quary13 = "SELECT COUNT(*) AS Hemophilia FROM defect WHERE reason='Hemophilia'";
        $data13 = $num13->query($quary13);

        $num14 = new Admin_Home();
        $quary14 = "SELECT COUNT(*) AS Malaria FROM defect WHERE reason='Malaria'";
        $data14 = $num14->query($quary14);





        $this->view('adminreport1', [
            'rows4' => $data4,
            'rows5' => $data5,
            'rows6' => $data6,
            'rows7' => $data7,
            'rows3' => $data3,
            'rows9' => $data9,
            'rows10' => $data10,
            'rows11' => $data11,
            'rows12' => $data12,
            'rows13' => $data13,
            'rows14' => $data14,
            'rows15' => $data15,
            'rows16' => $data16
        ]);
    }
}
