<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		David Defossez, Dylan Derwael & Jef Casters
 * @khlim
 */

class Default_Controller extends TinyMVC_Controller
{
  function index()
  {
    session_start();
    $this->load->model("Login_Model","objLogin");
    $this->load->library('Login','objlog');
    
    $login = $this->objLogin->genHTML();
    
    $this->view->assign('html',$login);
    
    if (isset($_POST['login'])){
         
                $loc = $_POST['location'];
                $pass = $_POST['password'];
         $test = $this->objLogin->check($loc,$pass);  
                if($test== true){
                    $this->objlog->LogIn($loc,$pass);
                     header('Location:  /deOpvoedingswinkel/index.php/indexc');
                }
        }
    $this->view->display('index_view');
  }
}

            

?>
