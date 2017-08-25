<?php
  $myfile1=fopen("loginfile.txt","w") or die("Unable to open file!");
  $txt1="Mike:a234:\r\n";
  fwrite($myfile1,$txt1);
  $txt1="Tom:b234:\r\n";
  fwrite($myfile1,$txt1);
  $txt1="Jerry:c234:\r\n";
  fwrite($myfile1,$txt1);
  fclose($myfile1);
  $myfile2=fopen("apartmentfile.txt","w");
  $txt2="downtown:Studio:fire place:800:\r\n";
  fwrite($myfile2,$txt2);
  $txt2="West Island:5.5:Indoor Parking:1000:\r\n";
  fwrite($myfile2,$txt2);
  $txt2="NDG:4.5:Outdoor Parking:900:\r\n";
  fwrite($myfile2,$txt2);
  $txt2="Lower Westmount:3.5:fire place:1100:\r\n";
  fwrite($myfile2,$txt2);
  fclose($myfile2);
?>