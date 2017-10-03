<?php
//login.php
require('header.php');
?>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email addresse</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Vi deler aldrig din email med tredjepart.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Adgangskode</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <small id="passwordHelp" class="form-text text-muted">Men vi deler måske din adgangskode.</small>
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php

require('footer.php');
?>
