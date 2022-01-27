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
    if ($masteries[0] != "") {
      //crayons
      for($i=1; $i<=$numbMaster; $i++) {
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
    }
    //portfolio crayons
    if ($portfolio > 0) {
      for($i=1; $i<=$portfolio*4; $i++) {
        $randtype = 'all';
        $crayon = rand(1, 8);
        echo "<img src=\"http://colors-tcg.eu/images/crayon";
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