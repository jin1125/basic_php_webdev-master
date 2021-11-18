<?php

require('../app/functions.php');

include('../app/_parts/_header.php');

?>

<form action="result.php" method='get'>
  <label>
    <input type="radio" name="color" value='orange'>
    orange
  </label>

  <label>
    <input type="radio" name="color" value='pink'>
    pink
  </label>

  <label>
    <input type="radio" name="color" value='gold'>
    gold
  </label>
  <button>Send</button>
  <a href="reset.php">[reset]</a>
</form>

<?php
include('../app/_parts/_footer.php');