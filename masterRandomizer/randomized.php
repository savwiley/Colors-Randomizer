<?php include("mytcg/settings.php");
include("$header");
?>

<center>
<h1>Randomized Cards</h1>
<?php
$cards = "";
echo '<textarea rows="10" cols="65">';
	for($i=1; $i<=(int)$_POST['allCards']; $i++) {
		$randtype = 'all';
		ob_start();
		include ("mytcg/random.php");
		$card = ob_get_clean();
		echo "<img src=\"https://colors-tcg.eu/cards/";
		echo "$card";
		echo ".$ext\" />";
		$cards .= ", $card";
	}
	for($i=1; $i<=(int)$_POST['spCards']; $i++) {
		$randtype = 'special';
		ob_start();
		include ("mytcg/random.php");
		$card = ob_get_clean();
		echo "<img src=\"https://colors-tcg.eu/cards/";
		echo "$card";
		echo ".$ext\" />";
		$cards .= ", $card";
	}
	for($i=1; $i<=(int)$_POST['redCards']; $i++) {
		$randtype = 'red';
		ob_start();
		include ("mytcg/random.php");
		$card = ob_get_clean();
		echo "<img src=\"https://colors-tcg.eu/cards/";
		echo "$card";
		echo ".$ext\" />";
		$cards .= ", $card";
	}
	for($i=1; $i<=(int)$_POST['orangeCards']; $i++) {
		$randtype = 'orange';
		ob_start();
		include ("mytcg/random.php");
		$card = ob_get_clean();
		echo "<img src=\"https://colors-tcg.eu/cards/";
		echo "$card";
		echo ".$ext\" />";
		$cards .= ", $card";
	}
	for($i=1; $i<=(int)$_POST['yellowCards']; $i++) {
		$randtype = 'yellow';
		ob_start();
		include ("mytcg/random.php");
		$card = ob_get_clean();
		echo "<img src=\"https://colors-tcg.eu/cards/";
		echo "$card";
		echo ".$ext\" />";
		$cards .= ", $card";
	}
	for($i=1; $i<=(int)$_POST['greenCards']; $i++) {
		$randtype = 'green';
		ob_start();
		include ("mytcg/random.php");
		$card = ob_get_clean();
		echo "<img src=\"https://colors-tcg.eu/cards/";
		echo "$card";
		echo ".$ext\" />";
		$cards .= ", $card";
	}
	for($i=1; $i<=(int)$_POST['blueCards']; $i++) {
		$randtype = 'blue';
		ob_start();
		include ("mytcg/random.php");
		$card = ob_get_clean();
		echo "<img src=\"https://colors-tcg.eu/cards/";
		echo "$card";
		echo ".$ext\" />";
		$cards .= ", $card";
	}
	for($i=1; $i<=(int)$_POST['purpleCards']; $i++) {
		$randtype = 'purple';
		ob_start();
		include ("mytcg/random.php");
		$card = ob_get_clean();
		echo "<img src=\"https://colors-tcg.eu/cards/";
		echo "$card";
		echo ".$ext\" />";
		$cards .= ", $card";
	}
	for($i=1; $i<=(int)$_POST['brownCards']; $i++) {
		$randtype = 'brown';
		ob_start();
		include ("mytcg/random.php");
		$card = ob_get_clean();
		echo "<img src=\"https://colors-tcg.eu/cards/";
		echo "$card";
		echo ".$ext\" />";
		$cards .= ", $card";
	}
	for($i=1; $i<=(int)$_POST['grayCards']; $i++) {
		$randtype = 'gray';
		ob_start();
		include ("mytcg/random.php");
		$card = ob_get_clean();
		echo "<img src=\"https://colors-tcg.eu/cards/";
		echo "$card";
		echo ".$ext\" />";
		$cards .= ", $card";
	}
	for($i=1; $i<=(int)$_POST['newCards']; $i++) {
		$randtype = 'new';
		ob_start();
		include ("mytcg/random.php");
		$card = ob_get_clean();
		echo "<img src=\"https://colors-tcg.eu/cards/";
		echo "$card";
		echo ".$ext\" />";
		$cards .= ", $card";
	}
	for($i=1; $i<=(int)$_POST['crayons']; $i++) {
		$randtype = 'all';
    $crayon = rand(1, 8);
    echo "<img src=\"https://colors-tcg.eu/images/crayon";
    echo "$crayon";
    echo ".$ext\" />";
    if ($crayon == 1) {
      $cards .= ", red crayon";
    } elseif ($crayon == 2) {
      $cards .= ", orange crayon";
    } elseif ($crayon == 3) {
      $cards .= ", yellow crayon";
    } elseif ($crayon == 4) {
      $cards .= ", green crayon";
    } elseif ($crayon == 5) {
      $cards .= ", blue crayon";
    } elseif ($crayon == 6) {
      $cards .= ", purple crayon";
    } elseif ($crayon == 7) {
      $cards .= ", brown crayon";
    } else {
      $cards .= ", gray crayon";
    }
	}
echo '</textarea>';
echo '<br /><br /><br />';
echo '<textarea style="width: 200px;">';
	echo substr($cards, 2);
echo '</textarea>'
?>
</center>
<br /><br />
<?php include("$footer"); ?>