<?php

/**
 * User model
 */

class Mod_Rbc extends Model
{
    protected $table = "rbc";

    protected $allowedColumns = ['exp_date', 'final_packet_id', 'donor_id', 'lab_id', 'packet_id', 'blood_bank_id'];
   
}