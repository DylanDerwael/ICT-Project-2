<?php
class Werkvorm_Model extends TinyMVC_Model{
 /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		David Defossez
 * @copyright (c)       2013, KHLIM-ict
 *
 * array met alle mogelelijke vragen voor het onderdeel "werkvorm"
 */
    function arrWerkvorm()
    {
            $werkvorm =array(
            'mainWerk' => array(
               'Individueel_adviesgesprek' => 'Individueel adviesgesprek (spreekuur oo)',
               'Cursus_in_groep'           => 'Cursus in groep',
               'Main_Andere'                    => 'Andere',
            ),
            'subWerk'=> array(
                'Methodiek_blokland'       => 'Methodiek blokland',
                'Triple_P'                 => 'Triple P',
                'Sub_Andere'                   => 'Andere',
            ),  
        );
            return $werkvorm;
    }
      /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Jef Casters
 * @copyright (c)       2013, KHLIM-ict
 * 
 * array met alle mogelelijke vragen voor het onderdeel "werkvorm"
 */    
     function arrWerkvorm2()
    {
        $werkvorm =array(
            
               'Voorlichtingsmoment'                    => 'Voorlichtingsmoment (éénmalig)',
               'Ervaringsgerichte_groepsouderwerking'   => 'Ervaringsgerichte groepsouderwerking',
               'Ontmoetingsmomenten'                    => 'Ontmoetingsmomenten',
               'training'                               => 'training of cursus',
               'Andere'                                 => 'Andere',
        );
            return $werkvorm;
    }
  /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		David Defossez
 * @copyright (c)       2013, KHLIM-ict
 * 
 * genereert de html code die doorgegeven wordt aan de view
 */    
    function genHTML()
    {
            $strHTML ='<div id="werkvorm"><b>Aanbod werkvorm:</b><br/>';
            
            foreach($this->arrWerkvorm() as $keyWerk => $arrOpties)
                {                
                    
                    if($keyWerk =='subWerk'){ $strHTML .=  "<div id='subWerkvorm' class='sub'>";}
                    foreach($arrOpties as $werkvorm => $value2)
                    {
                        $strHTML .=  "<label>";
                        $strHTML .=  "<input ";
                        $strHTML .=  "type='radio' ";
                        $strHTML .=  "id='$werkvorm' ";
                        $strHTML .=  "name='werkvorm' ";
                        $strHTML .=  "value='$werkvorm' ";
                        if ($keyWerk =='mainWerk'){$strHTML .=  "onclick=toggle('Individueel_adviesgesprek','subWerkvorm') ";}
                        $strHTML .=  "/>";
                        $strHTML .=  $value2;
                        $strHTML .=  "</label>";
                        if($keyWerk =='mainWerk' && $werkvorm == 'Main_Andere')
                            {
                                $strHTML .= "<input type='input' name='Main_WerkvormAndere_txt'/>";                            
                            }
                            else if ($keyWerk =='subWerk' && $werkvorm == 'Sub_Andere')
                            {
                                $strHTML .= "<input type='input' name='Sub_WerkvormAndere_txt'/>";                                                                                        
                            }
                    }                    
                    if($keyWerk == 'subWerk'){ $strHTML .=  "</div>";}
                              
                }
                $strHTML.= "</div>";
            
            
            return $strHTML;
   
    }
          /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Jef Casters
 * @copyright (c)       2013, KHLIM-ict
 * 
 * genereert de html code die doorgegeven wordt aan de view
 */    
      function genHTML2()
    {
            $strHTML ='<div id="werkvorm"><b>Aanbod werkvorm:</b><br/>';

            foreach($this->arrWerkvorm2() as $keyWerk => $Value)
            {
               $strHTML .="<label><input type='checkbox' id='";
               $strHTML .=$keyWerk;
               $strHTML .="' name='".$keyWerk."' value='".$keyWerk."'onclick=toggle('$keyWerk','sub";
               $strHTML .=$keyWerk;
               $strHTML .="')>";
               $strHTML .=$Value;
               $strHTML .="</label>";

               
               $strHTML .="<div class='sub' id='sub";
               $strHTML .=$keyWerk;
               $strHTML .="'>";
               $strHTML .="<input type='text' name='sub";
               $strHTML .=$keyWerk;
               $strHTML .="'/>";
               $strHTML .="</div>";
               $strHTML .="<br/>";

            }
                $strHTML.= "</div>";


            return $strHTML;

    }
       
}
?>
