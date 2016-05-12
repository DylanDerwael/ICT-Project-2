 /**
 * Admin
 *
 * @package             De Opvoedingswinkel
 * @author  		Dylan Derwael
 * @copyright (c)       2013, KHLIM-ict
 *
 *javascript globaal bruikbaar aanroepen met =toggle();
 *het eerste argument moet de ID van de radioknop of checkbox  zijn
 *het tweede argumnt moet de id zijn van de div die je wilt laten verschijnen/verdwijnen
 */   
    function toggle(selectId,divId)
        {
             var y = document.getElementById(selectId);
             var x = document.getElementById(divId);
                if (y.checked == true){
                     $(x).show('slow');
                 } 
                 else{
                    $(x).hide('slow');
                 } 
        }
        
        
        