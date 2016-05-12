<?php
 /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		David Defossez
 * @copyright (c)       2013, KHLIM-ict
 *
 * array voor het onderdeel "Inschatting Zwaarte"
 */
class Gegsituatie_Model extends TinyMVC_Model 
{
    function arrZwaarte(){
     $arrInSchattingZwaarte = array(
         'Alledaagse opvoedingsvragen',
         'Opvoedingsspanning',
         'Opvoedingscrisis',
         'Opvoedingsnood',
         'Overige',
         'Onbekend',
     );
     return $arrInSchattingZwaarte;
    }
   /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		David Defossez
 * @copyright (c)       2013, KHLIM-ict
 *
 * genereerd de html code die door gegeven wordt aan de view
 */ 
    function genHTML($werk){
        //--- gedeelte "Gegevens over de opvoedingssituatie" ---
        $strHTML = "<div id='opvoedingssituatie'><p><b>Gegevens over de opvoedingssituatie:</b>";
            $strHTML.= '<div id="Inschatting Zwaarte"><b>Inschatting zwaarte:</b><p>';     
            foreach($this->arrZwaarte() as $zwaarte){
                $strHTML.= '<label><input type="radio" ';
                $strHTML.= "id='$zwaarte' ";
                $strHTML.= "name='zwaarte' ";
                $strHTML.= "value='$zwaarte' ";
                $strHTML.= " />$zwaarte</label>";
            }
            $strHTML.= '</p></div>';
            $strHTML.= '</div>';
            
        //--- gedeelte: "aanbod werkvorm" ---
            $strHTML.= $werk;
        return $strHTML;
    }
}
?>
