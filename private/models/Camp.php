<?php

/**
 * camp model
 */

class Camp extends Model
{
    //since model name and table name are different
    protected $table = "blood_donation_camp";



//these are the only columns allowed to access
    protected $allowedColumns = ['camp_id','street','house_no','city','camp_name', 'description', 'date', 'latitude','longitude', 'blood_bank_id', 'start_time', 'rating','camp_img','doctor_id','camp_name','blood_bank_id','donor_id','camp_req_id'];
    


    public function validate($DATA)
    {

        $this->errors = array();



        if (!(filter_var($DATA["email"], FILTER_VALIDATE_EMAIL))) {
            $this->errors[] = ("Valid email is required");
        }

        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }

    function calculateDistance($lat1, $lon1, $lat2, $lon2)
{
    $radius = 6371; // Radius of the Earth in kilometers

    $dLat = deg2rad($lat2 - $lat1);
    $dLon = deg2rad($lon2 - $lon1);

    $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon / 2) * sin($dLon / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

    $distance = $radius * $c;

    return $distance;
}

function findCampsWithinRadius($camps, $givenLat, $givenLon, $radius)
{
    $result = [];
    $cmp=new Camp();

    foreach ($camps as $camp) {
        $distance = $cmp->calculateDistance($givenLat, $givenLon, $camp->latitude, $camp->longitude);
        
        if ($distance <= $radius) {
            $result[] = [
                'campid' => $camp->camp_id,
                'latitude' => $camp->latitude,
                'longitude' => $camp->longitude
            ];
        }
    }

    return $result;
}


}
?>