<?php
class Datum_Model extends TinyMVC_Model{
/*
   function myDate(){  
        $idKey1 = date('y');
        $idKey2 = date('m');
        $idKey3 = date('d');
        $idKey4 = date('H');
        $idKey5 = date('i');
        $idKey6 = date('s');
        $id = $idKey1.$idKey2.$idKey3.$idKey4.$idKey5.$idKey6;
        return $id;                    
    }
 */
    
    
 /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author              Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 * array met all opties van ht onderdeel "Datum"
 */
    function GetDayOptions(){
        $dayoptions =array(
            'radio' => array(
               1 => 'voormiddag',
               2 => 'namiddag',
               3 => 'avond',
            ),
            'text'=> array(
               1 => 'VolledigDag',
               2 => 'Dag',
               3 => 'Maand',
               4 => 'Jaar', 
            ),            
        );
        return $dayoptions;       
}
/**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author              David Defossez
 * @copyright (c)       2013, KHLIM-ict
 *
 * 
 */
    function GetDay(){
	$day = date('j');
	return $day;
}
/**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author              David Defossez
 * @copyright (c)       2013, KHLIM-ict
 *
 * 
 */
function GetMonth(){
	$month = date('n');
	//$maanden_array = array( 'januari','februari', 'maart', 'april','mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december'); 
	//$maand_naam = $maanden_array[$month-1];
	return $month;
}

/**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author              David Defossez
 * @copyright (c)       2013, KHLIM-ict
 *
 * 
 */
function GetFullDay(){
	$fullDay = date('j');
	$dagen_array = array( 'zondag', 'maandag','dinsdag','woensdag','donderdag', 'vrijdag', 'zaterdag',); 

	while( $fullDay >= 7){$fullDay= $fullDay - 7;} 
	$dag_naam = $dagen_array[$fullDay]; 		
	return $dag_naam;
}
/**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author              David Defossez
 * @copyright (c)       2013, KHLIM-ict
 *
 * 
 */
function GetYear(){
	$year = date('Y');
	return $year;
}
/**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author              David Defossez
 * @author              Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 * 
 */
function GetAMorPM(){
       
	$Currenthour= date('G');
        
		if ($Currenthour < 12){return 'voormiddag';}
                else{return 'namiddag';}
                     
      
}
/**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 * genereerd de html code die door gegeven wordt aan de view
 * ondedelen
 *      -Datum
 */  
function genHTML(){
    $strHTML ='<div id="datum"><b>datum:</b><br/><p>';
    
            foreach($this->GetDayOptions() as $type =>$countUitvoer)
            {
                foreach($countUitvoer as $keydatum=> $valueUit)
                {
                    if($type=="radio")
                    {
                        $strHTML .= "<label><input type='$type' name='vrna' ";
                        if($this->GetAMorPM() == $valueUit){$strHTML .= 'checked="checked" ';}
                        $strHTML .="value='$valueUit' id='$valueUit'/>" .$valueUit. "</label>";                  
                    }
                    else
                    {
                        $strHTML .= "<input type='$type' name='$valueUit' id='$valueUit' class='text' value='" ;
                        switch ($valueUit)
                            {
                            case 'VolledigDag':
                                $strHTML .= $this->GetFullDay();
                              break;
                            case 'Dag':
                                $strHTML .= $this->GetDay();
                              break;
                            case 'Maand':
                                $strHTML .= $this->GetMonth();
                              break;
                            case 'Jaar':
                            $strHTML .= $this->GetYear();
                              break;
                            default:
                            }
                         $strHTML .= "' />";
                     }
                }
            }
            $strHTML .= "</p></div>";
            
            return $strHTML;
}

}
?>