<?php
    class Basisresult_Controller extends TinyMVC_Controller{
     
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
        $this->load->model('Detailresult_Model','objResult');
        $this->load->model('Datum_Model','objDate');
        $this->load->model('Layout_Model','layout');
        
        //libery aanroep
        $this->load->library('Login','objKeepResult');
   
        // variablen worden geladen met data 
        $view       = $this->objResult->genHTML($_SESSION["jaar"],$_SESSION["maand"]); 
        $footer     = $this->layout->footer();
        $header     = $this->layout->header($_SESSION["loc"]);
          
        
        
        // variablen aan view geven    
        $this->view->assign('titel','statestieken');
        $this->view->assign('html',$view);
        $this->view->assign("header",$header);
        $this->view->assign("footer",$footer);
        
           //uitloggen
        if (isset($_POST['logoff'])){
            header('Location:  /deOpvoedingswinkel/index.php');
            $this->objlog->LogOff();  
        }
        //update knop
          
        $this->view->display('html_view');
        }
   
    }
?>
