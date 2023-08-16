<?php

/**
 * User model
 */

class Mod_Wbc extends Model
{
    protected $table = "wbc";

    protected $allowedColumns = ['exp_date', 'final_packet_id', 'donor_id', 'lab_id', 'packet_id', 'blood_bank_id'];
   
}