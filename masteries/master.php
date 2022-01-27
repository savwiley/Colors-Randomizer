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
    label:first-of-type {
      margin-right: 20px;
    }
    input[type=text] {
      width: 350px;
    }
    input[type=radio],
    input[type=submit] {
      cursor: pointer;
    }
  </style>
  
  <center>
  <h1>Mastery Rewards</h1>
  
  <div class="instructions">
    <p><b>Rewards:</b><br />
    • 2 random cards, 1 choice character card, and 1 crayon for mastering a character deck<br />
    • 3 random cards, 1 choice special card OR 1 copy of your signature, and 1 crayon for mastering a special deck<br />
    • 4 random cards, 4 random crayons for completing a portfolio</p>

    <p>You can also master signatures! Signatures 'deck' mastery works like a special deck mastery, the only difference is you don't get a master badge. Your own signature does count, as long as you have 20 different signatures.</p>

    <p>You may only master a deck once! If you are a returning player and have mastered the deck during your previous time here, you may of course master the deck again.</p>

    <p><b>If you are inputting multiple decks,</b> please do not input character and special decks together. You can put as many character decks OR as many special decks as you want, so long as you do not mix the categories.</p>

    <p>The masteries page is <a href="https://colors-tcg.dreamwidth.org/2630874.html">here!</a>
  </div>
  
  <br /><br />
  
    <form action="masterCards.php" method="post">
      <p>Decks you mastered separated by commas (ie, capsule, summoner, etc):<br />
      <input type="text" name="master" /></p>
  
      <br />
  
      <p>Choice cards (ie, capsule01, capsule02, cain03, etc):<br />
      <input type="text" name="choice" /></p>
      
      <br />

      <p>Number of finished portfolios:<br />
      <input type="text" name="portfolio" value="0" /></p>
  
      <br />
  
      <p>Deck type of mastery:<br />
      <input type="radio" name="deck" value="character" checked />
      <label for="character">Character</label>
      <input type="radio" name="deck" value="special" />
      <label for="special">Special</label></p>
  
      <br />
  
      <input type="submit" />
    </form>
  </center>
<?php include("$footer"); ?>