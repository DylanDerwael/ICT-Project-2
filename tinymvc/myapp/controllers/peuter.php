<?php
    class Peuter_Controller extends TinyMVC_Controller{
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
        
        $this->load->model('Uitvoerder_Model','objUitvoerder');
        $this->load->model('Titel_Model','objTitel');
        $this->load->model('Datum_Model','objDatum');
        $this->load->model('Wie_Model','objWie');
        $this->load->model('Layout_Model','layout');
        
        $this->load->script('htmlhelpers');
        
        $this->load->model('InsertDatabase_Model','db');
        
        $begin      = $this->db->formStart();
        $einde      = $this->db->formEnd();
        $opties     = $this->objTitel->genHTMLOpties('peuter');
        $uitvoerder = $this->objUitvoerder->genHTML();
        $datum      = $this->objDatum->genHTML();
        $wie        = $this->objWie->genHTML2('peuter');
        $footer     = $this->layout->footer();
        $header     = $this->layout->header($_SESSION["loc"]);
        
        $this->view->assign("titel","peuternestje");
        $this->view->assign('html',$begin.$uitvoerder.$opties.$datum.$wie.$einde);
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
                    $_POST['peuternestje'],
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
                    $_POST['kinderen'],
                    $_POST['nieuwgezin'],
                    $_POST['allocgezin'],
                    $_POST['autogezin'],
                    $_POST['woonplaats'],
                );   
                  $x = $this->db->createRecord('peuter',$data);
                    header('Location: /deOpvoedingswinkel/index.php/indexc');  
                   
                  
                 // $this->view->assign("html","database comand= $x");               
        }
        
        
        $this->view->display('html_view');
        
        
        
        }
    }
?>
