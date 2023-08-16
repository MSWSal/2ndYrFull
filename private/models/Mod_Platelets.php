<?php

/**
 * User model
 */

class Mod_Platelets extends Model
{
    protected $table = "platelets";

    protected $allowedColumns = ['exp_date', 'final_packet_id', 'donor_id', 'lab_id', 'packet_id', 'blood_bank_id'];
   
}