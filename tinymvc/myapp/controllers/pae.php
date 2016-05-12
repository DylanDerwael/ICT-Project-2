<?php

class Pae_Controller extends TinyMVC_Controller
{
/**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		David Defossez, dylan derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 */
function index(){
        session_start();
    
        //--- modellen die geladen worden ---
        $this->load->model('Uitvoerder_Model','objUitvoerder');
        $this->load->model('Datum_Model','objDatum');
        $this->load->model('Wie_Model','objWie');
        $this->load->model('Contact_Model','objContact'); 
        $this->load->model('Aardvraag_Model','objVraag');
        $this->load->model('Woon_Model','objWoon');
        $this->load->model('Gegclient_Model','objClient');
        $this->load->model('Afkomst_Model','objAfkomst');
        $this->load->model('Gegkind_Model','objKind');
        $this->load->model('Gegsituatie_Model','objSituatie');
        $this->load->model('Werkvorm_Model','objWerk');        
        $this->load->model('InsertDatabase_Model','db');
        $this->load->model('Aanbod_Model','objAanbod');
        $this->load->model('Layout_Model','layout');
        
        //--- laad script om de toegang naar scripts en stylesheets makkelijker te maken ---
        $this->load->script('htmlhelpers');

        //variablen worden geladen met data
        $uithtml    = $this->objUitvoerder->genHTML();
        $datum      = $this->objDatum->genHTML();
        $wie        = $this->objWie->genHTML();
        $contact    = $this->objContact->genHTML('pae');        
        $aardVraag  = $this->objVraag->genHTML('pae');        
        $woon       = $this->objWoon->genHTML();
        $Afkomst    = $this->objAfkomst->genHTML();
        $Kind       = $this->objKind->genHTML('pae');
        $Werk       = $this->objWerk->genHTML();
        $Client     = $this->objClient->genHTML($Afkomst, $Kind);
        $Situatie   = $this->objSituatie->genHTML($Werk);
        $begin      = $this->db->formStart();
        $einde      = $this->db->formEnd();
        $footer     = $this->layout->footer();
        $header     = $this->layout->header($_SESSION["loc"]);
        $aanbod     = $this->objAanbod->genHTML();
        
        
        
        
        //--- variablen door geven aan de view ---
        //--- aan de variable $html moet alle data die in de body moet komen worden meegeven ---
        $this->view->assign("titel","Pedagogisch adviseren");
        $this->view->assign("html",$begin.$uithtml.$datum.$wie.$woon.$contact.$aardVraag.$Client.$Situatie.$aanbod.$einde); 
        $this->view->assign("header",$header);
        $this->view->assign("footer",$footer);
      
           //uitloggen
        if (isset($_POST['logoff'])){
            header('Location:  /deOpvoedingswinkel/index.php');
            $this->objlog->LogOff();  
        }
        //terug knop
        if (isset($_POST['back'])){header('Location:  /deOpvoedingswinkel/index.php/indexc'); }
        
        //--- register data ---
            if(isset($_POST['register']))
            {     
                
                      foreach($this->objVraag->arrHoofdVraag() as $key => $op){
                     switch($key){
                      case 'lo':
                          $arr = $this->objVraag->arrLichamelijkeOpvoeding();
                          break;
                      case 'vo':
                          $arr= $this->objVraag->arrVerstandelijkeOntwikkeling();
                          break;
                      case 'so':
                          $arr= $this->objVraag->arrSocialeOntwikkeling();
                          break;
                      case 'eo':
                          $arr = $this->objVraag->arrEmotioneleOntwikkeling();
                          break;
                      case 'sv':
                          $arr = $this->objVraag->arrSpelEnVrijetijdsbesteding();
                          break;
                      case 'os':
                          $arr = $this->objVraag->arrOpvangEnSchool();
                          break;
                      case 'og':
                          $arr = $this->objVraag->arrOpvallendGedrag();
                          break;
                      case 'op':
                          $arr = $this->objVraag->arrOpvoeding();
                          break;
                    }
                    
                    if(isset($_POST[$key])){
                        $vraag = array();
                        array_push($vraag, $_SESSION["loc"]);
                        array_push($vraag, 'pae');
                        array_push($vraag,$_POST['vrna']);
                        array_push($vraag,$_POST['VolledigDag']);
                        array_push($vraag,$_POST['Dag']);
                        array_push($vraag,$_POST['Maand']);
                        array_push($vraag,$_POST['Jaar']);
                        foreach($arr as $id => $valueVraag){
                           $check = (isset($_POST[$id]) ? "$valueVraag" : 'nvt') ;
                           array_push($vraag, $check);
                        }
                         $this->db->createRecord($key,$vraag);
                         
                    }
                    
                
                 }
                $data =array(
                    $_SESSION["loc"],
                    $_POST['uitvoerder'],
                    ($_POST['uitvoerder'] == 'Andere' ? $_POST['andereUit'] : 'nvt'),
                    $_POST['vrna'],
                    $_POST['VolledigDag'],
                    $_POST['Dag'],
                    $_POST['Maand'],
                    $_POST['Jaar'],
                    (isset($_POST['wieKomt']) ? $_POST['wieKomt'] : 'nvt'),
                    (isset($_POST['locatie']) ? ($_POST['locatie'] == 'Hasselt' ? $_POST['wijk'] : 'nvt'):'nvt'),
                    (isset($_POST['locatie']) ? ($_POST['locatie'] == 'nietHasselt' ? $_POST['txt_buiten'] : 'nvt'):'nvt'),
                    (isset($_POST['contact']) ? $_POST['contact'] : 'nvt'),
                    (isset($_POST['opvd']) ? 'ja' : 'nee'),
                    (isset($_POST['voorzien']) ? 'ja' : 'nee'),
                    (isset($_POST['info']) ? 'ja' : 'nee'),
                    (isset($_POST['gegclient']) ? $_POST['gegclient'] : 'nvt'),
                    (isset($_POST['grootte']) ? $_POST['grootte'] : 'nvt'),
                    (isset($_POST['keuze']) ? $_POST['keuze'] : 'nvt'),
                    (isset($_POST['afkomst']) ? $_POST['afkomst'] : 'nvt'),
                    ($_POST['afkomst']== 'allochtoon' ? $_POST['afkomst_txt'] : 'nvt'),
                    (isset($_POST['leeftijd']) ? $_POST['leeftijd'] : 'nvt'),
                    (isset($_POST['geslacht']) ? $_POST['geslacht'] : 'nvt'),
                    (isset($_POST['zwaarte']) ?$_POST['zwaarte'] : 'nvt'),
                    (isset($_POST['werkvorm']) ?$_POST['werkvorm'] : 'nvt'),
                    (isset($_POST['Main_WerkvormAndere_txt']) ?$_POST['Main_WerkvormAndere_txt'] : 'nvt'),                   
                    (isset($_POST['Sub_WerkvormAndere_txt']) ?$_POST['Sub_WerkvormAndere_txt'] : 'nvt'),
                    (isset($_POST['main1']) ? 'ja' : 'nee'),
                    (isset($_POST['main2']) ? 'ja' : 'nee'),
                    (isset($_POST['main3']) ? 'ja' : 'nee'),
                    (isset($_POST['main4']) ? 'ja' : 'nee'),
                    (isset($_POST['main5']) ? 'ja' : 'nee'),
                    (isset($_POST['main6']) ? 'ja' : 'nee'),
                    (isset($_POST['main7']) ? 'ja' : 'nee'),
                     $_POST['door_txt'],
                    (isset($_POST['main8']) ? 'ja' : 'nee'),
                    (isset($_POST['hulp']) ? $_POST['hulp'] : 'nvt'),
                    $_POST['hulp_txt'], 
                );   
              $x = $this->db->createRecord('pae',$data);                   
             header('Location: /deOpvoedingswinkel/index.php/indexc');
                   
                  
                  //$this->view->assign("html","database command= $x");               
            }                        
        
        //--- view oproepen ---
        $this->view->display('html_view');
        
    }
}
?>
