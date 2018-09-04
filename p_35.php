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
for($prow=0;$prow<=4;$prow++) {
	echo($prow+1);
	echo("*");
	for($pcol=1;$pcol<=1;$pcol++){
		echo($pcol+$prow+$prow);
	}
	echo("*");
	for($pcol=2;$pcol<=2;$pcol++){
		echo($pcol+$prow+$prow);
	}
	echo "<br/>";
}
include("pyramid_footer.php");
?></pre></body>