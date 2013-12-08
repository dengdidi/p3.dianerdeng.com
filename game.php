<!DOCTYPE HTML>
 
 <!--
 !  Diane Deng
 !  CSCI E-15
 !  p3.dianerdeng.com
 -->
 
 
<html>

<head>
	<meta charset="utf-8">
	<title>Believr: Rumple's Curse Generator</title>
	
	<link href="../css/styles.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery.form.js"></script>

		<script>

			function validateForm()
        {

            if ( curse.fieldName.value = null || curse.fieldName.value = "")
            {
              alert("Please enter all fields");
              return false;
            }
            else
            {

             return true;
            } 
        }

			function createCurse(curse){

				alert("Are you sure you REALLY want to curse " + curse.fieldName.value + "?" );

				var curseLines;

					curseLines = ("<center><b>The Curse of " + curse.fieldName.value + "</b><br><br></center>");
					curseLines += ("<p><em>You'll Need:</em>");
					curseLines += ("<ul><li>"+ curse.field1.value + " tsp. of " + curse.field2.value + " dust</li>");
					curseLines += ("<li>1 cup of " + curse.field3.value + "</li>");
					curseLines += ("<li>2 drops of " + curse.field4.value + " ink</li>");
					curseLines += ("<li>" + curse.field5.value + " troll toe nail clippings</li>");
					curseLines += ("<li>3 cups of " + curse.field6.value + " juice</li></ul>");
					curseLines += ("Stir for " + curse.field7.value + " strokes in large iron mixing bowl & set aside for at least 1 hour before using</p><br>");
					curseLines += ("<p><em>Curse:</em></p>");
					curseLines += ("<p>May " + curse.field8.value + " " + curse.field9.value + " " + curse.fieldName.value + " in the " + curse.field10.value + ". And for " + curse.field11.value + " years, " + curse.fieldName.value + " shall " + curse.field12.value + " in " + curse.field13.value + " where " + curse.field14.value + " " + curse.field15.value + " " + curse.fieldName.value + " until " + curse.fieldName.value + " " + curse.field16.value + ". I call upon Rumplestilskin and Pandora's box to hex " + curse.fieldName.value + " for " + curse.field17.value + " years.</p>");			
					
				curseWindow = window.open("","displayWindow","toolbar=no,width=300,height=500,directories=no,status=no,scrollbars=no,resize=yes,menubar=no")
				curseWindow.document.write(curseLines)
				curseWindow.document.close()
			}
		</script>

		<noscript>Sorry, your browser does not support JavaScript!</noscript>
	
</head>

<body>
	<div id = "content">
			<h1>Rumplestilskin's Curse Generator</h1>
			<p>Fill out the form carefully to generate a curse with Rumplestilskin's help.</p>
			<p><small><em>*Only the truest believr can cast the strongest curses!</em></small></p><br>

		<form action="" name = "curse" onsubmit="return validateForm()">
			<center>
			<table border="0">

				<tr>
					<td>Name of To Be Cursed:</td>
					<td><input type="text" name="fieldName" size="30"></td>
				</tr>

				<tr>
					<td>Number:</td>
					<td><input type="text" name="field1" size="30"></td>
				</tr>

				<tr>
					<td>Animal:</td>
					<td><input type="text" name="field2" size="30"></td>
				</tr>

				<tr>
					<td>Drink/Beverage:</td>
					<td><input type="text" name="field3" size="30"></td>
				</tr>

				<tr>
					<td>Color:</td>
					<td><input type="text" name="field4" size="30"></td>
				</tr>

				<tr>
					<td>Number:</td>
					<td><input type="text" name="field5" size="30"></td>
				</tr>

				<tr>
					<td>Fruit:</td>
					<td><input type="text" name="field6" size="30"></td>
				</tr>

				<tr>
					<td>Number:</td>
					<td><input type="text" name="field7" size="30"></td>
				</tr>

				<tr>
					<td>Singular Proper Noun:</td>
					<td><input type="text" name="field8" size="30"></td>
				</tr>

				<tr>
					<td>Present Verb:</td>
					<td><input type="text" name="field9" size="30"></td>
				</tr>

				<tr>
					<td>Body Part:</td>
					<td><input type="text" name="field10" size="30"></td>
				</tr>

				<tr>
					<td>Number:</td>
					<td><input type="text" name="field11" size="30"></td>
				</tr>

				<tr>
					<td>Verb:</td>
					<td><input type="text" name="field12" size="30"></td>
				</tr>

				<tr>
					<td>Place:</td>
					<td><input type="text" name="field13" size="30"></td>
				</tr>

				<tr>
					<td>Plural Noun:</td>
					<td><input type="text" name="field14" size="30"></td>
				</tr>

				<tr>
					<td>Plural Present Verb:</td>
					<td><input type="text" name="field15" size="30"></td>
				</tr>

				<tr>
					<td>Singular Present Verb:</td>
					<td><input type="text" name="field16" size="30"></td>
				</tr>

				<tr>
					<td>Number:</td>
					<td><input type="text" name="field17" size="30"></td>
				</tr>
			</table>

			<br>
			
			<input type="button" value="Get Your Curse Now!" onclick="createCurse(this.form)">	
			</center>
		</form>

		<br><br>
		<p>
			<em>REMEMBER: There's always a price to pay for magic.</em>
		</p>

	</div>

	<div id="footer">
		<p>&copy;2013 Diane Deng | HARVARD DWA15</p>
	</div>

</body>

</html>