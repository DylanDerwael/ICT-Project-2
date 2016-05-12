<?php
    class Contact_Model extends TinyMVC_Model{
         /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 * array met alle mogelelijke vragen voor het onderdeel "Contact"
 */           
        function arrContact(){
            $contact= array(
                'winkel' => 'contact in de winkel',
                'tel' => 'telefoon',
                'mail' => 'Email',);
            return $contact;}
     /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 * genereerd de html code die door gegeven wordt aan de view
 * ondedeel contact 
      * mee geleverd argument = de naam van de controller 
 *
 */          
         function genHTML($control){
             $strHTML = "<div id='contact'><b>Kanaal</b><br /><p> ";
          
            foreach($this->arrContact() as $keyContact => $valueContact)
            {
              $strHTML .= "<label><input type='radio' name='contact' id='$keyContact' value='$valueContact'>".$valueContact."</label>";            
            }
            if($control == 'advies'){ 
                $strHTML.= '<label><input type="radio" name="contact" value="hazelaar banneux" class="text"  /> ';
                $strHTML.= 'Contact hazelaar Banneux</label>';
            }
            $strHTML .= "</p></div> ";
            
            return $strHTML;
             
         }
    }
?>
