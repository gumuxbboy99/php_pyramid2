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
	for($pcol=3;$pcol<=1+$prow;$pcol++) {
	echo(" ");
	}
	for($pcol=0;$pcol<=5-$prow;$pcol++){
		echo($prow);
	}
	for($pcol=0;$pcol<=4-$prow;$pcol++){
		echo($prow);
	}
	echo "<br/>";
}
include("pyramid_footer.php");
?></pre></body>