<?php
    class Woon_Model extends TinyMVC_Model{
         /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 */
        function arrWoon(){
            $wijke= array(
                            0 => 'geen gegeven',
                            1 => 'Banneux',
                            2 => 'Godsheide',
                            3 => 'Kuringen centrum',
                            4 => 'Sint-Jansheide',
                            5 => 'Malpertuus',
                            6 => 'Heilig Kruis',
                            7 => 'Sint-Hubertus',
                            8 => 'Sint-Kristoffel',
                            9 => 'Sint-Lambrechts-Herk',
                            10 => 'Ter Hilst',
                            11 => 'Sint-Quintinus-centrum',
                            12 => 'Heilig Hart',
                            13 => 'Kermt',
                            14 => 'Kiewit',
                            15 => 'Kiewit heide',
                            16 => 'Rapertingen',
                            17 => 'Schimpen',
                            18 => 'Sint-Katarina',
                            19 => 'Sint-Martinus-Hollandsveld',
                            20 => 'Spalbeek',
                            21 => 'Stevoort',
                            22 => 'Stokrooie',
                            23 => 'Tuilt',
                            24 => 'Wimmertingen',
                    );
            return $wijke;
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
            $id = 50;
            $strHTML = "<div id='woon'><b>woon plaats</b><p>";
            $strHTML.= "<div><label><input type='radio' id='Hasselt' name='locatie' value='Hasselt' onclick=toggle('Hasselt','wijk');toggle('buitenHasselt','buiten'); />Hasselt</label>";
            $strHTML.= "<select id='wijk' name='wijk' class='hideText' class='text'>";
            foreach($this->arrWoon()as $wijk){
                $strHTML.= "<option id='$id' value='$wijk' >";
                $strHTML.= $wijk;
                $strHTML.= "</option>";
                $id++;
            }
            $strHTML.= "</select></div><div><label>";
            $strHTML.= "<input type='radio' id='buitenHasselt' name='locatie' value='nietHasselt' onclick=toggle('Hasselt','wijk');toggle('buitenHasselt','buiten'); />Buiten Hasselt</label> ";
            $strHTML.= "<input type='text' class='hideText' id='buiten' name='txt_buiten' /></p></div></div>";
            $id = 50;
            return $strHTML;
        }
    }
?>
