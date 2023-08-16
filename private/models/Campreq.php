<?php

class Campreq extends Model
{
    protected $table = "donation_camp_request";




    protected $allowedColumns = ['camp_request_id','name', 'telephone', 'email', 'blood_bank', 'street','house_no','city','blood_bank','status','latitude','longitude','date','status','phi_id','donor_id'];

    public function validate($DATA)
    {
 
       $this->errors = array();
 
 
 
       if (!(filter_var($DATA["email"], FILTER_VALIDATE_EMAIL))) {
          $this->errors[]=("Valid email is required");
      }
  
      if(count($this->errors) == 0){
          return true;
      }
 
       return false;
    }

    function findClosestBoodbank($latitude, $longitude, $bloodbankData) {
        // convert latitude and longitude to radians
        $lat1 = deg2rad($latitude);
        $lon1 = deg2rad($longitude);
        
        // set the initial minimum distance to a very large number
        $minDistance = PHP_INT_MAX;
        $closestBloodbank = null;
        
        // loop through each bloodbank in the data array
        foreach ($bloodbankData as $bloodbank) {
            // convert bloodbank latitude and longitude to radians
            $lat2 = deg2rad($bloodbank->latitude);
            $lon2 = deg2rad($bloodbank->longitude);
            
            // calculate the distance between the two points using the Haversine formula
            $distance = 2 * 6371 * asin(
                sqrt(
                    pow(
                        sin(($lat2 - $lat1) / 2), 2
                    ) + cos($lat1) * cos($lat2) * pow(
                        sin(($lon2 - $lon1) / 2), 2
                    )
                )
            );
            
            // if the current distance is smaller than the current minimum distance,
            // update the minimum distance and closest bloodbank name
            if ($distance < $minDistance) {
                $minDistance = $distance;
                $closestBloodbank = $bloodbank->blood_bank_id;
            }
        }
        
        // return the name of the closest bloodbank
        return $closestBloodbank;
    }
    

}
?>