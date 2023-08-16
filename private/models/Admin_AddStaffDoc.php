<?php

/**
 * User model
 */

class Admin_AddStaffDoc extends Model
{
    protected $table = "doctor";

    protected $allowedColumns = ['id', 'email', 'nic', 'name', 'telephone', 'medical_id', 'password', 'blood_bank_id', 'admin_id'];
   
}
