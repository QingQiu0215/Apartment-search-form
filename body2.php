<?php

  include("topOfPage.php");
?>
  <form id="right" action="logincheck.php" method="post"> 
    (letters and digits only )<br />  
    <b>username:</b><input type="text" name="username" />  <br /> 
    (at least 4 characters long (letters and digits only), at least one letter and one digit)<br /> 
    <b>password: </b><input type="password" name="password" />  <br />  
    <input type="submit" name="submit" value="submit" /> <br />
    
  </form>	
<?php
  include("searchForm.php");
  include("bottom.php");
?>