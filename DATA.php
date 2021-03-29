<DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width'>
<title> Earning_Scripter </title>
<style>
body{
  text-align: center;
  font-weight: bold;
  background: #E581FF;
  margin-top: 10px;}
  
  input[type="text"]{
    font-weight: bold;
    font-family: italin;
    padding: 8px;
    color: green;
    outline: 0px;
    width: 300px;
    border: 3px solid red;
    border-radius: 7px;
    text-align: center;
    font-size: 21px;
  }
  h2{
    color: #FAFF00;background: transperent;border-radius: 7px;border: 3px solid yellow;padding: 2px;
  }
  
  h3{
    color: yellow;background: red;border:3px solid blue;
    border-radius: 8px;
    padding: 4px;
   }
   
  hr{
    height: 2px;
    background: blue;
   /* background-image: linear-gradient(to right, #110CE6,#36DE00,#E2E701);*/
   
  /*  box-shadow: -1px -1px 1px #00B5FF, 1px 1px 1px #FFFB00; */
  
  }
    
    input[type="submit"]{
      background: #00FFF1;
      border-radius: 8px;
      color: red;
      border: 3px solid green;
      padding: 8px;
      width: 180px;
      font-weight: bold;
    }
</style>
</head>
<body>

<hr>
<h2>Earning_Scripter [ Official ]</h2><hr>
<h3>All In One Money Adder Script</h3><hr>
<br>
<?php

if(!isset($_GET['submit'])){
  echo ' <form action="" mathod="GET"/>

<input type="text" name="ur" placeholder="Enter Url " required/>
<br><br>
<input type="text" name="ho" placeholder="Enter Host " required/>
<br><br>
<input type="text" name="da" placeholder="Enter Data " required/>
<br><br>



<input type="submit" name="submit" value="SUBMIT"/>
</form>
<script>
alert("NOTE : - Please Join Our Channel To Work Script Othore Wise Not Work !");
</script>
';
  
}
  (isset($_GET['submit'])){
	$ur =$_GET['ur'];
		$ho =$_GET['ho'];
		 $da =$_GET['da'];
		 
	"<meta http-equiv='refresh' content=;' />";
	
	$url=''.$ur.'';

$data=''.$da.'';

$headers10[]='Host: '.$ho.'';

$headers10[]='Connection: Keep-Alive';
$headers10[]="Accept-Encoding: gzip";
$headers10[]="User-Agent: okhttp/3.12.1 ";

$headers10[]="";



$ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_HTTPHEADER,$headers10);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $output= curl_exec ($ch);
  $json=json_decode($output,true);
  curl_close ($ch);
  

"<div class='success'><center>
<font color='yellow'size='5'><hr>Message:-$output<hr>";

	
		 "<meta http-equiv='refresh' content=;' />";
	
}

?>


<br><hr><hr><center><script type='text/javascript'>(function() {var script=document.createElement('script');script.type='text/javascript';script.async =true;script.src='//telegram.im/widget-button/index.php?id=@EarningScripte';document.getElementsByTagName('head')[0].appendChild(script);})();</script><a href='tg://resolve?domain=EarningScripte' target='_blank' class='telegramim_button telegramim_shadow telegramim_pulse' style='font-size:18px;max-width:400px;background:#000000;box-shadow:3px 3px 7px #F40202;color:#17ffd1;border-radius:20px;' title='Join Now'><i></i> Join Earning Scripter Telegram Channel For Scripts<small><span class='telegramim_count' data-for='@EarningScripte'>...</span> Members</small></a></center>


<hr><center><script type='text/javascript'>(function() {var script=document.createElement('script');script.type='text/javascript';script.async =true;script.src='//telegram.im/widget-button/index.php?id=@EarningScripte';document.getElementsByTagName('head')[0].appendChild(script);})();</script><a href='https://youtube.com/channel/UCCIgtMSuWkZYoaa_CTGTNnQ' target='_blank' class='telegramim_button telegramim_shadow telegramim_pulse' style='font-size:18px;max-width:400px;background:#FF002F;box-shadow:3px 3px 7px #052EF0;color:fff;border-radius:20px;' title='Join Now'><i></i> Join Earning Scripter Youtube Channel For Scripts<small><span class='telegramim_count' data-for='@EarningScripte'>...</span> Members</small></a></center>


<br>
</body>
</html>
