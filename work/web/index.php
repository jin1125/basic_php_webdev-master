<?php

require('../app/functions.php');

include('../app/_parts/_header.php');

?>

<form action="result.php" method='get'>
  <label>
    <input type="checkbox" name="colors[]" value='orange'>
    orange
  </label>

  <label>
    <input type="checkbox" name="colors[]" value='pink'>
    pink
  </label>

  <label>
    <input type="checkbox" name="colors[]" value='gold'>
    gold
  </label>
  <button>Send</button>
</form>

<?php
include('../app/_parts/_footer.php');