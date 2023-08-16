<?php

/**
 * User model
 */

class User extends Model
{
    protected $table = "donor";




    //allowed columns are the only columns that can be accessed through architecure
    protected $allowedColumns = ['name', 'email', 'nic', 'mobile', 'age', 'city', 'street', 'houseno', 'is_registered', 'is_defect', 'password', 'profile_img'];

    //run hash pw funtion before insert
    protected $beforeInsert = ['hash_password'];


    public function validate($DATA)
    {

        $this->errors = array();



        if (!(filter_var($DATA["email"], FILTER_VALIDATE_EMAIL))) {
            $this->errors[] = ("Valid email is required");
        }

        if (strlen($DATA["password"]) < 8) {
            $this->errors[] = ("Password must be at least 8 characters");
        }

        if (!preg_match("/[a-z]/i", $DATA["password"])) {
            $this->errors[] = ("Password must contain at least one letter");
        }

        if (!preg_match("/[0-9]/", $DATA["password"])) {
            $this->errors[] = ("Password must contain at least one number");
        }

        if ($DATA["password"] !== $DATA["cPassword"]) {
            $this->errors[] = ("Passwords must match");
        }
        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }

    public function hash_password($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }
    public function code()
    {
        $arr = array();
        $arr['code'] = rand(10000, 99999);
        $arr['email'] = $_SESSION['USER']->email;
        $arr['expires'] = time() + (60) * 3;
        return $arr;
    }
    public function change_pwd_code()
    {
        $arr = array();
        $arr['code'] = rand(10000, 99999);
        // $arr['email'] = $_SESSION['USER']->email;
        $arr['expires'] = time() + (60) * 3;
        return $arr;
    }

    //funtion to check weather a donor is eligible to register for a blood donation camp
    public function isEligible($id)
    {
        $arr = array();
        $arr['id'] = $id;

        $q2 = "select is_defect,last_donated from donor where id=:id";
        $res = $this->query($q2, $arr);

        $res = $res[0];
        $lastDonated = $res->last_donated;
        $isbanned = $res->is_defect;

        $inputDate = new DateTime($lastDonated);
        $daysAgo90 = (new DateTime())->modify('-90 days');

        // check if input date is more than 90 days ago
        if ($inputDate < $daysAgo90 && !$isbanned) {
            return true;
        } else {
            return false;
        }


    }



}