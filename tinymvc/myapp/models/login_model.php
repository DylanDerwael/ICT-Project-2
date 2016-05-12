<?php
       class Login_Model extends TinyMVC_Model{
       
           function genHTML(){
      
       $strHTML = '
           <form action="'.$_SERVER['PHP_SELF'].'" method="post">
           <table align="center" border="0">
             <tr>
                <th colspan="2" align="left">Aanmelden:</th>
             </tr>
             <tr>             
                <td><label><input type="radio" value="hasselt" name="location">Hasselt</label></td>
             </tr>
             <tr>
                <td><label><input type="radio" value="diepenbeek" name="location">Diepenbeek</label></td>
             <tr>             
                <td><label><input type="radio" value="zonhoven" name="location">Zonhoven</label></td>
             </tr>
             <tr>
                <td><input type="password" name="password" /></td>
                <td><input type="submit" id="login" value="login" name="login" style="float: right; width: 60px;"/></td>
             </tr>
             <tr>
                
             </tr>
           </table>
           </form>';  
       return $strHTML; 
    }
    function logout(){
        $strHTML = '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
        $strHTML.= '<input type="button" value="log uit" />';
        $strHTML.= '</form>';
        return $strHTML;
    }
    function check($user,$pass){
        $sql = "SELECT COUNT(*) FROM login WHERE unaam ='".$user."' AND pass = '".$pass."';";
        $match = $this->db->pdo->query($sql);
        foreach($match as $objKey => $value){foreach($value as $objkey2 => $value2){}
        
        if ($value2 <= 0) { 

            return false;
        } else {

        return true;
        
            }   
        
    }
       }}
?>
