<?php
class Gegclient_Model extends TinyMVC_Model
{
/**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		David Defossez
 * @copyright (c)       2013, KHLIM-ict
 *
 */
    function arrGezinsSituatie()
        {
            $opties=array(
                        'TweeOudergezin' => 'Twee-oudergezin (Eigen biologische ouders)',
                        'Eenoudergezin' => 'Eenoudergezin',
                        'NieuwSamengesteld' => 'Nieuw samengesteld gezin',
                        'Adoptiegezin' => 'Adoptiegezin',    
                        'Pleeggezin' => 'Pleeggezin',    
                        'AndereGezinsvorm' => 'Andere gezinsvorm',    
                        'Nvt' => 'Niet van toepassing',    
                        'onbekend' => 'Onbekend',    
                        );
            return $opties;     
        }
        /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		David Defossez
 * @copyright (c)       2013, KHLIM-ict
 *
 */
    function arrGezinsGrootte()
        {
            $grootte=array(
                        '1'  => '1',
                        '2'  => '2',
                        '3'  => '3',
                        '4'  => '4',    
                        '5'  => '5',   
                        '6'  => '6',    
                        '7'  => '7',    
                        '7+' => '7+',    
                        );
            return $grootte;     
        }    
/**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		David Defossez
 * @copyright (c)       2013, KHLIM-ict
 *
 */
    function genHTML($afkomst, $kind)
        {
             $strHTML ='<div id="gegSituatie"><b><p>Gegevens over de client:</p></b>';
                    //--- gedeelte "gezinssituatie" ---
                    $strHTML .='<div id="gegSituatie"><b><p>Gezinssituatie:</p></b>';
                    foreach($this->arrGezinsSituatie() as $keyopties => $valueOpties)
                        {                                
                            $strHTML .=  "<label>";
                            $strHTML .=  "<input ";
                            $strHTML .=  "type='radio' ";
                            $strHTML .=  "id='$keyopties' ";
                            $strHTML .=  "name='gegclient' ";
                            $strHTML .=  "value='$keyopties' ";                    
                            $strHTML .=  "/>";
                            $strHTML .=  $valueOpties;
                            $strHTML .=  "</label>";                
                        }
                        $strHTML.= "</div>";   
                        
                        
                        //--- gedeelte "gezinsgrootte" ---
                        $strHTML.= "<div id='gegGezinsgrootte'><p><b>Gezinsgrootte:</b></p>";
                        $strHTML.= "<select id='grootte' name='grootte'>";                        
                        foreach($this->arrGezinsGrootte()as $keyGrootte => $valueGrootte)
                            {                            
                                $strHTML.= "<option id='$keyGrootte' value='$keyGrootte' name='$keyGrootte'>";
                                $strHTML.= $valueGrootte;
                                $strHTML.= "</option>";
                            }
                        $strHTML.= "</select>";                            
                        $strHTML.= "</div>";   
                        
                        
                        //--- gedeelte "Maatschappelijk kwetsbaar gezin" ---                        
                        $strHTML.= "<div id='kwetsbaar'><p><b>Maatschappelijk kwetsbaar gezin:</b></p>";
                        $strHTML.= "<label><input type='radio' id='ja' name='keuze' value='ja' />Ja</label> ";
                        $strHTML.= "<label><input type='radio' id='neen' name='keuze' value='neen' />Neen</label> ";
                        $strHTML.= "</div>";      
                        
                        
                        //--- gedeelte "Afkomst" ---                       
                        $strHTML.= "$afkomst"; 
                        
              $strHTML.= "</div>";  
                        //--- gedeelte "Gegevens over het kind/jeugdige" ---                       
                        $strHTML.= "$kind"; 
                     
                        return $strHTML;
        }
        
}
?>