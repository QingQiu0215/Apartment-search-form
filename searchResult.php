<?php 
    session_start();
    include("topOfPage.php");
    include("SearchForm.php");
?>

<?php		
  
  $location=trim($_POST["location"]);
  $size=trim($_POST["size"]);
  $including=trim($_POST["including"]);
  $price=trim($_POST["price"]);  
  $myfile=fopen("apartmentfile.txt","r") or die("Unable to open file!");
  $arr=array();
  $n=0;
  $n1=0;

  if($_SESSION["login"]==1)
  {
      while(!feof($myfile)) 
      {
         $arr[$n]=fgets($myfile);
	     $n++;
      }
      fclose($myfile);					
	  for($i=0;$i<$n;$i++)
	  {
		 $a= preg_split("/:/",$arr[$i]);
		 if(strcasecmp($a[0],$location) == 0 && strcasecmp($a[1],$size) == 0 && strcasecmp($a[2],$including) == 0 && strcasecmp($a[3],$price) == 0)		
		 {
			echo "Appartment location: ".$location.", appartment size:  ".$size.", including: ".$including.", price: ".$price;
			break;
		 }
		 $n1++;
	  }
      if($n1>=$n)
	     echo "The apartment can not be found.";	
  }
  else if($_SESSION["login"]==0)
  {
	  echo "The apartment is in ".$location."  ";
	  include("loginAddress.php");
  }
  include("bottom.php");
  session_destroy();
?>

