<?php
    class Result_Model extends TinyMVC_Model{
                 /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 */
        static $documentRoot = '/deOpvoedingswinkel';
        
        function arrRow(){
            $row = array(
                'type'                  => 'type dienst verlening',
                'basisinfo'             => 'basisinformatie',
                'pae'                   => 'eerste gesprekken',
                'pav'                   => 'verolg gespreken',
                'ontmoeting'            => 'ontmoetingen stimuleren',
                'infoavond'             => 'infoavond/lezing',
                'speelkaart'            => 'speelkaart',
                'spelnamiddag'          => 'spelnamiddag',
                'dienstvoorstelling'    => 'dienstvoorstelling',
                'groepsbijeenkomst'     => 'groepsbijeenkomst',
                'peuter'                => 'peuternestje',
                //'andere'                => 'andere vormen opvoedingswinkel',
                //'vraag'                 => 'opvoedings vragen',
            );
            return $row;
        }
        function arrDetailRow(){
         /*
          * array opbouwen nadat alle elementen aangemaakt zijn 
          */   
            return ;
        }
        
        function  arrCol(){
            $col = array(
                'TotJaar'   => 'jaar',
                'TotMaand'  => 'maand',
                'GemMaand'  => 'gem/maand',
                'Vr'        => '% voormiddag',
                'Na'        => '% namiddag',
             );
            return $col;
        }
        /*
            function getAjaar(){
            $sql = "SELECT DISTINCT jaar FROM basisinfo GROUP BY jaar DESC;";
            
            $data = $this->db->pdo->query($sql);
            
            $strHTML= "<select>";
            foreach($data as $objKey => $value)
            {
               foreach($value as $objkey2 => $value2){ 
                
               }
               $strHTML .= "<option value='$value2'>";
                $strHTML .= $value2;
               $strHTML .= "</option>";
            }
            $strHTML.= "</select>";
           
            return $strHTML;
        }
        function getAmaand(){
            $sql = "SELECT DISTINCT maand FROM basisinfo GROUP BY maand DESC;";
            
            $data = $this->db->pdo->query($sql);
            
            $strHTML= "<select>";
            foreach($data as $objKey => $value){foreach($value as $objkey2 => $value2){}
               $strHTML .= "<option value='$value2'>";
               $strHTML .= $value2;
               $strHTML .= "</option>";
            }
            $strHTML.= "</select>";
           
            return $strHTML;
        }
         * */
        
        function TotJaar($table,$jaar,$maand){
             $sql = "SELECT COUNT(*) FROM $table WHERE jaar='$jaar' ;";
             $data = $this->db->pdo->query($sql);  
             foreach($data as $test => $test2){foreach($test2 as $objkey => $value){}}
             
             return $value;
             
        }
        function TotMaand($table,$jaar,$maand){
             $sql = "SELECT COUNT(*) FROM $table WHERE jaar='$jaar' AND maand='$maand' ;";
             $data = $this->db->pdo->query($sql);    
             foreach($data as $test => $test2){foreach($test2 as $objkey => $value){}}
             
             return $value;    
        }
        function GemMaand($table,$jaar,$maand){
            $sql = "SELECT AVG(gem)FROM (SELECT COUNT( * ) AS gem, $jaar FROM $table GROUP BY jaar, maand)gemMaand";
            $data = $this->db->pdo->query($sql); 
            foreach($data as $obj1 => $arr1){foreach($arr1 as $objK1 => $value){$gem = $value;}}
            $gem = round($gem, 0, PHP_ROUND_HALF_UP);
            return $gem;
          
        }
        function Vr($table,$jaar,$maand){
            $totVR; 
            $totR; 
           
             $sql = "SELECT COUNT(*) FROM $table WHERE vrna = 'voormiddag'";
             $sqlTotal= "SELECT COUNT(*) FROM $table";
             $data = $this->db->pdo->query($sql); 
             $totData = $this->db->pdo->query($sqlTotal);
             foreach($data as $obj1 => $arr1){foreach($arr1 as $objK1 => $value){$totVR = $value;}}
             foreach($totData as $obj2 => $arr2){foreach($arr2 as $objk1 => $valueTot){$totR = $valueTot;}}
             $modelo = ($totVR/$totR)*100;
             $modelo = round($modelo, 0, PHP_ROUND_HALF_UP);
             $modelo.= '%';
          
             return $modelo; 
            
        }
          function Na($table,$jaar,$maand){
            $totVR; 
            $totR;  
            
             $sql = "SELECT COUNT(*) FROM $table WHERE vrna = 'namiddag'";
             $sqlTotal= "SELECT COUNT(*) FROM $table";
             $data = $this->db->pdo->query($sql); 
             $totData = $this->db->pdo->query($sqlTotal);
             foreach($data as $obj1 => $arr1){foreach($arr1 as $objK1 => $value){$totVR = $value;}}
             foreach($totData as $obj2 => $arr2){foreach($arr2 as $objk1 => $valueTot){$totR = $valueTot;}}
             $modelo = ($totVR/$totR)*100;
             $modelo = round($modelo, 0, PHP_ROUND_HALF_UP);
             $modelo.= '%';
          
             return $modelo; 
        }
    function formStart(){
        $strHTML = '<form action="'.$_SERVER['PHP_SELF'].'" method="POST" >';
        return $strHTML;
        
    }

    function formEnd(){
        $strHTML = '<input type="submit" value="update" id="x" name="update" /></form>';
        return $strHTML;
    }
        
        function genHTML($jaar, $maand){
            $row = $this->arrRow();
            $col = $this->arrCol();
            
            $strHTML= "<div id='result'><table>";
            
            foreach($row as $objRow => $rValue){
                $strHTML.= ($objRow == 'type' ? '<thead>' : '');
                $strHTML.= "<tr><td class ='opties' id='$objRow'>$rValue</td>";
                foreach($col as $objCol => $cValue){
                    $strHTML.= "<td class='opties' id='";
                    switch($objRow){ // deze switch maakt een soort van tabel header aan
                        case 'type':
                                switch ($objCol) {
                                    case 'TotJaar':
                                            $strHTML.= "$objCol' name='year'><input class='textResult' type='textbox' name='jaar' value='$jaar'/>";
                                        break;
                                    case 'TotMaand':
                                        $strHTML.= "$objCol' name='month'><input class='textResult' type='textbox' name='maand' value='$maand'/>";
                                        break;
                                    default:
                                        $strHTML.= "$objCol'>$cValue";
                                        break;
                                }
                            break;
                        default: // inhoud van default zorgt er voor dat de resulatan uit de database gelezen kunnen worden
                                    $strHTML.= "$objRow.$objCol'>";
                            $strHTML .= $this->$objCol($objRow,$jaar, $maand);
                            break;                           
                    }
                    $strHTML.="</td>";
                }
                $strHTML.= "</tr>";
                $strHTML.= ($objRow == 'type' ? '</thead>' : '');
            }
            $strHTML.= "</table></div>"; 

            return $strHTML;
        }
        
    }
?>
