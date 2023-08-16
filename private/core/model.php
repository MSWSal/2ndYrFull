<?php
/**
 * main model
 * funtions that evety model should have
 */

class Model extends Database
{
    public $errors = array();
    public function __construct()
    {
        if (!property_exists($this, 'table')) {
            $this->table = strtolower($this::class) . "s";
        }
    }
    public function where($column, $value)
    {

        $column = addslashes($column);

        $query = "select * from $this->table where $column=:value";
        // echo $query;
        return $this->query($query, [
            
            'value' => $value,
        ]);
    }

    public function findAll()
    {



        $query = "select * from $this->table ";

        return $this->query($query);
    }



    public function insert($data)
    {

        //remove unwanted columns
        if (property_exists($this, 'allowedColumns')) {
            foreach($data as $key=>$column) {
                if(!in_array($key, $this->allowedColumns)){
                    unset($data[$key]);
                }
            }
        }

        //RUN FUNTIONS BEFORE INSERT
        if (property_exists($this, 'beforeInsert')) {
            foreach($this->beforeInsert as $func) {
                $data = $this->$func($data);
            }
        }


        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $values = implode(',:',$keys);

        $query = "insert into $this->table ($columns) values (:$values)";
        
       
        return $this->query($query,$data);
    }


    public function update($id,$data)
    {

       
        $str="";
        foreach($data as $key => $val){
            $str .= $key."=:".$key.",";
        }

        $str=trim($str,",");
        
        $data['id']=$id;

        $query = "update $this->table set $str where id = :id";
        
       
        return $this->query($query,$data);
    }

    public function update1($id,$data)
    {
        $str="";
        foreach($data as $key => $val){
            if ($key == 'telephone') $str .= $key."=".$val.",";
            else $str .= $key."='".$val."',";
            // else $str .= $key."=:".$key.",";

        }
        // update blood_bank set name='Asith Amarasekara 123456',telephone=112233987,house_no='251',street='Frinco Wattha',city='Gampaha' where blood_bank_id =45;

        $str=trim($str,",");
        
        $data['id']=$id;

        if ($this->table == 'blood_bank')
        {
            $query = "update $this->table set $str where blood_bank_id =" .$id;
        }
        else
        {
            $query = "update $this->table set $str where id =" .$id;
        }
        //print the query
        echo $query;


        return $this->query($query);
    }


    public function update2($id,$data)
    {

       
        $str="";
        foreach($data as $key => $val){
            $str .= $key."=:".$key.",";
        }

        $str=trim($str,",");
        
        $data['blood_bank_id']=$id;

        $query = "update $this->table set $str where blood_bank_id = :blood_bank_id";
        
       
        return $this->query($query,$data);
    }

    public function delete($id)
    {

       
        

        $query = "delete from $this->table where id = :id";
        $data['id'] = $id;
       
        return $this->query($query,$data);
    }
    public function verify($code, $email)
    {

        $fcolumn = addslashes($email);
        $query = "select * from $this->table where code =:code && email=:email";
        return $this->query($query, [
            'code' => $code,
            'email' => $email,
        ]);
    }
  



}


