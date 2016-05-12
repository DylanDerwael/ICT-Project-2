<?php
    class Titel_Model extends TinyMVC_Model{
         /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 */
        function arrOpties(){
            $arr = array(
                'infoavond',
                'lezing',
            );
            return $arr;
        }
        
        
        function arrPeuter(){
            $arr= array(
               'Runkst',
               'Banneux' 
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
        function genHTML($var){
            $strHTML = "<div id='x'><b>Titel $var</b><input type='text' name='title_txt' /></div>";
            return $strHTML;
        }
        
        function genHTMLOpties($controller){
                switch($controller){
                    case'info':
                       $strHTML = "<div id='optiesLezing'><b>infoavond / lezing</b><br /><p>";
                       $arr = $this->arrOpties();
                       break;
                    case 'peuter':
                       $strHTML = "<div id='locPeuter'><b>peuternetsje in:</b><br /><p>";
                       $arr = $this->arrPeuter();
                }
                
                
               
                foreach($arr as $key => $value)
                {
                    $strHTML .= "<label><input type='radio' name='peuternestje' value='$value' id='$value'>".$value."</label>";
                }
        $strHTML .= "</p></div>";
        return $strHTML;
        }
        
        
    } 
?>
