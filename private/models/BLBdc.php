<?php


 class BLBdc extends Model
 {
    protected $table = "blood_donation_camp";

    public function updatedoc($id,$data) //-----------------------update request status
    {

       
        $str="";
        foreach($data as $key => $val){
            $str .= $key."=:".$key.",";
        }

        $str=trim($str,",");
        
        $data['camp_id']=$id;

        $query = "update $this->table set $str where camp_id = :camp_id";
        
       
        return $this->query($query,$data);
    }

    public function thismonthcamps($column1, $value1,$column2, $value2,$value3)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select * from $this->table where $column1=:value1 AND MONTH($column2)=:value2 AND YEAR($column2)=:value3";
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
            'value3' => $value3,

        ]);
    }

    public function thisyearcamps($column1, $value1,$column2,$value3)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select * from $this->table where $column1=:value1 AND YEAR($column2)=:value3";
        return $this->query($query, [
            
            'value1' => $value1,
            'value3' => $value3,

        ]);
    }

    public function paginthismonthcamps($column1, $value1,$column2, $value2,$value3, $fpage,$off)
    {

        $column1 = addslashes($column1);
        $column2 = addslashes($column2);


        $query = "select * from $this->table where $column1=:value1 AND MONTH($column2)=:value2 AND YEAR($column2)=:value3 limit $fpage,$off";
        return $this->query($query, [
            
            'value1' => $value1,
            'value2' => $value2,
            'value3' => $value3,

        ]);
    }

    public function paginall($fpage,$off){ //-------------for all pagination
        $sql="select * from $this->table limit $fpage,$off";
  
        return $this->query($sql);
      }


    

 }  