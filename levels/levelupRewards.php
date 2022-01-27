<?php include("mytcg/settings.php");
include("$header");
?>

<center>
  <h1>Level Up Rewards</h1>

  <?php
    //variables
    $primary = (int)$_POST['primary'];
    $fruits = (int)$_POST['fruits'];
    $higher = (int)$_POST['higher'];
    $allLevels = $primary + $fruits + $higher;
    $choices = explode(", ", $_POST['choice']);
    $numbChoice = count($choices);
    $cards = "";
    //choice cards
    for($i=0; $i<$numbChoice; $i++) {
      echo "<img src=\"https://colors-tcg.eu/cards/";
      echo "$choices[$i]";
      echo ".$ext\" />";
      $cards .= ", $choices[$i]";
    }
    //primary rewards
    if ($primary > 0) {
      for($i=1; $i<=$primary*2; $i++) {
        $randtype = 'all';
        ob_start();
        include ("mytcg/random.php");
        $card = ob_get_clean();
        echo "<img src=\"https://colors-tcg.eu/cards/";
        echo "$card";
        echo ".$ext\" />";
        $cards .= ", $card";
      }
    }
    //fruit rewards
    if ($fruits > 0) {
      for($i=1; $i<=$fruits*3; $i++) {
        $randtype = 'all';
        ob_start();
        include ("mytcg/random.php");
        $card = ob_get_clean();
        echo "<img src=\"https://colors-tcg.eu/cards/";
        echo "$card";
        echo ".$ext\" />";
        $cards .= ", $card";
      }
    }
    //higher rewards
    if ($higher > 0) {
      for($i=1; $i<=$higher*4; $i++) {
        $randtype = 'all';
        ob_start();
        include ("mytcg/random.php");
        $card = ob_get_clean();
        echo "<img src=\"https://colors-tcg.eu/cards/";
        echo "$card";
        echo ".$ext\" />";
        $cards .= ", $card";
      }
    }
    //crayons
    for($i=1; $i<=$allLevels; $i++) {
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
    echo '<br /><br /><br />';
    echo '<textarea style="width: 200px;">';
      echo substr($cards, 2);
    echo '</textarea>'
  ?>

<br>
<br>
Now, visit the <a href="https://colors-tcg.dreamwidth.org/1241780.html">levels page</a> and post your levels comment along with your prizes.


</center>

<?php include("$footer"); ?>