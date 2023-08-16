
<?php

/**
 * User model
 */

class Admin_BloodbankHome extends Model
{
    protected $table = "blood_bank";

    protected $allowedColumns = ['blood_bank_id', 'name', 'city', 'street', 'house_no', 'telephone', 'latitude', 'longitude', 'admin_id', 'province', 'district'];
   
}