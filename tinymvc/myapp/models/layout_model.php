<?php
    class Layout_Model extends TinyMVC_Model{
        function header($loc){
            $strHTML = $loc;
            $strHTML.= '<div><form action="'.$_SERVER['PHP_SELF'].'" method="post">';
            $strHTML.= "<input type='submit' id='logoff' name='logoff' value='log uit' />";
            $strHTML.= "<input type='submit' id='back' name='back' value='terug' />";
            $strHTML.= '</form></div>';
            return $strHTML;
        }
        function footer(){
            $strHTML = "<h5>&#169;De opvoedingswinkel   -   Created by Khlim</h5>";
            return $strHTML;
        }
     
        function logOff(){
            // functie die de loguit knop in de header plaatst 
        }
    }
?>
