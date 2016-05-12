<?php
/*
     <p><a href=" <?php echo $_SERVER['PHP_SELF']?>/basis">basisinfo</a></p>
 */ 

        
      class Index_Model extends TinyMVC_Model{
          
         static $documentRoot = '/deOpvoedingswinkel';
          
         function arrOptiesHasselt(){
             $arr = array(
                 "basis"        => "basisinformatie",
                 "main1"        => "pedagosische advies",
                 "pae"          => "eerste gesprek",
                 "pav"          => "vervolg gesprek",
                 "main2"        => "ontmoetingen stimuleren",
                 "peuter"       => "peuternestje",
                 "groep"        => "groepbijeenkomst",
                 "speln"        => "spel namiddag",
                 "ouder"        => "oudercursus",
                 "andere"       => "andere",
                 "info"         => "infoavond / lezing",
                 "spelk"        => "speel kaart",
                 "dienst"       => "dienstvoorstelling",
                 "andereopv"    => "andere vormen van opvoedingsondersteuning (nog niet beschikbaar)",
                 "result"       => "resultaten",
                 
             );
             return $arr;
         }
           function arrOptiesDiepenbeek(){
             $arr = array(
                 "basis"        => "basisinformatie",
                 "main1"        => "pedagosische advies",
                 "pae"          => "eerste gesprek",
                 "pav"          => "vervolg gesprek",
                 "ontmoeting"   => "ontmoetingen stimuleren",
                 "info"         => "infoavond / lezing",
                 "spelk"        => "speel kaart",
                 "dienst"       => "dienstvoorstelling",
                 "andereopv"    => "andere vormen van opvoedingsondersteuning (nog niet beschikbaar)",
                 "result"       => "resultaten",
             );
             return $arr;
         }
                function arrOptiesZonhoven(){
             $arr = array(
                 "basis"        => "basisinformatie",
                 "main1"        => "pedagosische advies",
                 "pae"          => "eerste gesprek",
                 "pav"          => "vervolg gesprek",
                 "ontmoeting"   => "ontmoetingen stimuleren",
                 "info"         => "infoavond / lezing",
                 "spelk"        => "speel kaart",
                 "dienst"       => "dienstvoorstelling",
                 "andereopv"    => "andere vormen van opvoedingsondersteuning (nog niet beschikbaar)",
                 "result"       => "resultaten",
             );
             return $arr;
         }
         function genHTML($location){
             switch($location){
                 case 'hasselt':
                     $arr = $this-> arrOptiesHasselt();
                     break;
                 case 'diepenbeek':
                     $arr = $this-> arrOptiesDiepenbeek();
                     break;
                 case 'zonhoven':
                     $arr = $this-> arrOptiesZonhoven();
                     break;
                     
             }
             $strHTML = "";
            foreach($arr as $id => $value){
             switch($id){
                 case 'main1':
                 case 'main2':
                     $idElement = ($id == 'main1' ? '#subHide1' : '#subHide2');
                     $strHTML .= "<div id='$id' class='menu'>$value</div>";
                     $strHTML .= '<script>$("#'.$id.'").click(function () {$("'.$idElement.'").first().show("slow");});</script>';
                     break;
                 case 'pae':
                 case 'pav':
                     if($id == 'pae'){$strHTML.= "<div id='subHide1' >";}
                     $strHTML .= '<div class="subMenuItems"><a href="'.self::$documentRoot.'/index.php/'.$id.'">'.$value.'</a></div>';
                     if($id=='pav'){$strHTML.= '</div><script>$("div#subHide1").mouseleave(function(){$("div#subHide1").hide("slow");});</script>';}
                     break;
                 case 'peuter':
                 case 'groep':
                 case 'speln':
                 case 'ouder':
                 case 'andere':
                     if($id == 'peuter'){$strHTML.= '<div id="subHide2">';}
                     $strHTML .= '<div class="subMenuItems"><a href="'.self::$documentRoot.'/index.php/'.$id.'">'.$value.'</a></div>';
                     if($id=='andere'){$strHTML.= '</div><script>$("div#subHide2").mouseleave(function(){$("div#subHide2").hide("slow");});</script>';}
                     break;
                 default:
                     $strHTML .= '<div class="menuItems"><a href="'.self::$documentRoot.'/index.php/'.$id.'">'.$value.'</a></div>';
                     break;
             } 
            }
            return $strHTML;
         }
         
      }  
        
      
?>
