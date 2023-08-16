<?php

class AdminBloodStocks extends Controller
{

    function index($id = '')
    {
        if(!Auth::logged_in()){
            $this->redirect('login');
        }
        $num = new Admin_Home();
        $quary = "SELECT COUNT(*) AS DON FROM donor";
        $dat = $num->query($quary);


        $num1 = new Admin_Home();
        $quary1 = "SELECT COUNT(*) AS DONA FROM rbc";
        $dat1 = $num1->query($quary1);
        // CURDATE()

        $num2 = new Admin_Home();
        $quary2 = "SELECT COUNT(*) AS CAMP FROM blood_donation_camp";
        $dat2 = $num2->query($quary2);


        $num3 = new Admin_Home();

        $quary3 = "SELECT 
                        b.name, 
                        b.blood_bank_id, 
                        COALESCE(p.plasma_count, 0) as plasma_count,
                        COALESCE(pl.platelets_count, 0) as platelets_count,
                        COALESCE(r.rbc_count, 0) as rbc_count,
                        COALESCE(w.wbc_count, 0) as wbc_count
                    FROM blood_bank b
                    LEFT JOIN (
                        SELECT blood_bank_id, SUM(amount) as plasma_count
                        FROM plasma
                        GROUP BY blood_bank_id
                    ) p ON b.blood_bank_id = p.blood_bank_id
                    LEFT JOIN (
                        SELECT blood_bank_id, SUM(amount) as platelets_count
                        FROM platelets
                        GROUP BY blood_bank_id
                    ) pl ON b.blood_bank_id = pl.blood_bank_id
                    LEFT JOIN (
                        SELECT blood_bank_id, SUM(amount) as rbc_count
                        FROM rbc
                        GROUP BY blood_bank_id
                    ) r ON b.blood_bank_id = r.blood_bank_id
                    LEFT JOIN (
                        SELECT blood_bank_id, SUM(amount) as wbc_count
                        FROM wbc
                        GROUP BY blood_bank_id
                    ) w ON b.blood_bank_id = w.blood_bank_id";
        $dat3 = $num3->query($quary3);

        $rbc = new Rbc(); //model instantiated
        $q1 = "SELECT IFNULL(SUM(amount), 0) AS sum,blood_group FROM rbc where exp_date>CURDATE() GROUP BY blood_group";
        $dat4 = $rbc->query($q1);
        // echo "<pre>";
        // print_r($dat4);

        $wbc = new Wbc(); //model instantiated
        $q2 = "SELECT IFNULL(SUM(amount), 0) AS sum,blood_group FROM wbc GROUP BY blood_group";
        $dat5 = $wbc->query($q2);
        // print_r($dat5);


        $plsm = new Plasma(); //model instantiated
        $q3 = "SELECT IFNULL(SUM(amount), 0) AS sum,blood_group FROM plasma where exp_date>CURDATE() GROUP BY blood_group";
        $dat6 = $plsm->query($q3);
        // print_r($dat6);

        $plt = new Platelettes(); //model instantiated
        $q4 = "SELECT IFNULL(SUM(amount), 0) AS sum,blood_group FROM platelets where exp_date>CURDATE() GROUP BY blood_group";
        $dat7 = $plt->query($q4);
        // print_r($dat7);







        $rbc = new Rbc(); //model instantiated
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM rbc WHERE blood_group='A+'";
        $data1=$rbc->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM rbc WHERE blood_group='A-'";
        $data2=$rbc->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM rbc WHERE blood_group='B+'";
        $data3=$rbc->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM rbc WHERE blood_group='B-'";
        $data4=$rbc->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM rbc WHERE blood_group='AB+'";
        $data5=$rbc->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM rbc WHERE blood_group='AB-'";
        $data6=$rbc->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM rbc WHERE blood_group='O+'";
        $data7=$rbc->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM rbc WHERE blood_group='O-'";
        $data8=$rbc->query($q);
            

            $rbcarray['Ap']=$data1[0]->sum;
            $rbcarray['An']=$data2[0]->sum;
            $rbcarray['Bp']=$data3[0]->sum;
            $rbcarray['Bn']=$data4[0]->sum;
            $rbcarray['ABp']=$data5[0]->sum;
            $rbcarray['ABn']=$data6[0]->sum;
            $rbcarray['Op']=$data7[0]->sum;
            $rbcarray['On']=$data8[0]->sum;

        //     echo "<pre>";
        // print_r($data1);

        $wbc = new Wbc(); //model instantiated

        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM wbc WHERE blood_group='A+'";
        $data1=$wbc->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM wbc WHERE blood_group='A-'";
        $data2=$wbc->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM wbc WHERE blood_group='B+'";
        $data3=$wbc->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM wbc WHERE blood_group='B-'";
        $data4=$wbc->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM wbc WHERE blood_group='AB+'";
        $data5=$wbc->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM wbc WHERE blood_group='AB-'";
        $data6=$wbc->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM wbc WHERE blood_group='O+'";
        $data7=$wbc->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM wbc WHERE blood_group='O-'";
        $data8=$wbc->query($q);
        

        $wbcarray['Ap']=$data1[0]->sum;
        $wbcarray['An']=$data2[0]->sum;
        $wbcarray['Bp']=$data3[0]->sum;
        $wbcarray['Bn']=$data4[0]->sum;
        $wbcarray['ABp']=$data5[0]->sum;
        $wbcarray['ABn']=$data6[0]->sum;
        $wbcarray['Op']=$data7[0]->sum;
        $wbcarray['On']=$data8[0]->sum;

        $plsm = new Plasma(); //model instantiated
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM plasma WHERE blood_group='A+'";
        $data1=$plsm->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM plasma WHERE blood_group='A-'";
        $data2=$plsm->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM plasma WHERE blood_group='B+'";
        $data3=$plsm->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM plasma WHERE blood_group='B-'";
        $data4=$plsm->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM plasma WHERE blood_group='AB+'";
        $data5=$plsm->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM plasma WHERE blood_group='AB-'";
        $data6=$plsm->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM plasma WHERE blood_group='O+'";
        $data7=$plsm->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM plasma WHERE blood_group='O-'";
        $data8=$plsm->query($q);

        $plsmarray['Ap']=$data1[0]->sum;
        $plsmarray['An']=$data2[0]->sum;
        $plsmarray['Bp']=$data3[0]->sum;
        $plsmarray['Bn']=$data4[0]->sum;
        $plsmarray['ABp']=$data5[0]->sum;
        $plsmarray['ABn']=$data6[0]->sum;
        $plsmarray['Op']=$data7[0]->sum;
        $plsmarray['On']=$data8[0]->sum;

        $plt = new Platelettes(); //model instantiated
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM platelets WHERE blood_group='A+'";
        $data1=$plt->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM platelets WHERE blood_group='A-'";
        $data2=$plt->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM platelets WHERE blood_group='B+'";
        $data3=$plt->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM platelets WHERE blood_group='B-'";
        $data4=$plt->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM platelets WHERE blood_group='AB+'";
        $data5=$plt->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM platelets WHERE blood_group='AB-'";
        $data6=$plt->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM platelets WHERE blood_group='O+'";
        $data7=$plt->query($q);
        $q="SELECT IFNULL(SUM(amount),0) AS sum FROM platelets WHERE blood_group='O-'";
        $data8=$plt->query($q);

        $pltarray['Ap']=$data1[0]->sum;
        $pltarray['An']=$data2[0]->sum;
        $pltarray['Bp']=$data3[0]->sum;
        $pltarray['Bn']=$data4[0]->sum;
        $pltarray['ABp']=$data5[0]->sum;
        $pltarray['ABn']=$data6[0]->sum;
        $pltarray['Op']=$data7[0]->sum;
        $pltarray['On']=$data8[0]->sum;











        if ($_SERVER['REQUEST_METHOD'] === 'POST') { 

            $response = array("rbc" => $dat4, "wbc" => $dat5, "plt" => $dat6, "plsm" => $dat7, "rbc" => $rbcarray, "wbc" => $wbcarray,"plt" => $pltarray,"plsm" => $plsmarray);

            echo json_encode($response);
        } else {
            $this->view('adminbloodstocks', ['rows' => $dat, 'rows1' => $dat1, 'rows2' => $dat2, 'rows3' => $dat3]); 

        }
    }
}
