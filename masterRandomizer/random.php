<?php include("mytcg/settings.php");
include("$header");
?>

<style>
  form {
    display: flex;
    flex-wrap: wrap;
    width: 600px;
  }
  .first {
    width: 50%;
  }
  .second {
    width: 50%;
    text-align: right;
  }
  .third {
    width: 100%;
  }
  .fourth {
    width: 100%;
    padding: 10px 0;
    text-align: center;
  }
  .fourth input {
    font-weight: bold;
    font-size: 20px;
  }
</style>

<h1>Randomizer</h1>
<center>
<form action="randomized.php" method="post">

  <div class="first">
    <b>All Cards:</b> <br />
      <input type="text" name="allCards" value="0" />
    <br /><br />
    <b>Special Cards:</b> <br />
      <input type="text" name="spCards" value="0" />
    <br /><br />
    <b>New Cards:</b> <br />
      <input type="text" name="newCards" value="0" />
    <br /><br />
    <b>Crayons:</b> <br />
      <input type="text" name="crayons" value="0" />
  </div>

	<div class="second">
    <b>Red:</b>
      <input type="text" name="redCards" value="0" />
    <br /><br />
    <b>Orange:</b>
      <input type="text" name="orangeCards" value="0" />
    <br /><br />
    <b>Yellow:</b>
      <input type="text" name="yellowCards" value="0" />
    <br /><br />
    <b>Green:</b>
      <input type="text" name="greenCards" value="0" />
    <br /><br />
    <b>Blue:</b>
      <input type="text" name="blueCards" value="0" />
    <br /><br />
    <b>Purple:</b>
      <input type="text" name="purpleCards" value="0" />
    <br /><br />
    <b>Brown:</b>
      <input type="text" name="brownCards" value="0" />
    <br /><br />
    <b>Gray:</b>
      <input type="text" name="grayCards" value="0" />
  </div>
    
	<div class="third">
    <p>These buttons will only change the value of "All Cards" & "Crayons" inputs.</p>

      <button type="button" onclick="primaries()">Sketchpads/Primary/Masteries</button>
      
      <button type="button" onclick="fruits()">Fruits/Special Masteries</button>
      
      <button type="button" onclick="precious()">Precious & Up</button>
      
      <button type="button" onclick="portfolio()">Portfolios</button>
  </div>

  <div class="fourth">
    <input type="submit" />
  </div>

</form>
</center>
<br /><br />
<script>
	const allCards = document.querySelector('input[name="allCards"]');
	const crayons = document.querySelector('input[name="crayons"]');

	const primaries = () => {
		allCards.value = "2";
		crayons.value = "1";
	};
	const fruits = () => {
		allCards.value = "3";
		crayons.value = "1";
	};
	const precious = () => {
		allCards.value = "4";
		crayons.value = "1";
	};
	const portfolio = () => {
		allCards.value = "4";
		crayons.value = "4";
	};
</script>
<?php include("$footer"); ?>