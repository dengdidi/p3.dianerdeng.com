<!DOCTYPE HTML>
 
 <!--
 !  Diane Deng
 !  CSCI E-15
 !  p3.dianerdeng.com
 -->
 
 
<html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Believr: Rumple's Curse Generator</title>
	<link href="../css/styles.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

		<script>
			 
			function createCurse(form){
				
				alert("Are you sure you REALLY want to curse " + form.fieldName.value + "?" );

				var curseLines;

					curseLines = ("<center><b>The Curse of " + form.fieldName.value + "</b><br><br></center>");
					curseLines += ("<p><em>You'll Need:</em>");
					curseLines += ("<ul><li>"+ form.field1.value + " tsp. of " + form.field2.value + " dust</li>");
					curseLines += ("<li>1 cup of " + form.field3.value + "</li>");
					curseLines += ("<li>2 drops of " + form.field4.value + " ink</li>");
					curseLines += ("<li>" + form.field5.value + " troll toe nail clippings</li>");
					curseLines += ("<li>3 cups of " + form.field6.value + " juice</li></ul>");
					curseLines += ("Stir for " + form.field7.value + " strokes in large iron mixing bowl & set aside for at least 1 hour before using</p><br>");
					curseLines += ("<p><em>Curse:</em></p>");
					curseLines += ("<p>May " + form.field8.value + " " + form.field9.value + " " + form.fieldName.value + " in the " + form.field10.value + ". And for " + form.field11.value + " years, " + form.fieldName.value + " shall " + form.field12.value + " in " + form.field13.value + " where " + form.field14.value + " " + form.field15.value + " " + form.fieldName.value + " until " + form.fieldName.value + " " + form.field16.value + ". I call upon Rumplestilskin and Pandora's box to hex " + form.fieldName.value + " for " + form.field17.value + " years.</p>");			
					
				curseWindow = window.open("","displayWindow","toolbar=no,width=300,height=500,directories=no,status=no,scrollbars=no,resize=yes,menubar=no")
				curseWindow.document.write(curseLines)
				curseWindow.document.close()
			}
		</script>
	
</head>

<body>
	<div id = "content">
		<center>
			<h1>Rumplestilskin's Curse Generator</h1>
			<p>Fill out the form carefully to generate a curse with Rumplestilskin's help.</p>
			<small><em><p>*Only the truest believr can cast the strongest curses!</p></em></small><br>

		<form name = "curse">
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
		
		</form>
		</center>

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