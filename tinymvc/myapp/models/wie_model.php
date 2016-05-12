<?php
     class Wie_Model extends TinyMVC_Model
    {
/**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 * array met alle mogelelijke vragen voor het onderdeel "Wie Komt"
 */
        function arrWie()
        {
             $wieoptions =array(
            'mainWie' => array(
               'verantwrlk' => 'opvoedingsverantwoordelijke',
               'geengev' => 'geen gegeven',
               'student' => 'student', 
               'ondersteuner' => 'opvoedingsondersteuner',
               'andereWieKomt' => 'andere',
            ),
            'subWie'=> array(
               'moeder' => 'moeder',
               'vader'  => 'vader',
               'stief'  => 'stiefouder',
               'ouders' => 'beide ouders',
               'grootouders' => 'grootouder(s)',
            ),  
        );
        return $wieoptions;
        }
/**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 * array met alle mogelelijke vragen voor het onderdeel "peuternestje"
 */
        function arrPeuter(){ 
            $arr = array(
                'opvd'          => 'Totaal aantal opvoedingsverantwoordelijke',
                'auto'          => 'Aantal autochtone opvoedingsverantwoordelijken',
                'alloc'         => 'Aantal alloctone opvoedingsverantwoordelijken',
                'orgin'         => 'orgine alloctone opvoedingsverantwoordelijken',
                'moeders'       => 'Aantal moeders', 
                'vaders'        => 'Aantal vaders', 
                'grootmoeders'  => 'Aantal grootmoeders',
                'grootvaders'   => 'Aantal grootvaders',
                'anderewie'     => 'Aantal andere',
                'wie'           => 'wie ?',
                'kinderen'      => 'Totaal aantal kinderen',
                'nieuwgezin'    => 'Aantal nieuwe gezinnen',
                'autogezin'     => 'Aantal autochtone gezinnen',
                'allocgezin'    => 'Aantal alloctone gezinnen',
                'woonplaats'    => 'Woonplaatsen / wijk van opvoedingsverantwoordelijke',
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
 * array met alle mogelelijke vragen voor het onderdeel "groepsbijeenkomst" + "oudercursus"
 */
            function arrGroepOuder(){
            $arr = array(
                'opvd'          => 'Totaal aantal opvoedingsverantwoordelijke',
                'auto'          => 'Aantal autochtone opvoedingsverantwoordelijken',
                'alloc'         => 'Aantal alloctone opvoedingsverantwoordelijken',
                'orgin'         => 'orgine alloctone opvoedingsverantwoordelijken',
                'woonplaats'    => 'Woonplaatsen / wijk van opvoedingsverantwoordelijke',
                'moeders'       => 'Aantal moeders', 
                'vaders'        => 'Aantal vaders', 
                'grootmoeders'  => 'Aantal grootmoeders',
                'grootvaders'   => 'Aantal grootvaders',
                'anderewie'     => 'Aantal andere',
                'wie'           => 'wie ?',
                
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
 * array met alle mogelelijke vragen voor het onderdeel "dienstvoorstelling" + "infoavond/lezing"
 */
               function arrDienstLezing(){
            $arr = array(
                'opvd'          => 'Totaal aantal opvoedingsverantwoordelijke',
                'auto'          => 'Aantal autochtone opvoedingsverantwoordelijken',
                'alloc'         => 'Aantal alloctone opvoedingsverantwoordelijken',
                'orgin'         => 'orgine alloctone opvoedingsverantwoordelijken',
                'woonplaats'    => 'Woonplaatsen / wijk van opvoedingsverantwoordelijke',
                'ouders'        => 'Aantal ouders', 
                'grootouder'    => 'Aantal grootouders', 
                'profs'         => 'Aantal profesioneel',
                'anderewie'     => 'Aantal andere',
                'wie'           => 'wie ?',
                
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
 * array met alle mogelelijke vragen voor het onderdeel "speelkaart"
 */
        function arrSpeelkaart(){
            $arr = array(
                'ontleen'       => 'Totaal aantal gezinnen die iets ontleend hebben',
                'nieuwe'        => 'Totaal aantal nieuwe leden die dag',
                'opvd'          => 'Totaal aantal opvoedingsverantwoordelijke',
                'auto'          => 'Aantal autochtone opvoedingsverantwoordelijken',
                'alloc'         => 'Aantal alloctone opvoedingsverantwoordelijken',
                'orgin'         => 'orgine alloctone opvoedingsverantwoordelijken',
                'woonplaats'    => 'Woonplaatsen / wijk van gezinnen',
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
 * array met alle mogelelijke vragen voor het onderdeel "spelnamdiddag"
 *//*
        function arrSpel(){
            $arr = array(
                'ontleen'       => 'Totaal aantal gezinnen die iets ontleend hebben',
                'nieuwe'        => 'Totaal aantal nieuwe leden die dag',
                'auto'          => 'Aantal autochtone opvoedingsverantwoordelijken',
                'alloc'         => 'Aantal alloctone opvoedingsverantwoordelijken',
                'orgin'         => 'orgine alloctone opvoedingsverantwoordelijken',
                'woonplaats'    => 'Woonplaatsen / wijk van opvoedingsverantwoordelijke',                
                'ouders'        => 'Aantal ouders', 
                'grootouder'    => 'Aantal grootouders', 
                'profs'         => 'Aantal profesioneel',
                'anderewie'     => 'Aantal andere',
                'wie'           => 'wie ?',
                'kind'          => 'Totaal aantal kinderen'
                
            );
            return $arr;
        } 
  * 
  */
               /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 * array met alle mogelelijke vragen voor het onderdeel "andere"
 */
        function arrAndere(){
            $arr = array(
                'auto'          => 'Aantal autochtone opvoedingsverantwoordelijken',
                'alloc'         => 'Aantal alloctone opvoedingsverantwoordelijken',
                'orgin'         => 'orgine alloctone opvoedingsverantwoordelijken',
                'woonplaats'    => 'Woonplaatsen / wijk van opvoedingsverantwoordelijke',                
                'ouders'        => 'Aantal ouders', 
                'grootouder'    => 'Aantal grootouders', 
                'profs'         => 'Aantal profesioneel',
                'anderewie'     => 'Aantal andere',
                'wie'           => 'wie ?',
                'kind'          => 'Totaal aantal kinderen'
                
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
 * genereerd de html code die door gegeven wordt aan de view
 * ondedeel wie komt
 */    
    function genHTML(){
   $strHTML ='<div id="wieKomt"><b>wie komt:</b><br/>';
            
            foreach($this->arrWie() as $keyUit => $arrOpties){
                
                $strHTML .= '<p>';
                if($keyUit == 'subWie'){ $strHTML .=  "<div id='subIdWie' class='sub'>";}                
                foreach($arrOpties as $key => $wie){
                    $strHTML .=  "<label>";
                    $strHTML .=  "<input ";
                    $strHTML .=  "type='radio' ";
                    $strHTML .=  "id='$key' ";
                    $strHTML .=  "name='wieKomt' ";
                    $strHTML .=  "value='$wie' ";
                    if ($keyUit =='mainWie'){$strHTML .=  "onclick=toggle('verantwrlk','subIdWie') ";}
                    $strHTML .=  "/>";
                    $strHTML .=  $wie;
                    $strHTML .=  "</label>";
                }
                if($keyUit == 'subUit'){ $strHTML .=  "</div>";}               
                $strHTML .=  "</p>";
                $strHTML .= '<script>$("#verantwrlk").click(function () {$("#subIdWie").show("fast");});</script>';
                $strHTML .= '<script>$("#mainIdWie").click(function () {$("#subIdWie").hide("fast");});</script>';
                }
                $strHTML.= "</div></div>";
 
            return $strHTML;
    }
     /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 */
    function genHTML2($var){    
        
        switch($var){
            case 'peuter':
                $arr = $this->arrPeuter();
                break;
            case 'ouder':
            case 'groep':
                $arr = $this->arrGroepOuder();
                break;
            case 'dienst':
            case 'info':
                $arr = $this->arrDienstLezing();
                break;
            case 'spelk':
                $arr = $this->arrSpeelkaart();
                break;
            case 'speln':
            case 'andere':
                $arr = $this->arrAndere();
                break;
            break;
        }
        
        $strHTML = '<div id="wieKomt"><b>wie komt:</b><br/>';
        
        foreach($arr as $key => $value)
                {
                    $strHTML .= "<p><label>$value<input type='text' name='$key' class='kijkeens'></label></p>";
                }
                $strHTML .= '</div>';
                
                return $strHTML;
    }
    }
    
    
    
?>
