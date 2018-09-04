<html>
<head>
	<title> Ÿµ√§Ÿ≥ ·¡Ë
	<?php echo $_GET["mul"]; ?>
	</title>
</head>
	
	<body bgcolor=#ffffdd>
	<table border=1 align=center width=6.2%>
	<?php
	$m = $_GET["mul"];
	
	for($i=1;$i<=12;$i++){
		echo "<tr><td>$m * $i = </td><td>". $i * $m . "</td></tr>";
		} 
	phpinfo();
	?>
	</table>
	</body>

</html>
