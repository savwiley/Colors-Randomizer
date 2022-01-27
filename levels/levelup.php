<?php include("mytcg/settings.php");
include("$header");
?>

  <style>
    .instructions {
      margin: auto;
      width: 50%;
      text-align: left;
      box-shadow: none;
    }
    input[type=text] {
      width: 350px;
    }
    input[type=submit] {
      cursor: pointer;
    }
  </style>
  
  <center>
  <h1>Level Up</h1>
  
  <div class="instructions">
    <p>Levels at Colors are divided into seven sets.</p>

    <p>• <b>Primary Set</b> levels up every 100 cards. You receive 2 random cards, 1 choice character card, and 1 crayon per level.<br />
    • <b>Fruits Set</b> levels up every 200 cards. You receive 3 random cards, 1 choice character card, and 1 crayon per level.<br />
    • <b>Precious, Flowers, Planets, Elements, Felines, and Rainbow Sets</b> level up every 300 cards. You receive 4 random cards, 1 choice character card, and 1 crayon per level.<br />
    • <b>You will remain at Rainbow Set</b> once reaching it but will still be able to accept level up rewards for every 300 cards.</p>

    <p>You can find more information about the different level tiers <a href="https://colors-tcg.dreamwidth.org/1241780.html">here</a>.</p>

    <p>To collect rewards, please indicate how many levels you've ascended through into the appropriate inputs below. Don't forget to also indicate your choice cards separated by commas!</p>
  </div>
  
  <br /><br />
  
    <form action="levelupRewards.php" method="post">
      <p>Number of Primary Levels:<br />
      <input type="text" name="primary" value="0" /></p>
  
      <br />
  
      <p>Number of Fruits Levels:<br />
      <input type="text" name="fruits" value="0" /></p>
      
      <br />

      <p>Number of Precious Levels or higher:<br />
      <input type="text" name="higher" value="0" /></p>
  
      <br />

      <p>Choice cards (ie, capsule01, capsule02, cain03, etc):<br />
      <input type="text" name="choice" /></p>
  
      <br />
  
      <input type="submit" />
    </form>
  </center>
<?php include("$footer"); ?>