<?php
// $products = array (
// 'Tires',
// 'Oil',
// 'Spark Plugs'
// );

// sort ( $products );

// foreach ( $products as $cur ) {
// echo "$cur <br />";
// }

// echo "<br />";

// $prices = array (
// 'Tires' => 100,
// 'Oil' => 10,
// 'Spark Plugs' => 4
// );

// // asort ( $prices );
// ksort ( $prices );
// foreach ( $prices as $key => $value ) {
// echo $value . "" . $key . "<br />";
// }

// echo '<br />';

// 3.7
$products = array (
		array (
				'TIR',
				'Tires',
				100 
		),
		array (
				'OIL',
				'Oil',
				10 
		),
		array (
				'SPK',
				'Spark Plugs',
				4 
		) 
);
function compare($x, $y) {
	if ($x [2] == $y [2]) {
		return 0;
	} elseif ($x [2] < $y [2]) {
		return - 1;
	} elseif ($x [2] > $y [2]) {
		return 1;
	}
}
function reverse_compare($x, $y) {
	if ($x [2] == $y [2]) {
		return 0;
	} elseif ($x [2] < $y [2]) {
		return 1;
	} elseif ($x [2] > $y [2]) {
		return - 1;
	}
}

usort ( $products, 'reverse_compare' );

foreach ( $products as $cur ) {
	foreach ( $cur as $cur1 ) {
		echo "$cur1   ";
	}
	echo "<br />";
}

?>