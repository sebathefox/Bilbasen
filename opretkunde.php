<?php
//login.php
require('header.php');
?>

<form>
  <div class="form-row">
  <div class="col">
    <label for="exampleInputEmail1">Email addresse</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Vi deler aldrig din email med tredjepart.</small>
  </div>
  <div class="col">
    <label for="exampleInputPassword1">Adgangskode</label>
    <input type="password" class="form-control" placeholder="Password">
    <small id="passwordHelp" class="form-text text-muted">Men vi deler måske din adgangskode.</small>
  </div>
</div>
<br>
<div style="border-bottom: 1px solid #ccc;"></div>
<br>

<div class="form-group">
    <label for="exampleFormControlSelect2">Mærke</label>
    <select class="form-control">
      <option>Audi</option>
      <option>Fiat</option>
      <option>Nissan</option>
      <option>Mazda</option>
      <option>Alpina</option>
      <option>Isuzu</option>
      <option>Saab</option>
      <option>Toyota</option>
      <option>Osv</option>
      <option>Osv</option>
    </select>
  </div>
      <div class="form-group">
          <label for="exampleFormControlSelect2">Model</label>
          <select class="form-control">
            <option>Skal</option>
            <option>Forbedres</option>
            <option>Så</option>
            <option>Den</option>
            <option>Kun</option>
            <option>Viser</option>
            <option>Moddellerne</option>
            <option>Fra</option>
            <option>Den</option>
            <option>Fabrikant</option>
            <option>Der</option>
            <option>Er</option>
            <option>Valgt</option>
          </select>
        </div>
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" id="lic" onchange="document.getElementById('fin').disabled = !this.checked">
        Jeg accepterer hermed
      </label>
    </div>
  <button type="submit" class="btn btn-primary" disabled="disabled" id="fin">Submit</button>
</form>


<?php

require('footer.php');
?>
