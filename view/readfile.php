
<?php
// $a=readfile("my_file.txt");
// echo $a;
//echo readfile("my_file.txt");

// $myfile = fopen("web.txt","r")
// or die("Unable to open file!");
// echo fread($myfile,filesize("web.txt"));
// fclose($myfile);

// $myfile = fopen("web1.txt","w")
// or die("Unable to open file!");
// $txt ="John Doe is an army\n";
// fwrite($myfile, $txt);

//  $txt ="Jane Doe is a moron\n";
//  fwrite($myfile, $txt);
//  $txt ="Jadsfesdeswfeqw\n";
//  fwrite($myfile, $txt);
//  $myfile = fopen("web1.txt","r");
//  $myfile = fopen("web1.txt","w");
// echo fread($myfile, filesize("web1.txt"));
// //echo fread($myfile,filesize("web1.txt"));
// fclose($myfile);

$myfile = fopen("web2.txt","a")
or die("Unable to open file!");
 $txt ="John Doe is an army\n";
 fwrite($myfile, $txt);

//  $txt ="Jane Doe is a moron\n";
//  fwrite($myfile, $txt);
//  $txt ="Jadsfesdeswfeqw\n";
//  fwrite($myfile, $txt);
  $myfile = fopen("web2.txt","r");
//  $myfile = fopen("web1.txt","w");
 echo fread($myfile, filesize("web2.txt"));
// //echo fread($myfile,filesize("web1.txt"));
// fclose($myfile);
?>