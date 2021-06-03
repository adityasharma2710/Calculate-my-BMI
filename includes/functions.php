<?php 

////////*********TO CONVERT HEIGHT INTO METERS*******////////////
   function ConvertToMeters($h){
    $h = $h/100;

    return $h;
    }

   $height_converted = ConvertToMeters($height);


////////*********TO CONVERT WEIGHT INTO KG IF IN LBS*******////////////
if($unit == "Lbs"){
    function ConvertToKilogram($w){
        $w = $w/2.2;

        return $w;
    }

    $weight_converted = ConvertToKilogram($weight);

}else{
    $weight_converted = $weight;
}
    
////////*********TO CALCULAT BMI*******////////////

    function CalculateBMI($weights , $heights , $units) {
        $BMI = ($weights / pow($heights,2));

        return $BMI;
      }
      
   $BMI_result = CalculateBMI($weight_converted, $height_converted, $unit);
 
      
    
?>