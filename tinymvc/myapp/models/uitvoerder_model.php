<?php
class Uitvoerder_Model extends TinyMVC_Model{
 /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 * array met alle mogelelijke vragen voor het onderdeel "uitvoerder"
 */
    function arrUitvoerder()
    {
            $uitvoerder =array(
            'mainUit' => array(
               'mainuit1' => 'medewerker',
               'mainuit2' => 'vrijwilliger',
               'mainuit3' => 'stagair',
               'mainuit4' => 'partner',
            ),
            'subUit'=> array(
                'subuit1' => 'K&amp;G',
                'subuit2' => 'CAW',
                'subuit3' => 'OCMW',
                'subuit4' => 'JAC',
                'subuit5' => 'Andere',
            ),  
        );
            return $uitvoerder;
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
 *      -uitvoerder
 */    
    function genHTML(){
                  //eerste stp pdo
            $strHTML ='<div id="uitvoerder"><b>Uitvoerder aanbod:</b><br/>';
            
            foreach($this->arrUitvoerder() as $keyUit => $arrOpties){
                
                $strHTML .= '<p>';
                if($keyUit == 'subUit'){ $strHTML .=  "<div id='subUitvoerder' class='sub'>";}
                foreach($arrOpties as $key => $uitvoerder){
                    $strHTML .=  "<label>";
                    $strHTML .=  "<input ";
                    $strHTML .=  "type='radio' ";
                    $strHTML .=  "id='$key' ";
                    $strHTML .=  "name='uitvoerder' ";
                    $strHTML .=  "value='$uitvoerder' ";
                    if ($keyUit =='mainUit'){$strHTML .=  "onclick=toggle('mainuit4','subUitvoerder') ";}
                    else{$strHTML .=  "onclick=toggle('subuit5','hiddenUit') ";}
                    $strHTML .=  "/>";
                    $strHTML .=  $uitvoerder;
                    $strHTML .=  "</label>";
                }
                if($keyUit == 'subUit'){ $strHTML .=  "<input type='text' id='hiddenUit' name='andereUit' class='hideText' /></div>";}
                $strHTML .=  "</p>";
                }
                $strHTML.= "</div>";
            
            
            return $strHTML;
   
    }
       
}
?>
