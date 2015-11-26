<?php
	$tireqty = $_POST['tireqty'];
	$oilqty = $_POST['oilqty'];
	$sparkqty = $_POST['sparkqty'];
	$address = $_POST['address'];
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
	
	
	define('TIREPRICE', 100);
	define('OILPRICE', 10);
	define('SPARKPRICE', 4);
?>

<html>
	<head>
		<title>YYM Order</title>
	</head>
	<body>
		<h1>YYM's Auto parts</h1>
		<h2>Order Results</h2>
		<?php
		
			$date = date('H:i jS F Y');
			$totalqty = $tireqty + $oilqty + $sparkqty;
			$totalamount = 0.00;
			echo '<p>Order precessed at '.$date.'</p>';
			echo '<p>Your order is as follows: </p>';
			echo 'Items ordered: '.$totalqty.'<br />';
			
			if ($totalqty == 0)
			{
				echo  '<p style="color:red">';
				echo 'You did not order anything on the previous page!';
				echo '</p>';
				
			} else {

				$totalamount = $tireqty * TIREPRICE
							+ $oilqty * OILPRICE
							+ $sparkqty * SPARKPRICE;
				
				if ($tireqty > 0)
					echo $tireqty.'tires<br />';
				if ($oilqty > 0)
					echo $oilqty.'bottles of oil<br />';
				if ($sparkqty > 0)
					echo $sparkqty.'spark plugs<br />';
			}
				
				echo 'Subtotal: $'.number_format($totalamount,2).'<br />';
				$taxrate = 0.10;
				$totalamount = $totalamount * (1 + $taxrate);
				echo 'Total including tax: $'.number_format($totalamount,2).'<br />';
				
				echo "<p>Address to ship to is $address</p>";
				
				$outputstring = $date."\t".$tireqty." tires \t".$oilqty." oil\t"
							  .$sparkqty." spark plugs\t\$".$totalamount
							  ."\t".$address."\n";

				
				@ $fp = fopen("$DOCUMENT_ROOT/../orders/orders.txt", 'ab');
				
				
				flock($fp, LOCK_EX);
				
				if (!$fp){
					echo "<p><strong>Your order could not be processed at this time.
						Please try again later.</strong></p></body></html>";
					exit;
				}

				fwrite($fp, $outputstring,strlen($outputstring));
				flock($fp, LOCK_UN);
				fclose($fp);
				
				echo "<p>Order written.</p>"
		?>
	</body>
</html>