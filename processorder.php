<?php
	$tireqty = $_POST['tireqty'];
	$oilqty = $_POST['oilqty'];
	$sparkqty = $_POST['sparkqty'];
	
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
		<p>Order processed.</p>
		<?php
			$totalqty = $tireqty + $oilqty + $sparkqty;
			$totalamount = 0.00;
			echo '<p>Order precessed at '.date('H:i, jS F Y').'</p>';
			if ($totalqty == 0)
			{
				echo  '<p style="color:red">';
				echo 'You did not order anything on the previous page!';
				echo '</p>';
				
			} else {

				$totalamount = $tireqty * TIREPRICE
							+ $oilqty * OILPRICE
							+ $sparkqty * SPARKPRICE;
				
				echo '<p>Your order is as follows: </p>';
				echo $tireqty.'tires<br />';
				echo $oilqty.'bottles of oil<br />';
				echo $sparkqty.'spark plugs<br />';
			}
				
				echo 'Items ordered: '.$totalqty.'<br />';
				
				echo 'Subtotal: $'.number_format($totalamount,2).'<br />';
				$taxrate = 0.10;
				$totalamount = $totalamount * (1 + $taxrate);
				echo 'Total including tax: $'.number_format($totalamount,2).'<br />';
			
		?>
	</body>
</html>