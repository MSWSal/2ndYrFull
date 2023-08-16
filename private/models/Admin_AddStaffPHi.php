<?php

/**
 * User model
 */

class Admin_AddStaffPHi extends Model
{
    protected $table = "phi";

    protected $allowedColumns = ['email', 'id', 'nic', 'name', 'telephone', 'medical_id', 'password', 'blood_bank_id', 'admin_id'];
   
}
