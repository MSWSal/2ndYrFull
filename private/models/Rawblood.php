<?php

/**
 * User model
 */

 class Rawblood extends Model
 {
    protected $table = "raw_blood_packet";

    public function paginall($fpage,$off){
      $sql="select * from $this->table where status=0 order by collected_date limit $fpage,$off";

      return $this->query($sql);
    }

    public function findrejected($column1, $value1,$column2, $value2)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select $this->table.*,blood_donation_camp.camp_name from $this->table INNER JOIN blood_donation_camp ON $this->table.blood_donation_camp_id=blood_donation_camp.camp_id INNER JOIN donor ON $this->table.donor_id=donor.id where $this->table.$column1=:value1 AND $this->table.$column2=:value2";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
        ]);
    }

    public function findrejected2($column1, $value1,$column2, $value2)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select $this->table.*,blood_donation_camp.camp_name,donor.name from $this->table INNER JOIN blood_donation_camp ON $this->table.blood_donation_camp_id=blood_donation_camp.camp_id INNER JOIN donor ON $this->table.donor_id=donor.id where $this->table.$column1 > :value1 AND $this->table.$column2=:value2";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
        ]);
    }
    // public function paginallchecked($fpage,$off){
    //   $sql="select * from $this->table where status=1 order by collected_date limit $fpage,$off";

    //   return $this->query($sql);
    // }

    // public function paginallrejected($fpage,$off){
    //   $sql="select * from $this->table where status=2 order by collected_date limit $fpage,$off";

    //   return $this->query($sql);
    // }


    public function paginallrejected($column1, $value1,$column2, $value2, $fpage,$off)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select $this->table.*,blood_donation_camp.camp_name,donor.name from $this->table INNER JOIN blood_donation_camp ON $this->table.blood_donation_camp_id=blood_donation_camp.camp_id INNER JOIN donor ON $this->table.donor_id=donor.id where $this->table.$column1=:value1 AND $this->table.$column2=:value2 order by collected_date limit $fpage,$off";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
        ]);
    }

    public function paginallrejected2($column1, $value1,$column2, $value2, $fpage,$off)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select $this->table.*,blood_donation_camp.camp_name,donor.name from $this->table INNER JOIN blood_donation_camp ON $this->table.blood_donation_camp_id=blood_donation_camp.camp_id INNER JOIN donor ON $this->table.donor_id=donor.id where $this->table.$column1 > :value1 AND $this->table.$column2=:value2 order by collected_date limit $fpage,$off";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
        ]);
    }


    public function updateStatus($id,$data)
    {

       
        $str="";
        foreach($data as $key => $val){
            $str .= $key."=:".$key.",";
        }

        $str=trim($str,",");
        
        $data['packet_id']=$id;

        $query = "update $this->table set $str where packet_id = :packet_id";
        
       
        return $this->query($query,$data);
    }

    public function thismonthdonations($column1, $value1,$column2, $value2,$value3)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select * from $this->table where $column1=:value1 AND MONTH($column2)=:value2 AND YEAR($column2)=:value3";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
            'value3' => $value3,

        ]);
    }

    public function thisyeardonations($column1, $value1,$column2,$value3)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select * from $this->table where $column1=:value1 AND YEAR($column2)=:value3";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value3' => $value3,

        ]);
    }

    public function paginthismonthdonations($column1, $value1,$column2, $value2,$value3, $fpage,$off)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select * from $this->table where $column1=:value1 AND MONTH($column2)=:value2 AND YEAR($column2)=:value3 limit $fpage,$off";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
            'value3' => $value3,

        ]);
    }

    public function thismonthdonors($column1, $value1,$column2, $value2,$value3)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select DISTINCT donor_id from $this->table where $column1=:value1 AND MONTH($column2)=:value2 AND YEAR($column2)=:value3";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
            'value3' => $value3,

        ]);
    }

    public function thisyeardonors($column1, $value1,$column2,$value3)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select DISTINCT donor_id from $this->table where $column1=:value1 AND YEAR($column2)=:value3";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value3' => $value3,

        ]);
    }

    public function thismonthdefect($column1, $value1,$column2, $value2,$value3)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "SELECT IFNULL(COUNT(packet_id),0) AS count from $this->table where $column1=:value1 AND MONTH($column2)=:value2 AND YEAR($column2)=:value3 AND status>1";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
            'value3' => $value3,

        ]);
    }

    public function thismonthnondefect($column1, $value1,$column2, $value2,$value3)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "SELECT IFNULL(COUNT(packet_id),0) AS count from $this->table where $column1=:value1 AND MONTH($column2)=:value2 AND YEAR($column2)=:value3 AND status<2";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
            'value3' => $value3,

        ]);
    }

    public function thisyeardefect($column1, $value1,$column2, $value2)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "SELECT IFNULL(COUNT(packet_id),0) AS count from $this->table where $column1=:value1 AND YEAR($column2)=:value2 AND status>1";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,

        ]);
    }

    public function thisyearnondefect($column1, $value1,$column2, $value2,)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "SELECT IFNULL(COUNT(packet_id),0) AS count from $this->table where $column1=:value1 AND YEAR($column2)=:value2 AND status<2";
        // echo $query;
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,

        ]);
    }
    
    public function check3years($arr)
    {
        $size = count($arr); //size of array
        if ($size >= 3) {
            for ($i = 0; $i < $size - 2; $i++) {
                $d1 = date_create($arr[$i]);
                $d2 = date_create($arr[$i+2]);
               
                // print_r ($d1);
                // print_r ($d2);
                
                if (date_diff($d1,$d2)->format("%a") <= 365) {
                    
                    return true;
                }
            }
            return false;
        } else {
            return false;
        }

    }

  







  }