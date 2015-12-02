<?php
// $products = array (
// 'Tires',
// 'Oil',
// 'Spark Plugs'
// );
// $number = range(1, 10);
// $odds = range(1, 10,2);
// $letters = range('a', 'z');

// for ( $i =0;$i<3;$i++){
// echo $products[$i]." ";
// }

// echo "<p></p>";

// foreach ($products as $cu){
// echo $cu." ";
// }
$prices = array (
		'Tires' => 100,
		'Oil' => 10,
		'Spark Plugs' => 4 
);

foreach ( $prices as $key => $value ) {
	echo $key . " - " . $value . "<br />";
}

reset ( $prices );

while ( $ele = each ( $prices ) ) {
	echo $ele ['key'] . " - " . $ele ['value'] . "<br />";
}

reset ( $prices );

while ( list ( $p1, $p2 ) = each ( $prices ) ) {
	echo "$p1 - $p2 <br />";
}

echo "<p></p>";

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

for($row = 0; $row < 3; $row ++) {
	for($col = 0; $col < 3; $col ++) {
		echo "|" . $products [$row] [$col];
	}
	echo '|<br / >';
}

?>
	