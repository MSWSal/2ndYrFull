<?php

/**
 * User model
 */

class Mod_Plasma extends Model
{
    protected $table = "plasma";

    protected $allowedColumns = ['exp_date', 'final_packet_id', 'donor_id', 'lab_id', 'packet_id', 'blood_bank_id'];
   
}