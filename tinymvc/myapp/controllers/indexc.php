<?php
        // controller voor de index pagina
        class Indexc_Controller extends TinyMVC_Controller{
           
            function index(){
                session_start();
                $this->load->model('Index_Model','objIndex');
                $this->load->model('Datum_Model','objDate');
                $this->load->model('Layout_Model','layout');
                
                //libery aanroep
                $this->load->library('Login','objKeepResult');
                
                $this->load->script('htmlhelpers');
                
                $index  = $this->objIndex->genHTML($_SESSION["loc"]);
                $footer = $this->layout->footer();
                $jaar   = $this->objDate->GetYear();
                $maand  = $this->objDate->GetMonth();
                $header = $this->layout->header($_SESSION["loc"]);
                
                
                $this->objKeepResult->Result($jaar,$maand);
                $this->view->assign("titel","index");
                $this->view->assign("html",$index);
                $this->view->assign("header",$header);
                $this->view->assign("footer",$footer);
                
                   //uitloggen
                if (isset($_POST['logoff'])){
                    header('Location:  /deOpvoedingswinkel/index.php');
                    $this->objlog->LogOff();  
                }
                
                $this->view->display('html_view');
            }
            
        }
?>
