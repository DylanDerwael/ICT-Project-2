<?php

   class Aardvraag_Model extends TinyMVC_Model{
        
 /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 * array met de hoofd opties  in het onderdeel "Aard van de vraag"
 */
       function arrOpties()
        {
            $opties=array(
              'opvd'     => 'Opvoedingsvraag',
              'voorzien' => 'informatie over een voorziening',
              'info'     => 'informatie over de werking van de opvoedingswinkel',  
            );
            return $opties;     
        }
/**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 * array met alle mogelelijke vragen voor het onderdeel "Opvoeingsvraag"
 */
        function arrDetailVraag(){
            $vraag =array(
            'lichamelijkeopvoeding' => array(
               'lo1' => 'eetproblemen',
               'lo2' => 'snoepen',
               'lo3' => 'zindelijkheid',
               'lo4' => 'bedplassen',
               'lo5' => 'motorische ontwikkeling',
               'lo6' => 'duimzuigen',
               'lo7' => 'anorexia',
               'lo8' => 'tics',
               'lo9' => 'andere',
            ),
            'verstandelijkeontwikkeling'=> array(
                'vo1' => 'taal- en spraakontwikkeling',
                'vo2' => 'intelligentie',
                'vo3' => 'concentratie problemen',
                'vo4' => 'hoogbegaaftheid',
                'vo5' => 'ontwikkelingsstimuleren',
                'vo6' => 'fantasie',
                'vo7' => 'andere',
            ), 
             'socialeontwikkeling'=> array(
                'so1' => 'vrienden',
                'so2' => 'pesten',
                'so3' => 'ruzies',
                'so4' => 'einig kind',
                'so5' => 'relaties stief-zus/broer',
                'so6' => 'contactproblemen',
                
            ),
             'emotioneleontwikkeling'=> array(
                'eo1' => 'temprament',
                'eo2' => 'angsten',
                'eo3' => 'slaapproblemen',
                'eo4' => 'nachtmerries',
                'eo5' => 'faalangst',
                'eo6' => 'rouwverwerking',
                'eo7'=> 'verwerken echtscheiding',
                'eo8' => 'jalozie',
                'eo9' => 'verlegenheid',
                'eo10' => 'zelfbeeld',
                'eo11' => 'weerbaarheid',
                'eo12' => 'psychische problemen',
                'eo13' => 'zelfmoord',
                'eo14' => 'verlieftheid',
                'eo15' => 'andere',
            ),
             'spel- en vrijetijdsbesteding'=> array(
                'sv1' => 'speelgoed',
                'sv2' => 'speelomgeving',
                'sv3' => '(sport)clubs',
                'sv4' => 'zich niet kunnen vermaken',
                'sv5' => 'niet kunen spelen/samenspelen',
                'sv6' => 'computerspelletjes',
                'sv7' => 'tv-kijken',
                'sv8' => 'vakantiebesteding',
                'sv9' => 'vakantiewerk',
                'sv10' => 'andere',
            ), 
             'opvang en school'=> array(
                'oo1' => 'wenen',
                'oo2' => 'niet naar school willen gaan',
                'oo3' => 'leerprestaties',
                'oo4' => 'problemen op school',
                'oo5' => 'relatie ouder-leerkracht',
                'oo6' => 'relatie kind-leerkracht',
                'oo7' => 'huiswerk',
                'oo8' => 'keuze kinderopvang',
                'oo9' => 'beroepskeuze',
                'oo10' => 'andere',
            ), 
             'opvallend gedrag'=> array(
                'og1' => 'overmatig huilen',
                'og2' => 'agressief gedrag',
                'og3' => 'druk gedrag',
                'og4' => 'hyperactief gedrag',
                'og5' => 'aandacht vragen',
                'og6' => 'ongehoorzaamheid',
                'og7' => 'koppigheid',
                'og8' => 'driftbuien',
                'og9' => 'teruggetokken gedrag',
                'og10' => 'liegen',
                'og11' => 'brutaal woordgebruik',
                'og12' => 'stelen',
                'og13' => 'roken',
                'og14' => 'alcohol',
                'og15' => 'gokken',
                'og16' => 'drugs',
                'og17' => 'vandalisme',
                'og18' => 'andere',
            ),
             'opvoeding'=> array(
                'o1' => 'grenzen stellen',
                'o2' => 'straffen',
                'o3' => 'verwennen',
                'o4' => 'verschil in aanpak beide ouders',
                'o5' => 'relatie ouder-kind',
                'o6' => 'opvoedingsaanpak algemeen',
                'o7' => 'beleving ouderschap',
                'o8' => 'tienerouderschap',
                'o9' => 'puberteitsconflicten',
                'o10' => 'omgangsregeling echtscheiding',
                'o11' => 'botsing culturen',
                'o12' => 'relatie grootouders',
                'o13' => 'mishandeling',
                'o14' => 'andere',
            ),  
        );
            return $vraag;
        }
        function arrHoofDVraag(){
            $arr = array(
                'lo' => 'lichamelijke opvoeding',
                'vo' => 'verstandelijke ontwikkeling',
                'so' => 'sociale ontwikkeling',
                'eo' => 'emotionele ontwikkeling',
                'sv' => 'spel- en vrijetijdsbesteding',
                'os' => 'opvang en school',
                'og' => 'opvallend gedrag',
                'op' => 'opvoeding',
            );
            return $arr;
        }
        function arrLichamelijkeOpvoeding (){
             $arr = array(
               'lo1' => 'eetproblemen',
               'lo2' => 'snoepen',
               'lo3' => 'zindelijkheid',
               'lo4' => 'bedplassen',
               'lo5' => 'motorische ontwikkeling',
               'lo6' => 'duimzuigen',
               'lo7' => 'anorexia',
               'lo8' => 'tics',
               'lo9' => 'andere',
            );
           return $arr;          
        }
        function arrVerstandelijkeOntwikkeling(){
              $arr = array(
                'vo1' => 'taal- en spraakontwikkeling',
                'vo2' => 'intelligentie',
                'vo3' => 'concentratie problemen',
                'vo4' => 'hoogbegaaftheid',
                'vo5' => 'ontwikkelingsstimuleren',
                'vo6' => 'fantasie',
                'vo7' => 'andere',
            );
            return $arr;
        }
        function arrSocialeOntwikkeling(){
            $arr = array(
                'so1' => 'vrienden',
                'so2' => 'pesten',
                'so3' => 'ruzies',
                'so4' => 'einig kind',
                'so5' => 'relaties stief-zus/broer',
                'so6' => 'contactproblemen',
                'so7' => 'andere',
                
            );
            return $arr;
        }
        function arrEmotioneleOntwikkeling (){
              $arr = array(
                'eo1' => 'temprament',
                'eo2' => 'angsten',
                'eo3' => 'slaapproblemen',
                'eo4' => 'nachtmerries',
                'eo5' => 'faalangst',
                'eo6' => 'rouwverwerking',
                'eo7'=> 'verwerken echtscheiding',
                'eo8' => 'jalozie',
                'eo9' => 'verlegenheid',
                'eo10' => 'zelfbeeld',
                'eo11' => 'weerbaarheid',
                'eo12' => 'psychische problemen',
                'eo13' => 'zelfmoord',
                'eo14' => 'verlieftheid',
                'eo15' => 'andere',
            );            
            return $arr;
        }
        function arrSpelEnVrijetijdsbesteding(){
              $arr = array(
                'sv1' => 'speelgoed',
                'sv2' => 'speelomgeving',
                'sv3' => '(sport)clubs',
                'sv4' => 'zich niet kunnen vermaken',
                'sv5' => 'niet kunen spelen/samenspelen',
                'sv6' => 'computerspelletjes',
                'sv7' => 'tv-kijken',
                'sv8' => 'vakantiebesteding',
                'sv9' => 'vakantiewerk',
                'sv10' => 'andere',
            ); 
            return $arr;
        }
        function arrOpvangEnSchool(){
              $arr = array(
                'oo1' => 'wenen',
                'oo2' => 'niet naar school willen gaan',
                'oo3' => 'leerprestaties',
                'oo4' => 'problemen op school',
                'oo5' => 'relatie ouder-leerkracht',
                'oo6' => 'relatie kind-leerkracht',
                'oo7' => 'huiswerk',
                'oo8' => 'keuze kinderopvang',
                'oo9' => 'beroepskeuze',
                'oo10' => 'andere',
            );
            return $arr;
        }
        function arrOpvallendGedrag(){
              $arr= array(
                'og1' => 'overmatig huilen',
                'og2' => 'agressief gedrag',
                'og3' => 'druk gedrag',
                'og4' => 'hyperactief gedrag',
                'og5' => 'aandacht vragen',
                'og6' => 'ongehoorzaamheid',
                'og7' => 'koppigheid',
                'og8' => 'driftbuien',
                'og9' => 'teruggetokken gedrag',
                'og10' => 'liegen',
                'og11' => 'brutaal woordgebruik',
                'og12' => 'stelen',
                'og13' => 'roken',
                'og14' => 'alcohol',
                'og15' => 'gokken',
                'og16' => 'drugs',
                'og17' => 'vandalisme',
                'og18' => 'andere',
            );
            return $arr;
        }
        function arrOpvoeding(){
            $arr = array(
                'o1' => 'grenzen stellen',
                'o2' => 'straffen',
                'o3' => 'verwennen',
                'o4' => 'verschil in aanpak beide ouders',
                'o5' => 'relatie ouder-kind',
                'o6' => 'opvoedingsaanpak algemeen',
                'o7' => 'beleving ouderschap',
                'o8' => 'tienerouderschap',
                'o9' => 'puberteitsconflicten',
                'o10' => 'omgangsregeling echtscheiding',
                'o11' => 'botsing culturen',
                'o12' => 'relatie grootouders',
                'o13' => 'mishandeling',
                'o14' => 'andere',
            );
            return $arr;
        }
/**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael, David Defossez
 * @copyright (c)       2013, KHLIM-ict
 *
 * genereerd de html code die door gegeven wordt aan de view
 * ondedelen
 *      -Aard van de Vraag
 *      -Opvoedingsvaag
 */  
        function genHTMLoud($control)
        {
           $strHTML ='<div id="vragen"><b>aard van de vraag:</b><br/>';
           $strHTML .= '<p>';
            foreach($this->arrOpties() as $keyOp => $value)
                {
                    $strHTML .=  "<label>";
                    $strHTML .=  "<input type='checkbox' ";
                    $strHTML .=  "id='$keyOp' ";
                    $strHTML .=  "name='$keyOp' ";
                    $strHTML .=  "value='1' ";
                    if($keyOp != 'opvd' ){$strHTML .=  "onclick=toggle('opvd','subVraag') ";}
                    $strHTML .=  "/>";
                    $strHTML .=  $value;
                    $strHTML .=  "</label>";
                    if($keyOp == 'opvd' ){$strHTML .= "<input type='button' value='details' onclick=toggle('opvd','subVraag') />";} 
                }
                $strHTML .=  "</p>";
                
            $strHTML .= "<div id='subVraag' class='sub'><b>Gedetaileerde vraag</b><br />";
            $subID = 200;
            $hVraagID = 1000;
               foreach($this->arrDetailVraag() as $keyVraag => $arrVraag){
                   $strHTML.= "<p><label>";
                   $strHTML.= "<input type='checkbox' ";
                   $strHTML.= "id='$hVraagID' ";
                   $strHTML.= "onclick=toggle('";
                   $strHTML.= "$hVraagID";
                   $strHTML.= "','";
                   $strHTML.=  "$subID";
                   $strHTML.= "') name='$keyVraag' ";
                   $strHTML.= "value='$keyVraag'";
                   $strHTML.= " />";
                   $strHTML.= "$keyVraag";
                   $strHTML.= "</label>";
                   $strHTML.= "<div id='$subID' class='sub'>";
                   foreach($arrVraag as $key =>$vraag){
                       $strHTML.="<label>";
                       $strHTML.="<input type='checkbox'";                      
                       $strHTML.= "name='$key' ";
                       $strHTML.= "value='$vraag' ";
                       $strHTML.= "id='$key' ";
                       $strHTML.= " />";
                       $strHTML.= "$vraag";
                       $strHTML.="</label>";
                   }
                   $strHTML.= "</div>";
                   $strHTML.= "</p>";
                   
                   $subID++;
                   $hVraagID++;
               }
            $strHTML .= "</div>";// div einde van de gedetalleerde vragen 
           
            $strHTML.= "</div>";//einde van de div aard van de vraag
            return $strHTML;
        }
        
        function genHTML($control){
           $strHTML='<div id="vragen"><b>aard van de vraag:</b><br/>';
           $strHTML.= '<p>';
            foreach($this->arrOpties() as $keyOp => $value)
                {
                    $strHTML .=  "<label>";
                    $strHTML .=  "<input type='checkbox' ";
                    $strHTML .=  "id='$keyOp' ";
                    $strHTML .=  "name='$keyOp' ";
                    $strHTML .=  "value='1' ";
                    if($keyOp == 'opvd' ){$strHTML .=  "onclick=toggle('opvd','subVraag') ";}
                    $strHTML .=  "/>";
                    $strHTML .=  $value;
                    $strHTML .=  "</label>";
                   // if($keyOp == 'opvd' ){$strHTML .= "<input type='button' value='details' onclick=toggle('opvd','subVraag') />";}                   
                }
                $strHTML .=  '</p><div id="subVraag" class="sub">';
                
                
                $int = 1;
                $string = 'vragen';
                foreach ($this->arrHoofDVraag() as $Hkey => $Hvraag){
                    switch($Hkey){
                      case 'lo':
                          $arr = $this->arrLichamelijkeOpvoeding();
                          break;
                      case 'vo':
                          $arr= $this->arrVerstandelijkeOntwikkeling();
                          break;
                      case 'so':
                          $arr= $this->arrSocialeOntwikkeling();
                          break;
                      case 'eo':
                          $arr = $this->arrEmotioneleOntwikkeling();
                          break;
                      case 'sv':
                          $arr = $this->arrSpelEnVrijetijdsbesteding();
                          break;
                      case 'os':
                          $arr = $this->arrOpvangEnSchool();
                          break;
                      case 'og':
                          $arr = $this->arrOpvallendGedrag();
                          break;
                      case 'op':
                          $arr = $this->arrOpvoeding();
                          break;
                    }
                    
                    $strHTML.= '<div>';
                    $strHTML.= '<label><input id="'.$Hkey.'" name="'.$Hkey.'" type="checkbox"  onclick=toggle("'.$Hkey.'","'.$string.$int.'") />'.$Hvraag.'</label>';
                    $strHTML.= '<div id="'.$string.$int.'" class="sub">';
                    foreach($arr as $arrKey => $arrValue){
                        $strHTML.= '<div><label><input type="checkbox" name="'.$arrKey.'" id="'.$arrKey.'" value="'.$arrValue.'"/>'.$arrValue.'</label></div>';                        
                    }
                    $strHTML.= '</div></div>';
                    
                  $int++;
                }
                $strHTML.='</div></div>';
             
           return $strHTML; 
        }
   }
 
 
    
?>
