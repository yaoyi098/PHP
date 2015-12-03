<?php
$pictures = array (
		'1.jpg',
		'2.jpg',
		'3.jpg' 
);

shuffle ( $pictures );
?>


<html>
<head>
<title>YYm's Auto Parts</title>
</head>
<body>
	<h1>YYM's Auto Parts</h1>
	<div>
		<table>
			<tr>
<?php
for($i = 0; $i < 3; $i ++) {
	echo "<td align=\"center\"><img src=\"" . $pictures [$i] . "/></td>";
}

?>
</tr>
		</table>
	</div>
</body>
</html>