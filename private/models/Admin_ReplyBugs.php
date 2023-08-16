<?php

/**
 * User model
 */

class Admin_ReplyBugs extends Model
{
    protected $table = "bugs";

    protected $allowedColumns = ['donor_id', 'bug_id', 'bug_detail', 'status', 'admin_id'];
    
    public function update_reply($id,$data)
    {

       
        $str="";
        foreach($data as $key => $val){
            $str .= $key."=:".$key.",";
        }

        $str=trim($str,",");
        
        $data['bug_id']=$id;

        $query = "update $this->table set $str where bug_id = :bug_id ";
        
       
        return $this->query($query,$data);
    }
}