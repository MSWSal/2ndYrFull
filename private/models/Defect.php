<?php

class Defect extends Model
{
    protected $table = "defect";




    protected $allowedColumns = ['defect_id ', 'doctor_id', 'donor_id','reason','date','type'];

   
    
    function findBranchesWithin10Km($cityLat, $cityLong, $branchList) {
        $branchesWithin10Km = array();
        $def=new Defect();
        foreach($branchList as $branch) {
            // print_r($branch);
            $branchLat = $branch['latitude'];
            $branchLong = $branch['longitude'];
            
            $distance = $def->calculateDistance($cityLat, $cityLong, $branchLat, $branchLong);
            
            if($distance <= 10) {
                $branchesWithin10Km[] = $branch['type'];
            }
        }
        
        return $branchesWithin10Km;
    }
    
    function calculateDistance($lat1, $lon1, $lat2, $lon2) {
        $R = 6371; // radius of the earth in km
        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);
        $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon/2) * sin($dLon/2);
        $c = 2 * atan2(sqrt($a), sqrt(1-$a));
        $d = $R * $c; // distance in km
        
        return $d;
    }
    




}
?>