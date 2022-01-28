<?php include("mytcg/settings.php");
include("$header");
?>

<center>
  <h1>Mastery Rewards</h1>

  <?php
    //variables
    $masteries = explode(", ", $_POST['master']);
    $numbMaster = count($masteries);
    $choices = explode(", ", $_POST['choice']);
    $portfolio = (int)$_POST['portfolio'];
    $cards = "";
    //only fires if $_POST['master'] has a value
    if ($masteries[0] != "") {
      //displays master badges
      for($i=0; $i<$numbMaster; $i++) {
        echo "<img src=\"https://colors-tcg.eu/cards/";
        echo "$masteries[$i]master";
        echo ".$ext\" />";
      }
      echo '<br /><br />';
      //displays choice cards & throws them in $cards
      for($i=0; $i<$numbMaster; $i++) {
        echo "<img src=\"https://colors-tcg.eu/cards/";
        echo "$choices[$i]";
        echo ".$ext\" />";
        $cards .= ", $choices[$i]";
      }
      //if $_POST['deck'] = character, then $numbMaster * 2
      if ($_POST['deck'] == "character") {
        for($i=1; $i<=$numbMaster*2; $i++) {
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
      //if $_POST['deck'] = special, then $numbMaster * 3
      if ($_POST['deck'] == "special") {
        for($i=1; $i<=$numbMaster*3; $i++) {
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
    }
    //portfolio rewards
    if ($portfolio > 0) {
      for($i=1; $i<=$portfolio*4; $i++) {
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
    echo '<br /><br />';
    //only fires if $_POST['master'] has a value
    //crayons
    if ($masteries[0] != "" || $portfolio > 0) {
      $runTimes = $numbMaster + ($portfolio * 4);
      $red = 0;
      $orange = 0;
      $yellow = 0;
      $green = 0;
      $blue = 0;
      $purple = 0;
      $brown = 0;
      $gray = 0;
      for($i=1; $i<=$runTimes; $i++) {
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
    }
    echo '<br /><br /><br />';
    echo '<textarea style="width: 200px;">';
      echo substr($cards, 2);
    echo '</textarea>'
  ?>

<br>
<br>
Now, visit the <a href="https://colors-tcg.dreamwidth.org/2630874.html">masteries page</a> and post your mastery comment along with your prizes.


</center>

<?php include("$footer"); ?>