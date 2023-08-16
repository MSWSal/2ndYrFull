
<?php

/**
 * User model
 */

class Admin_Bugs extends Model
{
    protected $table = "bugs";

    protected $allowedColumns = ['donor_id', 'bug_id', 'bug_detail', 'status', 'admin_id'];
   
}