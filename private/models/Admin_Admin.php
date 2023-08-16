<?php

/**
 * User model
 */

class Admin_Admin extends Model
{
    protected $table = "admin";

    protected $allowedColumns = ['id', 'email', 'password', 'name', 'nic', 'phone', 'city', 'street', 'house_no', 'status'];
   
}