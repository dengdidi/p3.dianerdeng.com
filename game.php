<!DOCTYPE HTML>
 
 <!--
 !  Diane Deng
 !  CSCI E-15
 !  p3.dianerdeng.com
 !	12.06.2013 @ 11:59PM
 -->
 
 
<html>

<head>
	<meta charset="utf-8">
	<title>Believr: Rumple's Curse Creator</title>
	<link href="../css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id ="content">
		<h1><center>Rumplestilskin's Curse Generator</center></h1>
		<p>Fill out the form accordingly to generate a curse with Rumplestilskin's help!</p>
		<p id="demo"></p>

		<center><button type="button" onclick="myCurseWindow()">Create My Curse!</button></center>

		<script>
			function myCurseWindow()
			{
				var myCurse = window.open("","myCurse","width=300,height=300");
				myCurse.document.write("<p>This is 'Your Curse'. Boo, Begone!</p>");
				//document.getElementById("demo").innerHTML = Date();
			}
		</script>

		<center><small><em><p>Only the truest believr can cast the strongest curses!</p></em></small></center>	
	</div>

	<div id="footer">
		<p>&copy;2013 Diane Deng | HARVARD DWA15</p>
	</div>
</body>

</html>