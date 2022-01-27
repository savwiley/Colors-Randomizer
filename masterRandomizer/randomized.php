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
	$red = 0;
	$orange = 0;
	$yellow = 0;
	$green = 0;
	$blue = 0;
	$purple = 0;
	$brown = 0;
	$gray = 0;
	for($i=1; $i<=(int)$_POST['crayons']; $i++) {
		$randtype = 'all';
		$crayon = rand(1, 8);
    echo "<img src=\"https://colors-tcg.eu/images/crayon";
    echo "$crayon";
    echo ".$ext\" />";
    if ($crayon == 1) {
      ++$red;
    } elseif ($crayon == 2) {
      ++$orange;
    } elseif ($crayon == 3) {
      ++$yellow;
    } elseif ($crayon == 4) {
      ++$green;
    } elseif ($crayon == 5) {
      ++$blue;
    } elseif ($crayon == 6) {
      ++$purple;
    } elseif ($crayon == 7) {
      ++$brown;
    } else {
      ++$gray;
    }
	}
	if ($red > 0) {
		$cards .= ", $red red crayon";
		if ($red > 1) {
			$cards .= "s";
		}
	}
	if ($orange > 0) {
		$cards .= ", $orange orange crayon";
		if ($orange > 1) {
			$cards .= "s";
		}
	}
	if ($yellow > 0) {
		$cards .= ", $yellow yellow crayon";
		if ($yellow > 1) {
			$cards .= "s";
		}
	}
	if ($green > 0) {
		$cards .= ", $green green crayon";
		if ($green > 1) {
			$cards .= "s";
		}
	}
	if ($blue > 0) {
		$cards .= ", $blue blue crayon";
		if ($blue > 1) {
			$cards .= "s";
		}
	}
	if ($purple > 0) {
		$cards .= ", $purple purple crayon";
		if ($purple > 1) {
			$cards .= "s";
		}
	}
	if ($brown > 0) {
		$cards .= ", $brown brown crayon";
		if ($brown > 1) {
			$cards .= "s";
		}
	}
	if ($gray > 0) {
		$cards .= ", $gray gray crayon";
		if ($gray > 1) {
			$cards .= "s";
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