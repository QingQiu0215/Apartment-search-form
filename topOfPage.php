<!DOCTYPE html>

   <?php
date_default_timezone_set("PRC");
echo '<div id="time"></div>
<script type="text/javascript">
        function $(o){
            return document.getElementById(o);
        }
        var ts='.(round(microtime(true)*1000)).';
        function getTime(){
            var t=new Date(ts);
            with(t){
                var _time="Now is:"+getFullYear()+"-" + (getMonth()+1)+"-"+getDate()+" " + (getHours()<10 ? "0" :"") + getHours() + ":" + (getMinutes()<10 ? "0" :"") + getMinutes() + ":" + (getSeconds()<10 ? "0" :"") + getSeconds();
            }
            $("time").innerHTML=_time;
            setTimeout("getTime()",1000);
            ts+=1000;
        }
        getTime();
</script>';
?>
<html lang="en">
  <head>
    <title>SearchFormPresentation</title>
    <meta charset="utf-8"/> 
    <style type = "text/css">
	  body {font-family: Arial;background-color:#FFF4C1}
      fieldset.one {border: thin solid blue;background-color:#ACD6FF;}
	  legend.one{color:blue;font-size:1.2em;font-weight: bold;}
      fieldset.two {border: thin solid green;background-color:#DFFFDF;}
	  legend.two {color:green;font-size:1.2em;font-weight: bold;}
	  .spaned {font-weight:bold} 
	  #bottom {background-color:blue;text-align:center;}
	  #right {text-align:right;}
    </style> 
	<script type="text/javascript" src="SearchForm.js"></script>
  </head>
  <body>
    <table>
	  <tr>
	    <td><a href="body.php"><img src= "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Flag_of_Quebec.svg/600px-Flag_of_Quebec.svg.png" alt="picture of Quebec" height="50" width="100"/></a></td>
		<td><h1>Qing's Apartment Search form</h1></td>
	  </tr>
	</table>
	

    