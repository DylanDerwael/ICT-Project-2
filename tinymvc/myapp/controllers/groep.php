<?php
class Groep_Controller extends TinyMVC_Controller{
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
        $this->load->model('Gegkind_Model','objKind');
        $this->load->model('Layout_Model','layout');
        
        $this->load->script('htmlhelpers');
        
        $this->load->model('InsertDatabase_Model','db');
        
        $begin      = $this->db->formStart();
        $einde      = $this->db->formEnd();
        $titel      = $this->objTitel->genHTML('groepsbijeenkomst');
        $uitvoerder = $this->objUitvoerder->genHTML();
        $datum      = $this->objDatum->genHTML();
        $wie        = $this->objWie->genHTML2('groep');
        $kind       = $this->objKind->genHTML('anders');
        $footer     = $this->layout->footer();
        $header     = $this->layout->header($_SESSION["loc"]);
        
        $this->view->assign("titel","groepsbijeenkomst");
        $this->view->assign('html',$begin.$titel.$uitvoerder.$datum.$wie.$kind.$einde);
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
                   $_POST['title_txt'],
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
                   $_POST['moeders'],
                   $_POST['vaders'],
                   $_POST['grootmoeders'],
                   $_POST['grootvaders'],
                   $_POST['anderewie'],
                   $_POST['wie'],
                   $_POST['woonplaats'],
                   (isset($_POST['l1']) ? 'ja' : 'nvt'),
                   (isset($_POST['l2']) ? 'ja' : 'nvt'),
                   (isset($_POST['l3']) ? 'ja' : 'nvt'),
                   (isset($_POST['l4']) ? 'ja' : 'nvt'),
                   (isset($_POST['l5']) ? 'ja' : 'nvt'),
                    
                );   
                  $x = $this->db->createRecord('groepsbijeenkomst',$data);
                 header('Location: /deOpvoedingswinkel/index.php/indexc');  
                   
                  
                  $this->view->assign("html","database comand= $x");               
        }
        
        
        $this->view->display('html_view');
    }
}
?>
