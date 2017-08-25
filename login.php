<?php
  session_start();
    $_SESSION["login"]=0;
  include("topOfPage.php"); 		
?>
   <form id="right">
	  <a href="body2.php"><button  type="button" >Login</button></a>
	</form>
<?php
  include("files.php");
  include("searchForm.php");
  include("bottom.php");
?>