<?php

  include("topOfPage.php"); 
  $_SESSION["userName"]=$_POST["username"];  
  if(isset($_SESSION['userName'])) 
  {
	echo "<h5 id=right>welcome,".$_SESSION["userName"]."!"."</h5>";
  }		
?>
   <form id="right">
	  <button  type="button" >Login</button>
	</form>
	<hr/>
	
<?php
  include("SearchForm.php");
  include("bottom.php");

?>