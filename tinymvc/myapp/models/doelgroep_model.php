<?php
class Doelgroep_Model extends TinyMVC_Model{
 /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Jef Casters
 * @copyright (c)       2013, KHLIM-ict
 *
 * array met alle mogelelijke vragen voor het onderdeel "uitvoerder"
 */



    function arrUitvoerder()
    {
        $werkvorm =array(

               1 =>'Opvoedinngsverantwoordelijke',
               2 =>'Intermediairen',
            );

            return $werkvorm;
    }

    function arrSpecifiek()
    {
        $specifiek =array(
            'een_ouder'      => 'Eén oudergezinnen',
            'kwetsbaar'      => 'Maatschappelijk kwetsbare gezinnen',
            'samengesteld'   => 'Nieuw Samengestelde Gezinnen',
            'allochtonen'    => 'Allochtonen gezinnen',
            'grootouders'    => 'Grootouders',
            'andere'         => 'Andere',

        );

        return $specifiek;
    }


  /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 * genereerd de html code die door gegeven wordt aan de view
 * ondedelen
 *      -uitvoerder
 */
    function genHTML(){
              $strHTML ='<br /><div id="werkvorm"><b>Aanbod werkvorm:</b><br/>';

            foreach($this->arrUitvoerder() as $keyWerk => $Value)
            {
               $strHTML .="<label><input type='checkbox' id='";
               $strHTML .=$keyWerk;
               $strHTML .="' name='werkvorm' value='".$keyWerk."'onclick=toggle('$keyWerk','sub";
               $strHTML .=$keyWerk;
               $strHTML .="')>";
               $strHTML .=$Value;
               $strHTML .="</label>";

               if($Value=="Opvoedinngsverantwoordelijke")
               {
               $strHTML .="<div class='sub' id='sub";
               $strHTML .=$keyWerk;
               $strHTML .="'>";
               $strHTML .='<label><input type="checkbox" name="vader" value="vader">Vader</label>';
               $strHTML .='<label><input type="checkbox" name="moeder" value="moeder">moeder</label>';
               $strHTML .="</div>";
               $strHTML .="<br/>";
               }

            }
                $strHTML.= "</div>";


            return $strHTML;
    }



    function genHTML2()
    {
        $strHTML    =   '<div id="aantal deelnemer"> Aantal deelnemers: ';
        $strHTML    .=  '<input type="text" name="AantalDeelnemers"/></div>';
        return $strHTML;
    }

    function genHTML3()
    {
       $strHTML =   '<div id="doelgroep"><b>Specifieken Doelgroepen</b><br/>';
       $strHTML .=  '<label><input type="radio" name="janee" value="ja" id="ja" onclick=toggle("ja","specifiek")>ja</label>';
       $strHTML .=  '<label><input type="radio" name="janee" value="nee" id="nee" />nee</label>';
       $strHTML .=  '<div class="sub" id="specifiek">';
       $i=0;
       foreach($this->arrSpecifiek() as $key => $Value)
       {
           if($i%2==2)
           {
               $strHTML .= '<br/>';
           }
           $strHTML .= '<label><input type="checkbox" id="';
           $strHTML .= $key;
           $strHTML .='" name="'.$key.'"';
            if($key=="andere")
            {
            $strHTML .='"onclick=toggle("andere","subandere")';
            }
           $strHTML .='/>';
           $strHTML .= $Value;
           $strHTML .= '</label>';
           if($key == "andere"){$strHTML .= '<input id="subandere" type="text" name="ander_txt"/>';}
           $i=$i+1;
       }
/*
       $strHTML .= '<div id="subandere" class="sub">';
       $strHTML .= '<input type="text" name="andere_text" />';
       $strHTML .=  '</div>
 * 
 *
 */
       $strHTML .= '</div></div>';
       



       return $strHTML;
    }
}
?>
