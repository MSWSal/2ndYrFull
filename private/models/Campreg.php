<?php

class Campreg extends Model
{
    protected $table = "register";




    protected $allowedColumns = ['reg_id', 'donor_id', 'camp_id'];

    public function validate($DATA)
    {

        $this->errors = array();



        if (!(filter_var($DATA["email"], FILTER_VALIDATE_EMAIL))) {
            $this->errors[] = ("Valid email is required");
        }

        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }
    public function isEligible($lastDonated, $isbanned)
    {
        $inputDate = new DateTime($lastDonated);
        $daysAgo90 = (new DateTime())->modify('-90 days');
        
        // check if input date is more than 90 days ago
        if ($inputDate < $daysAgo90 && $isbanned) {
           return true;
        } else {
            return false;
        }


    }




}
?>