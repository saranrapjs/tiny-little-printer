<?
include("../nws2whatever/nws2whatever.php");
$weather = new nws2whatever(40.6498,-73.9488);

?>
<html>
	<head>
		<title></title>
		<style type="text/css">
		html {margin:0;padding:0;font-family:"Arial";}
		body {padding:0;font-size:62.5%;width:2.25in;}
		.weathermon {padding:10px 0 120px 0;width:100%;font-size:1em;}
		img {float: left;margin:0 .7em .7em 0;}
		p {padding:0 0 .2em 0;margin:0 0 .5em 1em;}
		.hilo {font-size:1.5em;height:5em;}
		.future_day {font-style:italic;margin-top:1.5em;font-size:1.5em;clear:both;text-transform: uppercase;}
		.future_weather {font-size:1.6em;}
		.today {font-weight:normal;font-size:3em;margin:0;}
		
		ul {list-style:none;margin:0;padding:0;}
		li {position: relative;}
		</style>
	</head>
	<body>
	<div class="weathermon">
	<img src="weather_printer.png" style="width:2.25in;"/>
	<ul>
<?
$i=0;	
foreach($weather->output["forecast"] as $time => $forecast) {
	if ($forecast["wordedforecast"] != "" && $i < 3) {
		echo '<li>';
		$dayClass = ($i==0) ? 'today future_day' : 'future_day';
		echo '<p class="'.$dayClass.'">'.$time.'</p>';
		if ($i==0) echo '<img src="'.$forecast["icon"].'"/>';
		echo '<p class="future_weather">'.$forecast['wordedforecast'].'</p>';
		echo '</li>';
		$i++;
	}
}
?>
		</ul>
	</div>
	</body>
</html>
