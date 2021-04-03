
<html>
<head>
	<title>TechnicalFriend</title>

	<meta name="viewport" content="width=device-width">
	<style >
		.textbox{
			color: white;

  text-shadow: 2px 2px 4px #000000;

		}
		input[type=text]{
			padding: 10px 30px;

  -webkit-box-shadow: 3px 3px 5px 3px #000;  
  -moz-box-shadow:    3px 3px 5px 3px #000;  
  box-shadow:         3px 3px 5px 3px #000;
  border: white;  
  text-align: center;


		}
		::placeholder{
		color: black;
  
  font-weight:bold;
  font-size: 15px;

		}
		.main{
			box-shadow: 2px 2px 5px black;
			background-color: lightgrey;
			padding: 20px 10px;
			

		}
		.maine{
			box-shadow: 2px 2px 5px black;
			background-color: lightgrey;
			padding: 5px 5px;
			

		}
		button{
			background-color: black;
			color: white;
			padding: 10px 70px;
			box-shadow: 2px 2px 5px grey;
		}
       .appname{

       	box-shadow: 2px 2px 5px grey;
       	display: inline-block;
       border: 3px solid white;
       }
	</style>
</head>
<body><center>
<div class='main'>
	<br/><div class='appname' style='
  color: white;
  text-shadow: 2px 2px 4px #000000;
'>
		<h2>INSHARE : GRABBING SCRIPT</h2>
		
	</div><br/><br/>
<?php
error_reporting(0);


 
  
if (isset($_GET['Submit'])){
$username=$_GET['username'];
$password=$_GET['password'];

$url="https://api.x322ex.site/api/login/login";
$data='{"username":"'.$username.'","password":"'.$password.'","devicetype":"","version":"","deviceid":""}';

$headers[]='Host:api.x322ex.site';
$headers[]='content-length:'.strlen($data).'';
$headers[]='language:en-US';
$headers[]='user-agent:Mozilla/5.0 (Linux; Android 9; LM-X440IM Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/83.0.4103.106 Mobile Safari/537.36';
$headers[]='token:';
$headers[]='content-type:application/json';
$headers[]='origin:https://h5.x322ex.xyz';
$headers[]='referer:https://h5.x322ex.xyz/h5/pages/login/login';
$headers[]='accept-language:en-US,en;q=0.9';
$headers[]='x-requested-with:com.sd.inshare';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
    $output=curl_exec($ch);
        $json=json_decode($output,true);
     $token=$json['data']['token'];
       $rupee=$json['data']['balance'];
          
     curl_close($ch);


     $url50="https://api.x322ex.site/api/order/mkorder";
$data50='"';

$headers50[]='Host:api.x322ex.site';
$headers50[]='content-length:'.strlen($data50).'';
$headers50[]='language:en-US';
$headers50[]='user-agent:Mozilla/5.0 (Linux; Android 9; LM-X440IM Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/83.0.4103.106 Mobile Safari/537.36';
$headers50[]='token:'.$token.'';
$headers50[]='content-type:application/json';
$headers50[]='origin:https://h5.x322ex.xyz';
$headers50[]='referer:https://h5.x322ex.xyz/h5/pages/order/orderGrabbing';
$headers50[]='accept-language:en-US,en;q=0.9';
$headers50[]='x-requested-with:com.sd.inshare';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url50);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data50);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers50);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
    $output=curl_exec($ch);
        $json=json_decode($output,true);
     $order=$json['data']['orderid'];
   
          
     curl_close($ch);

   

          $url80="https://api.x322ex.site/api/order/confirm";
$data80='{"orderid":"'.$order.'","status":1}';

$headers80[]='Host:api.x322ex.site';
$headers80[]='content-length:'.strlen($data80).'';
$headers80[]='language:en-US';
$headers80[]='user-agent:Mozilla/5.0 (Linux; Android 9; LM-X440IM Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/83.0.4103.106 Mobile Safari/537.36';
$headers80[]='token:'.$token.'';
$headers80[]='content-type:application/json';
$headers80[]='origin:https://h5.x322ex.xyz';
$headers80[]='referer:https://h5.x322ex.xyz/h5/pages/order/orderGrabbing';
$headers80[]='accept-language:en-US,en;q=0.9';
$headers80[]='x-requested-with:com.sd.inshare';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url80);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data80);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers80);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
    $output=curl_exec($ch);
        $json=json_decode($output,true);
    
          $msg=$json['msg'];
     curl_close($ch);
     if ($msg=='SUCCESS') {
     	echo "<font style='color:green;'>Grab Bypass Succesfully</font><br/><br/>";
     } else {
     	echo "<font style='color:red;'>All Grab Bypass ! Come Back Tommorrow</font><br/><br/>";
     }
     echo "<font style='color:black;'>Total Balance :- $rupee</font><br/><br/>";
echo"<meta http-equiv='refresh' content='5'>";
}
else{
 
echo'
   
<div class="textbox" >
<form method="get" action="">
		<input type="text" name="username" placeholder="Enter username"><br/><br/>
		<input type="text" name="password" placeholder="Enter password"><br/><br/>
		<button name="Submit">Submit</button></form></div><br/><br/>';$p=$_POST['pass'];
if($p=='MyWorldTechnicalFriend'){
  echo "<script>alert('Password Matched Success')</script>";
}
else{
  echo "<script>alert('Password Does Not Exists')</script>";
echo "<script>location.href='index.php'</script>";
}}

?>

		<div class='appname' style='
  color: white;
  text-shadow: 2px 2px 4px #000000;
'>
		<h2>SCRIPTED BY :- DIVYANSH SINGH/TECHNICALFRIEND</h2>
		
	</div><br/><br/>

	
</div><br/>
<div class='maine'>
	<h3 style='font-size: 20px;'>Note :- Please Support Everyone ...Like , Share & Subscribe</h3>
	</div>
</center>
</body>
</html>

