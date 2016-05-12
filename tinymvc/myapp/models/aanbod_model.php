<?php
    class Aanbod_Model extends TinyMVC_Model{
 /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 * array met alle opties voor het onderdeel aanbod
 */
        function arrAanbod(){
            $arrAanbod= array(
                'main'=>array(
                    'main1' => 'folder werking meegeven',
                    'main2' => 'anderer inforematie matyeriaal meeggegeven',
                    'main3' => 'eigen infothek geraadpleegd',
                    'main4' => 'follow-up contact',
                    'main5' => 'zelf inforamtie meeggeven',
                    'main6' => 'PA gepland',
                    'main7' => 'doorverwijzing naar ander aanbod opvoedingswinkel',
                    'main8' => 'doorverwijzing naar hulp verlening',
                ),
                'sub'=>array(
                    'sub1' => 'CLB',
                    'sub2' => 'CGGZ',
                    'sub3' => 'VAPH',
                    'sub4' => 'BJB',
                    'sub5' => 'AWW',
                    'sub6' => 'K&amp;G',
                    'sub7' => 'andere',
                ),
            );
            return $arrAanbod;
        }
 /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 * genereerd de HTML code voor he onderdeel aanbod
 */
        function genHTML(){
            $strHTML = "<div id='aanbod'><b>Aanbod</b>";
            foreach($this->arrAanbod() as $type => $arr){
                if($type =='sub'){$strHTML.= "<div id='divDoor' class='sub'>";}
                $strHTML.= "<p>";
                foreach($arr as $id => $value){
                   $strHTML.= "<div>";
                   if($type !='sub'){$strHTML.= "<label><input type='checkbox' name='$id' value='1' ";}
                   else{$strHTML.= "<label><input type='radio' name='hulp' value='$value' ";}
                   $strHTML.= "id='$id' ";
                   if($id == "main8"){$strHTML.= " onclick=toggle('$id','divDoor') ";}
                   $strHTML.= " />";
                   $strHTML.= $value;
                   $strHTML.= "</label>";
                   if($id == "sub7" && $value =='andere'){$strHTML.= "<input type='text' class='text' name='hulp_txt' /> ";}
                   if($id == 'main7'){$strHTML.= "<input type='text' class='text' name='door_txt' /> ";}
                   $strHTML.= "</div>";
                }
                if($type =='sub'){$strHTML.= "</div>";}
                $strHTML.= "</p>";
            }
            $strHTML.= "</div>";
            
            return $strHTML;
        }
        
    }

?>
