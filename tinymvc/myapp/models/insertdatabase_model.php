<?php

class Insertdatabase_Model extends TinyMVC_Model{
/**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
    * functie die de het begin van het formulier aanmaakt
 */
    function formstart(){
        $strHTML = '<form action="'.$_SERVER['PHP_SELF'].'" method="POST" >';
        return $strHTML;
    }
    /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
    * functie die de het einde van het formulier + register knop aanmaakt
 */
    function formEnd(){
        $strHTML = '<input type="submit" value="register" id="x" name="register" /></form>';
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
    function createRecord($table,$data){
           $col = array();
                $strCol = " SELECT column_name ";
                $strCol .= " FROM information_schema.columns ";
                $strCol .= " WHERE table_name = '$table' ";
                $strCol .= " ORDER BY ordinal_position ";
                
            $colnames = $this->db->pdo->query($strCol); 
           foreach($colnames as $obj1 => $arr1){foreach($arr1 as $objK1 => $colValue){
               }if($colValue != 'id'){array_push($col, $colValue);}}
        
        $count = 0;
        
        $strSql = "INSERT INTO $table(";
        foreach($col  as $colKey => $colName){
            $strSql.= $colName;
            $count++;
            if($count != count($col)){ $strSql.= ",";}
        }
        $strSql.= ") VALUES (";
        $count = 0;
        foreach($data as $dataKey => $value){
            $strSql.= "'$value'";
            $count++;
            if($count != count($col)){ $strSql.= ",";}
        }
        $strSql.= ")";
 
       $this->db->pdo->exec($strSql); 
        
        return $strSql;
    }       
}
?>