<?php

/**
 * User model
 */

class Admin_DonationCamps extends Model
{

    protected $table1 = "blood_donation_camp";

    public function paginall($fpage, $off)
    {
        $sql = "select * from $this->table1 limit $fpage,$off";

        return $this->query($sql);
    }
    
    protected $table = "blood_donation_camp";

    protected $allowedColumns = ['camp_id', 'address', 'date', 'camp_img', 'latitude', 'longitude', 'description', 'start_time', 'rating', 'doctor_id', 'camp_name', 'blood_bank_id'];
}
