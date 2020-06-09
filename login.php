<!DOCTYPE html>
<html>
<head>
	<title>UFABET19</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/loding.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@400&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php

function file_get_contents_curl($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

$html = file_get_contents_curl("https://www.ufa7777.com/Default8.aspx?lang=EN-GB");
$doc = new DOMDocument(); 
@$doc->loadHTML($html);
$__VIEWSTATE = $doc->getElementById('__VIEWSTATE')->getAttribute('value');
$__VIEWSTATEGENERATOR = $doc->getElementById('__VIEWSTATEGENERATOR')->getAttribute('value');

?>

	
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/ufabet-logo.png">
		</div>
		<div class="login-content">
			<form class="login-form" id="form2" name="form2" action="https://www.ufa7777.com/Default8.aspx?lang=EN-GB" method="POST">
				<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
				<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
				<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="<?php echo $__VIEWSTATE; ?>"/>
            	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="<?php echo $__VIEWSTATEGENERATOR; ?>"/>
				<!-- <img src="img/avatar.svg"> -->
				<h2 class="title">เข้าสู่ระบบ</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="txtUserName" >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password"  >
				   </div>
            	</div>
            	<a class="fog" href="#">Forgot Password?</a>
				<a class="btn" id="btnLogin" href="javascript:__doPostBack('btnLogin','')">
					login </a>
					
            </form>
        </div>
    </div>
	<script charset="utf-8" src="js/login.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
