<?php
class sendReminder extends Controller
{
    function index($id = '')
    {


        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $mail = new Mail();

        $user = $this->load_model('User');

       $camp=new Camp();
        $today = new DateTime(); // create a new DateTime object for today's date
        $two_days_later = $today->modify('+2 days'); // modify the date by adding 2 days
        $two_days_later = $two_days_later->format('Y-m-d');
        $arr=array();
        $arr['date'] = $two_days_later;
        $qry1 = "select camp_id,camp_name,street,house_no,city from blood_donation_camp where date=:date";
        
        $campaings = $camp->query($qry1,$arr);
        foreach($campaings as $c){
            $campid=$c->camp_id;
            $arr2=array();
            $arr2['campid'] = $campid;
            $qry2="select d.email from register r inner join donor d on d.id=r.donor_id where r.camp_id=:campid";
            $emails=$camp->query($qry2,$arr2);
            print_r($emails);
            foreach($emails as $em){
                $recipient=$em->email;
                $subject="Reminder about registered campaign on ".$two_days_later;
                $message="Dear Donor , \nYou have registered for the donation camp\"  ".$c->camp_name." which is to be \nheld at  NO:".$c->house_no." ".$c->street." ".$c->city.".\n Thank You !";
                $mail->send_mail("malindupasan@gmail.com",$subject,$message);
            }


        }


        // print_r($campaings);
        // $mail->send_mail("malindupasan@gmail.com", "REminder about donation camp", "hello you registered to the donation camp which is to be help on ...");





        $this->view('sendReq');

    }
}