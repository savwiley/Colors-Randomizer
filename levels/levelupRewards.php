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
    $red = 0;
    $orange = 0;
    $yellow = 0;
    $green = 0;
    $blue = 0;
    $purple = 0;
    $brown = 0;
    $gray = 0;
    for($i=1; $i<=$allLevels; $i++) {
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