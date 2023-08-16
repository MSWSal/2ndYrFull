<?php

/**
 * User model
 */

 class Rbc extends Model
 {
    protected $table = "rbc";

    public function getbs($column1, $value1)
    {

        $column1 = addslashes($column1);


        $query = "select * from $this->table where $column1=:value1";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
        ]);
    }

    public function getbsbgrp($column1, $value1,$column2, $value2)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select * from $this->table where $column1=:value1 AND $column2=:value2";
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
        ]);
    }


    public function getbscount($column1, $value1)
    {

        $column1 = addslashes($column1);


        $query = "select * from $this->table where $column1=:value1 AND exp_date > CURDATE()";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
        ]);
    }

    

      public function paginbs($column1, $value1,$fpage,$off)
    {

        $column1 = addslashes($column1);


        $query = "select * from $this->table where $column1=:value1 order by final_packet_id desc limit $fpage,$off";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
        ]);
    }

    public function paginbsbgrp($column1, $value1,$column2, $value2,$fpage,$off)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select * from $this->table where $column1=:value1 AND $column2=:value2 order by final_packet_id limit $fpage,$off";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
        ]);
    }

    public function getbgrp($column1, $value1,$column2, $value2)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select IFNULL(SUM(amount),0) AS sum from $this->table where $column1=:value1 AND $column2=:value2 AND exp_date>CURDATE()";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
        ]);
    }

    

  

   


  }