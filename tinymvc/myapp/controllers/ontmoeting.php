<?php
class Ontmoeting_Controller extends TinyMVC_Controller{
     /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Jef Casters
 * @copyright (c)       2013, KHLIM-ict
 *
 */
    function index(){
        session_start();
        
        //modellen die geladen worden
         $this->load->model('Datum_Model','objDatum');
         $this->load->model('Werkvorm_Model','objWerk');
         $this->load->model('Uitvoerder_Model','objUitvoerder');
         $this->load->model('Doelgroep_Model','objDoelgroep');
         $this->load->model('Gegkind_Model','objGegkind');
         $this->load->model('Layout_Model','layout');
         
         //laad database model
         $this->load->model('InsertDatabase_Model','db');

         //variablen worden geladen met data
         $begin      = $this->db->formStart();
         $einde      = $this->db->formEnd();
         $Datum      = $this->objDatum->genHTML();
         $Werk       = $this->objWerk->genHTML2();
         $uitvoerder = $this->objUitvoerder->genHTML();
         $doelgroep  = $this->objDoelgroep->genHTML();
         $aantal     = $this->objDoelgroep->genHTML2();
         $specifiek  = $this->objDoelgroep->genHTML3();
         $gegkind    = $this->objGegkind->genHTML2();
         $footer     = $this->layout->footer();
         $header     = $this->layout->header($_SESSION["loc"]);



         //laad script om de toegang naar scripts en stylesheets makkelijker te maken
        $this->load->script('htmlhelpers');


        $this->view->assign("titel","Ontmoetingen stimuleren");
        $this->view->assign("html",$begin.$uitvoerder.$Datum.$Werk.$aantal.$doelgroep.$specifiek.$gegkind.$einde);
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
                    (isset($_POST['Voorlichtingsmoment'])? 'ja': 'nvt'),
                    $_POST['subVoorlichtingsmoment'],
                    (isset($_POST['Ervaringsgerichte_groepsouderwerking'])?'ja':'nvt'),
                    $_POST['subErvaringsgerichte_groepsouderwerking'],
                    (isset($_POST['Ontmoetingsmomenten'])?'ja':'nvt'),
                    $_POST['subOntmoetingsmomenten'],
                    (isset($_POST['training'])?'ja':'nvt'),
                    $_POST['subtraining'],
                    (isset($_POST['Andere'])?'ja':'nvt'),
                    $_POST['subAndere'],
                    $_POST['AantalDeelnemers'],
                    (isset($_POST['janee'])?$_POST['janee']:'nvt'),
                    (isset($_POST['een_ouder'])? 'ja':'nvt'),
                    (isset($_POST['kwetsbaar'])? 'ja':'nvt'),
                    (isset($_POST['samengesteld'])? 'ja':'nvt'),
                    (isset($_POST['allochtonen'])? 'ja':'nvt'),
                    (isset($_POST['grootouders'])? 'ja':'nvt'),
                    (isset($_POST['andere'])? 'ja':'nvt'),
                    (isset($_POST['andere_txt'])? $_POST['andere>_txt'] :'nvt'),
                    (isset($_POST['fase'])?$_POST['fase']:'nvt'),
                );
            
             $this->db->createRecord('ontmoeting',$data);
             header('Location: /deOpvoedingswinkel/index.php/indexc');
        }
        

        //view oproepen
        $this->view->display('html_view');

        
    }
}

?>
