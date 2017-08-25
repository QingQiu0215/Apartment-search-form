<?php
    session_start();
    if(isset($_POST["submit"]))  
    {  
        $user = $_POST["username"];  
        $psw = $_POST["password"];  
		$myfile=fopen("loginfile.txt","r") or die("Unable to open file!");
		$arr=array();
		$n=0;
		$n1=0;
		$n2=0;
		while(!feof($myfile)) 
		{
           $arr[$n]=fgets($myfile);
		   $n++;
        }
        fclose($myfile);
        if($user == "" || $psw == "")  
        {  
            echo "<script>alert('please enter username and password.');</script>";
        }
        else if(!preg_match("/^[0-9a-zA-Z]*$/",$user))     		
		{
			echo "<script>alert('The username does not match.');</script>";
			   include ("body2.php");
			
		}
		else if(preg_match("/^[0-9a-zA-Z]*$/",$user)&&!(preg_match("/[a-zA-Z]/",$psw)&&preg_match("/[a-zA-Z]/",$psw)&&preg_match("/[0-9]/",$psw))) 
		{
               echo "<script>alert('The password does not match the pattern.');</script>";
			   include ("body2.php");
		}
		else
		{		
			for($i=0;$i<count($arr);$i++)
			{
				$pair=preg_split("/:/", $arr[$i]);
				if(strcasecmp($pair[0],$user)!=0)
				{
					$n1++;
				}
			}
			if($n1>=count($arr))
			{
			   echo "<script>alert('The username does not exist.');</script>";
			   include ("body2.php");
			}
			else
			{
			    for($i=0;$i<count($arr);$i++)
			    {
				   $pair=preg_split("/:/", $arr[$i]);			
				   if(strcasecmp($pair[0],$user)==0&&strcasecmp($pair[1],$psw)==0)
				   {	
			         $_SESSION["login"]=1;	
                     include("body3.php");	
                     break;					 					 
				   }
				   $n2++;
			    }
			    if($n2>=count($arr))
				{
					echo "<script>alert('The password does not exist.');</script>";
					include("body2.php");
				} 					
			}			
		}	
	}     
?>