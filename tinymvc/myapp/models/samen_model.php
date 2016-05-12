<?php
    class Samen_Model extends TinyMVC_Model{
         /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 */
        function arr (){
            $arr = array(
                "KenG"          => 'K&amp;G',
                "gezindsbond"   => 'gezindsbond',
                "ClB"           => 'CLB',
                "JAC"           => 'JAC',
                "andereSamen"   => 'Anderen',
            );
            return $arr;
        }
         /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 */
        function genHTML(){
               $strHTML = "<div id='samen'><b>in samenwerking met: </b><br /><p>";

                foreach($this->arr() as $key => $value)
                {
                    $strHTML .= "<label><input type='radio' name='samen' value='$key' id='$key'>".$value."</label>";
                    if($value =='andere'){$strHTML .= "<input type='input' name='samenwerk_txt'/>";}
                }
        $strHTML .= "</p></div>";
        return $strHTML;
        }
        
    } 
?>
