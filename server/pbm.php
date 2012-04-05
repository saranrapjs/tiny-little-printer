<?
system("./wkhtmltoimage-i386 http://ilikenicethings.com/weather/printer/ weather.png");
system("convert weather.png -scale 250% weather.pbm");
system("cat weather.pbm | pnmcrop -left -right -bottom -top | pnmtoplainpnm | ./pbm2lwxl/pbm2lwxl 700 -1  > weather.txt");
system('printf ".\n.\n.\n.\n.\n.\n.\n..\n.\n.\n.\n.\n.\n.\n..\n.\n.\n.\n.\n.\n.\n." | pbmtext | pnmcrop -top -right | pnmtoplainpnm | ./pbm2lwxl/pbm2lwxl 700 -1 > feed.txt');
$filename = 'weather.txt';
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: public"); 
header("Content-Type: text/plain"); 
header("Content-Transfer-Encoding: binary");
echo file_get_contents($filename); // raw printer output
echo file_get_contents("feed.txt"); // this pushes printer output a few lines so the paper fully emerges from the printer
?>