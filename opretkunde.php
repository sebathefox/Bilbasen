<?php
//login.php
require('header.php');
//require('connect.php');

echo '<h3>Log Ind</h3><br>';

echo '
<form class="inpt" method="post" action="">
  Fornavn: <input type="text" name="firstname" value="F.eks. Svend"/><br>
  Efternavn: <input type="text" name="lastname" value="Hansönsön"/><br>
  <input type="submit" value="Opret"/>
</form>



';



require('footer.php');
?>
