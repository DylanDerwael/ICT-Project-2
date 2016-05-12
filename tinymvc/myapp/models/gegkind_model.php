<?php
class Gegkind_Model extends TinyMVC_Model 
{
    /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael, David Defossez
 * @copyright (c)       2013, KHLIM-ict
 *
 */
    function arrKind(){
     $arrKind = array(
         'l1' => '0-2',
         'l2' => '3-5',
         'l3' => '6-12',
         'l4' => '13-17',
         'l5' => '18+',
     );
     return $arrKind;
    }
    /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan derwael, David Defossez
 * @copyright (c)       2013, KHLIM-ict
 *
 */
    function genHTML($var){
        $strHTML = '<div id="gegevensKind"><b>leeftijd van het kind</b><p>';     
        foreach($this->arrKind() as $objK => $age){
            $strHTML.= '<label><input class="" ';
            if($var != 'anders'){ $strHTML.= 'type="radio" name="leeftijd" ';}else{$strHTML.= "type='checkbox' name='$objK'" ;}
            $strHTML.= "id='$age' ";
            $strHTML.= "value='$age' ";
            $strHTML.= " />$age</label>";
        }
        
        if($var != 'anders'){
            $strHTML.= '</p></div><div id="geslacht"><b>geslacht van het kind</b><p>';
            $strHTML.= '<label><input type="radio" id="man" value="man" name="geslacht" />man</label>';
            $strHTML.= '<label><input type="radio" id="vrouw" value="vrouw" name="geslacht" />vrouw</label>';
        }
        $strHTML.= '</p></div>';
        
        return $strHTML;
    }
       function genHTML2()
    {
        $strHTML ="<div id='ontwikkelingsfase'><b> ontwikkelingsfase van het kind</b><p>";
        $strHTML .="<label> <input type='radio' name='fase'/>baby's en peuters </label>";
        $strHTML .="<label> <input type='radio' name='fase'/>Basisschoolleeftijd </label>";
        $strHTML .="<label> <input type='radio' name='fase'/>Pubers en adolescenten </label>";
        $strHTML .="</p></div>";

        return $strHTML;
    }
}
?>
