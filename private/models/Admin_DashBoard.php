
<?php

/**
 * User model
 */

class Admin_DashBoard extends Model
{
    protected $table = "access_code";

    protected $allowedColumns = ['access_code_id', 'date', 'phi_id', 'donor_id', 'status'];
   
}