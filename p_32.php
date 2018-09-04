<?php
session_start();
if(!isset($_SESSION["pass"]) ||
$_SESSION["pass"] != "yes") {
header("Location:loginpage.php");
exit;
}
?>
<body>
<style>@font-face{font-family:mono;src:url('mono.ttf');}</style>
<pre style="font-family:mono;font-size:20px;">
<?php
include("pyramid_header.php");
for($prow=1;$prow<=5;$prow++) {
	for($pcol=1;$pcol<=8-$prow;$pcol++) {
		echo($pcol);	
	}
	for($pcol=1;$pcol<=2+$prow;$pcol++) {
		echo("*");	
	}
	
	echo($prow+2);
	echo "<br/>";
}
include("pyramid_footer.php");
?></pre></body>