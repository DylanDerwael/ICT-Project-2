<?php
    class Result_Controller extends TinyMVC_Controller{
         /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 */
        function index(){
        session_start();
        
        // aanroepen modelen
        $this->load->model('Result_Model','objResult');
        $this->load->model('Datum_Model','objDate');
        $this->load->model('Layout_Model','layout');
        
        //libery aanroep
        $this->load->library('Login','objKeepResult');
   
        // variablen worden geladen met data 
        $view       = $this->objResult->genHTML($_SESSION["jaar"],$_SESSION["maand"]); 
        $begin      = $this->objResult->formStart();
        $einde     = $this->objResult->formEnd();
        $footer     = $this->layout->footer();
        $header     = $this->layout->header($_SESSION["loc"]);
            
        //uitloggen
        if (isset($_POST['logoff'])){
            header('Location:  /deOpvoedingswinkel/index.php');
            $this->objlog->LogOff();  
        }
        
     if(isset($_POST['update'])){
           $jaar = $_POST['jaar'];
           $maand = $_POST['maand'];
           $this->objKeepResult->Result($jaar,$maand);
           $view = $this->objResult->genHTML($_SESSION["jaar"],$_SESSION["maand"]); 
        }
        //terug knop
        if (isset($_POST['back'])){header('Location:  /deOpvoedingswinkel/index.php/indexc'); }
        
        
        // variablen aan view geven    
        $this->view->assign('titel','statestieken');
        $this->view->assign('html',$begin.$view.$einde);
        $this->view->assign("header",$header);
        $this->view->assign("footer",$footer);
        
        
        //update knop
          
        $this->view->display('html_view');
        }
        
    }
?>
