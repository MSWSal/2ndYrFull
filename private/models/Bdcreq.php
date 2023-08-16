<?php

/**
 * User model
 */

 class Bdcreq extends Model
 {
    protected $table = "donation_camp_request";

    public function bdcwhere($column1, $value1,$column2, $value2)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select * from $this->table where $column1=:value1 AND $column2=:value2";
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,

        ]);
    }

    public function paginbdcwhere($column1, $value1,$column2, $value2,$fpage,$off)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select * from $this->table where $column1=:value1 AND $column2=:value2 limit $fpage,$off";
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,

        ]);
    }

    

    public function paginall($fpage,$off){ //-------------for all pagination
      $sql="select * from $this->table where bloodbank='Matara' order by id desc limit $fpage,$off";

      return $this->query($sql);
    }


    public function paginwhere($column, $value,$fpage,$off) //-------------------for where pagination
    {

        $column = addslashes($column);

        $query = "select * from $this->table where $column=:value limit $fpage,$off" ;
        // echo $query;
        return $this->query($query, [
            
            'value' => $value,
        ]);
    }



    public function updatestatus($id,$data) //-----------------------update request status
    {

       
        $str="";
        foreach($data as $key => $val){
            $str .= $key."=:".$key.",";
        }

        $str=trim($str,",");
        
        $data['camp_request_id']=$id;

        $query = "update $this->table set $str where camp_request_id = :camp_request_id";
        
       
        return $this->query($query,$data);
    }



  }