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
for($prow=1;$prow<=7;$prow++) {
	for($pcol=0;$pcol<=7-$prow;$pcol++) {
	echo(" ");
	}
	for($pcol=1;$pcol<=1;$pcol++){
		echo($pcol);
	}
	for($pcol=3;$pcol<=1+$prow;$pcol++){
		echo($pcol-1);
	}
		echo($prow);
	for($pcol=$prow;$pcol>=1;$pcol--){
		echo($pcol);
	}
	echo "<br/>";
}
include("pyramid_footer.php");
?></pre></body>