<?php

/**
 * User model
 */

class Admin_StaffUsers extends Model
{
    protected $table = "doctor";

    protected $allowedColumns = ['id', 'email', 'nic', 'name', 'telephone', 'medical_id', 'password', 'blood_bank_id', 'admin_id', 'city', 'street', 'house_no', 'status'];
   
}