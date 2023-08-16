
<?php

/**
 * User model
 */

class Admin_AddStaffLab extends Model
{
    protected $table = "lab_staff";

    protected $allowedColumns = ['id', 'email', 'nic', 'name', 'telephone', 'medical_id', 'password', 'blood_bank_id', 'admin_id'];
   
}
