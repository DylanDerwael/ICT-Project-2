<?php
    class Detailresult_Model extends TinyMVC_Model{
 /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 */          
        public $arrVol = array();
        
        //functie heeft geen nut enkel overzicht van alle data die zichtaar moet worden
        // key is naam van de data die wordt opgehaald , value is de colnaam waar
        //de date in weg geschreven wordt
        
        function data(){
            $arr = array(
                //uitvoerder gedeelte
                'uitvoerder'    => 'totaal',
                'medewerker'    => 'uitvoerder',
                'vrijwilliger'  => 'uitvoerder',
                'stagair'       => 'uitvoerder',
                'partner'       => 'uitvoerder',
                'K&G'           => 'uitvoerder',
                'CAW'           => 'uitvoerder',
                'OCMW'          => 'uitvoerder',
                'JAC'           => 'uitvoerder',
                'andere'        => 'uitvoerder',
                //bezoeker
                'bezoeker'      => 'nvt',
                'opvoedingsverantwoordelijke'=> 'bezoeker',
                'moeder'        => 'bezoeker',
                'vader'         => 'bezoeker',
                'stiefouder'    => 'bezoeker',
                'beide ouders'  => 'bezoeker',
                'grootouder(s)' => 'bezoeker',
                'geen gegevens' => 'bezoeker',
                'student'       => 'bezoeker',
                'opvoedingsondersteuner' => 'bezoeker',
                'andere'        => 'bezoeker',
                //contact
                'contact'       => 'nvt',
                'contact in de winkel'  => 'contact',
                'telefoon'      => 'contact',
                'email'         => 'contact',
                //herkomst
                'autochtoon'    => 'afkomst',
                'allochtoon'    => 'afkomst',
                //woonplaats
                'hasselt'       => 'buiten_Hasselt_locatie',
                'nietHasselt'   => 'buiten_Hasselt_locatie',
                //leeftijdsgroep van het kind
                'leeftijd groep'=> 'nvt',
                '0-2'           => 'leeftijd',
                '3-5'           => 'leeftijd',
                '6-12'          => 'leeftijd',
                '13-17'         => 'leeftijd',
                '18+'           => 'leeftijd',
                //geslacht van het kind
                'geslacht kind' => 'nvt',
                'man'           => 'geslacht',
                'vrouw'         => 'geslacht',
                //vragen
                'vragen'        => 'nvt',
                'opvoedingsvraag'   => 'opvoedingsvraag',
                'info voorziening'  => 'info_voorziening',
                'info opvoedingswinkel' => 'info_opvoedwinkel',
                //aanbod
                'aanbod'        => 'aanbod',
                'folder'        => 'folder_mee',
                'andere info'   => 'andere_info',
                'eigen infotheek' => 'infotheek',
                'follow up'     => 'follow_up',
                'zelf informatie'=> 'zelf_info',
                'pa gepland'    => 'pa',
                'doorverwijzing opvoedwinkel' => 'doorverwijzing',
                'doorverwijzing hulp verlening' =>'hulp',
                //hulp verleningen waarnaar doorverwezen word
                'CLB'           => 'hulpverlening',
                'CGGZ'          => 'hulpverlening',
                'VAPH'          => 'hulpverlening',
                'BJB'           => 'hulpverlening',
                'AWW'           => 'hulpverlening',
                'K&G'           => 'hulpverlening',
                'andere'        => 'hulpverlening',
          
            );
            
            
        }
        
        function mainFields(){
            /*
             * hier worden de aantal locaties waar dat er data van wegegeschrevn wordt opgenomen
             * bv
             * enkel hasselt
             * diepenbeek + zonhoven
             * hasselt+ diepenbeek
             * hasselt + zonhoven 
             * 
             * kortom welke locaties allemaal opgeslagen zijn voor dat jaar aan data
             * verschillen gaan er zijn bij 
             * ontmoetingen stimuleren
             * peuternestje
             * groepsbijeenkomst
             * spelnamiddag
             * oudercursus
             */
        }
        
        function getUitvoerder($table,$jaar,$maand,$locatie){
            $opties =array(
                'medewerker',
                'vrijwilliger',
                'stagair',
                'partner',
                'K&G',
                'CAW',
                'OCMW',
                'JAC',
                'andere',
            );
            
            
        }
    }
?>
