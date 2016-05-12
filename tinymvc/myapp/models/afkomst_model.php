<?php
class Afkomst_Model extends TinyMVC_Model{
 /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 * array met alle mogelelijke vragen voor het onderdeel "afkomst"
 */
        function arrAfkomst(){
            $afkomst=array(
                1 => 'autochtoon',
                2 => 'allochtoon',);
            return $afkomst;}    
 
              /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 * genereerd de html code die door gegeven wordt aan de view
 * ondedeel afkomst
 */ 
    function genHTML(){
        $strHTML = "<div id='afkomst'><b>Afkomst</b><br /><p>";

                foreach($this->arrAfkomst() as $keyAfkomst => $valueAfkomst)
                {
                    $strHTML .= "<label><input type='radio' name='afkomst' value='$valueAfkomst' id='$valueAfkomst' onclick=toggle('allochtoon','afkomst_txt') />".$valueAfkomst."</label>";
                    if($valueAfkomst=='allochtoon'){$strHTML .= "<input type='text' class='hideText' id='afkomst_txt' name='afkomst_txt'/>";}
                }
        $strHTML .= "</p></div>";
        return $strHTML;
    }
}
?>
