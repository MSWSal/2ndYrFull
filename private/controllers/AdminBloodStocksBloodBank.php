<?php

class AdminBloodStocksBloodBank extends Controller
{

    function index($id = '')
    {
        if(!Auth::logged_in()){
            $this->redirect('login');
        }

        $bank = new Admin_BloodStocksBloodBank();
        $id = $_GET['id'];
        // $data = $bank->where('blood_bank_id', $id);


        $quary = "SELECT name FROM blood_bank WHERE blood_bank_id = $id";
        $data = $bank->query($quary);
        // print_r($data);


        // Red Blood Cells
        $quary1 = "SELECT IFNULL(SUM(amount), 0) AS Ap_amount FROM rbc WHERE blood_group ='A+' AND blood_bank_id = $id";
        $data1 = $bank->query($quary1);

        $quary2 = "SELECT IFNULL(SUM(amount), 0) AS An_amount FROM rbc WHERE blood_group ='A-' AND blood_bank_id = $id";
        $data2 = $bank->query($quary2);

        $quary3 = "SELECT IFNULL(SUM(amount), 0) AS Bp_amount FROM rbc WHERE blood_group ='B+' AND blood_bank_id = $id";
        $data3 = $bank->query($quary3);

        $quary4 = "SELECT IFNULL(SUM(amount), 0) AS Bn_amount FROM rbc WHERE blood_group ='B-' AND blood_bank_id = $id";
        $data4 = $bank->query($quary4);

        $quary5 = "SELECT IFNULL(SUM(amount), 0) AS ABp_amount FROM rbc WHERE blood_group ='AB+' AND blood_bank_id = $id";
        $data5 = $bank->query($quary5);

        $quary6 = "SELECT IFNULL(SUM(amount), 0) AS ABn_amount FROM rbc WHERE blood_group ='AB-' AND blood_bank_id = $id";
        $data6 = $bank->query($quary6);

        $quary7 = "SELECT IFNULL(SUM(amount), 0) AS Op_amount FROM rbc WHERE blood_group ='O+' AND blood_bank_id = $id";
        $data7 = $bank->query($quary7);

        $quary8 = "SELECT IFNULL(SUM(amount), 0) AS On_amount FROM rbc WHERE blood_group ='O-' AND blood_bank_id = $id";
        $data8 = $bank->query($quary8);



        // White Blood Cells
        $quary9 = "SELECT IFNULL(SUM(amount), 0) AS Ap_amount FROM wbc WHERE blood_group ='A+' AND blood_bank_id = $id";
        $data9 = $bank->query($quary9);

        $quary10 = "SELECT IFNULL(SUM(amount), 0) AS An_amount FROM wbc WHERE blood_group ='A-' AND blood_bank_id = $id";
        $data10 = $bank->query($quary10);

        $quary11 = "SELECT IFNULL(SUM(amount), 0) AS Bp_amount FROM wbc WHERE blood_group ='B+' AND blood_bank_id = $id";
        $data11 = $bank->query($quary11);

        $quary12 = "SELECT IFNULL(SUM(amount), 0) AS Bn_amount FROM wbc WHERE blood_group ='B-' AND blood_bank_id = $id";
        $data12 = $bank->query($quary12);

        $quary13 = "SELECT IFNULL(SUM(amount), 0) AS ABp_amount FROM wbc WHERE blood_group ='AB+' AND blood_bank_id = $id";
        $data13 = $bank->query($quary13);

        $quary14 = "SELECT IFNULL(SUM(amount), 0) AS ABn_amount FROM wbc WHERE blood_group ='AB-' AND blood_bank_id = $id";
        $data14 = $bank->query($quary14);

        $quary15 = "SELECT IFNULL(SUM(amount), 0) AS Op_amount FROM wbc WHERE blood_group ='O+' AND blood_bank_id = $id";
        $data15 = $bank->query($quary15);

        $quary16 = "SELECT IFNULL(SUM(amount), 0) AS On_amount FROM wbc WHERE blood_group ='O-' AND blood_bank_id = $id";
        $data16 = $bank->query($quary16);



        // Plasma Cells
        $quary17 = "SELECT IFNULL(SUM(amount), 0) AS Ap_amount FROM plasma WHERE blood_group ='A+' AND blood_bank_id = $id";
        $data17 = $bank->query($quary17);

        $quary18 = "SELECT IFNULL(SUM(amount), 0) AS An_amount FROM plasma WHERE blood_group ='A-' AND blood_bank_id = $id";
        $data18 = $bank->query($quary18);

        $quary19 = "SELECT IFNULL(SUM(amount), 0) AS Bp_amount FROM plasma WHERE blood_group ='B+' AND blood_bank_id = $id";
        $data19 = $bank->query($quary19);

        $quary20 = "SELECT IFNULL(SUM(amount), 0) AS Bn_amount FROM plasma WHERE blood_group ='B-' AND blood_bank_id = $id";
        $data20 = $bank->query($quary20);

        $quary21 = "SELECT IFNULL(SUM(amount), 0) AS ABp_amount FROM plasma WHERE blood_group ='AB+' AND blood_bank_id = $id";
        $data21 = $bank->query($quary21);

        $quary22 = "SELECT IFNULL(SUM(amount), 0) AS ABn_amount FROM plasma WHERE blood_group ='AB-' AND blood_bank_id = $id";
        $data22 = $bank->query($quary22);

        $quary23 = "SELECT IFNULL(SUM(amount), 0) AS Op_amount FROM plasma WHERE blood_group ='O+' AND blood_bank_id = $id";
        $data23 = $bank->query($quary23);

        $quary24 = "SELECT IFNULL(SUM(amount), 0) AS On_amount FROM plasma WHERE blood_group ='O-' AND blood_bank_id = $id";
        $data24 = $bank->query($quary24);



        // Platelets Cells
        $quary25 = "SELECT IFNULL(SUM(amount), 0) AS Ap_amount FROM platelets WHERE blood_group ='A+' AND blood_bank_id = $id";
        $data25 = $bank->query($quary25);

        $quary26 = "SELECT IFNULL(SUM(amount), 0) AS An_amount FROM platelets WHERE blood_group ='A-' AND blood_bank_id = $id";
        $data26 = $bank->query($quary26);

        $quary27 = "SELECT IFNULL(SUM(amount), 0) AS Bp_amount FROM platelets WHERE blood_group ='B+' AND blood_bank_id = $id";
        $data27 = $bank->query($quary27);

        $quary28 = "SELECT IFNULL(SUM(amount), 0) AS Bn_amount FROM platelets WHERE blood_group ='B-' AND blood_bank_id = $id";
        $data28 = $bank->query($quary28);

        $quary29 = "SELECT IFNULL(SUM(amount), 0) AS ABp_amount FROM platelets WHERE blood_group ='AB+' AND blood_bank_id = $id";
        $data29 = $bank->query($quary29);

        $quary30 = "SELECT IFNULL(SUM(amount), 0) AS ABn_amount FROM platelets WHERE blood_group ='AB-' AND blood_bank_id = $id";
        $data30 = $bank->query($quary30);

        $quary31 = "SELECT IFNULL(SUM(amount), 0) AS Op_amount FROM platelets WHERE blood_group ='O+' AND blood_bank_id = $id";
        $data31 = $bank->query($quary31);

        $quary32 = "SELECT IFNULL(SUM(amount), 0) AS On_amount FROM platelets WHERE blood_group ='O-' AND blood_bank_id = $id";
        $data32 = $bank->query($quary32);

        // print_r($data2);

        // $quary10 = "SELECT SUM(amount),blood_group FROM rbc GROUP BY blood_group";
        // $data10 = $bank->query($quary10);


        // print_r($data10);

        // $this->view('adminbloodstocksbloodbank', ['rows' => $data1]);

        $this->view('adminbloodstocksbloodbank', [
            'rows' => $data,
            'rows1' => $data1,
            'rows2' => $data2,
            'rows3' => $data3,
            'rows4' => $data4,
            'rows5' => $data5,
            'rows6' => $data6,
            'rows7' => $data7,
            'rows8' => $data8,
            'rows9' => $data9,
            'rows10' => $data10,
            'rows11' => $data11,
            'rows12' => $data12,
            'rows13' => $data13,
            'rows14' => $data14,
            'rows15' => $data15,
            'rows16' => $data16,
            'rows17' => $data17,
            'rows18' => $data18,
            'rows19' => $data19,
            'rows20' => $data20,
            'rows21' => $data21,
            'rows22' => $data22,
            'rows23' => $data23,
            'rows24' => $data24,
            'rows25' => $data25,
            'rows26' => $data26,
            'rows27' => $data27,
            'rows28' => $data28,
            'rows29' => $data29,
            'rows30' => $data30,
            'rows31' => $data31,
            'rows32' => $data32



        ]);
    }
}


