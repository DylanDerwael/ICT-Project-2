<?php
class Spelk_Controller extends TinyMVC_Controller{
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
         
        $this->load->model('Titel_Model','objTitel');
        $this->load->model('Uitvoerder_Model','objUitvoerder');
        $this->load->model('Datum_Model','objDatum');
        $this->load->model('Wie_Model','objWie');
        $this->load->model('Layout_Model','layout');
        
        $this->load->script('htmlhelpers');
        
        $this->load->model('InsertDatabase_Model','db');
        
        $begin      = $this->db->formStart();
        $einde      = $this->db->formEnd();
        $datum      = $this->objDatum->genHTML();
        $wie        = $this->objWie->genHTML2('spelk');
        $uitvoerder = $this->objUitvoerder->genHTML();
        $footer     = $this->layout->footer();
        $header     = $this->layout->header($_SESSION["loc"]);
        
        
        $this->view->assign("titel","speelkaart");
        $this->view->assign('html',$begin.$uitvoerder.$datum.$wie.$einde);
        $this->view->assign("header",$header);
        $this->view->assign("footer",$footer);
        
                //uitloggen
        if (isset($_POST['logoff'])){
            header('Location:  /deOpvoedingswinkel/index.php');
            $this->objlog->LogOff();  
        }
        //terug knop
        if (isset($_POST['back'])){header('Location:  /deOpvoedingswinkel/index.php/indexc'); }
        
                       if(isset($_POST['register'])){
                        
                $data =array(
                   $_SESSION["loc"],
                   $_POST['uitvoerder'],
                   ($_POST['uitvoerder'] == 'Andere' ? $_POST['andereUit'] : 'nvt'),
                   $_POST['vrna'],
                   $_POST['VolledigDag'],
                   $_POST['Dag'],
                   $_POST['Maand'],
                   $_POST['Jaar'],
                   $_POST['opvd'],
                   $_POST['auto'],
                   $_POST['alloc'],
                   $_POST['orgin'],
                   $_POST['woonplaats'],
                );   
                  $x = $this->db->createRecord('speelkaart',$data);
                  header('Location: /deOpvoedingswinkel/index.php/indexc'); 
                   
                  
                 // $this->view->assign("html","<h1>test</h1>");               
                }
        
        
        $this->view->display('html_view');
     }
}
?>
