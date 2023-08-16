<?php

/**
 * User model
 */

class Admin_PublicUsersProfile extends Model
{
    protected $table = "donor";

    protected $allowedColumns = ['id', 'email', 'nic', 'name', 'age', 'city', 'street', 'houseno', 'is_registered', 'is_defect', 'password', 'profile_img', 'mobile'];
   
}