<?php
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
<head>
	<title>YYM's Auto Parts - Customer Orders</title>
</head>
<body>
	<h1>YYM's Auto Parts</h1>
	<h2>Customer Orders</h2>
	
	<?php 
		@$fp = fopen("$DOCUMENT_ROOT/../orders/orders.txt", 'rb');
		if (!$fp){
			echo "<p><strong>No orders pending.
				  Please try again later.</strong></p></body></html>";
			exit;
		}
		flock($lock_SH);
		
		while (!feof($fp)){
			$order = fgets($fp,999);
			echo $order."<br />";
		}
		
		flock($fp, LOCK_UN);
		
		echo  "Final position of the file pointer is ".(ftell($fp))."<br />";
		rewind($fp);
		echo "After rewind, the positon is ".(ftell($fp))."<br />";

	?>
</body>
</html>