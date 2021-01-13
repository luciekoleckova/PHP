<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body bgcolor="#ff6e33">
<h1>Hledej knihu</h1>
<form method="POST" action="nalezeno.php">
<table>	
<tr><td>Příjmení autora:</td>
	<td><input name="prijmeniHledat" type="text" ></td></tr>
	<tr><td>Jméno autora:</td>
	<td><input name="jmenoHledat" type="text" ><td></tr>
	<tr><td>Název knihy:</td>
	<td><input name="nazevHledat" type="text" ></td></tr>
    <tr><td>ISBN:</td>
	<td><input name="isbnHledat" type="text" >
    <input type="submit" value="Hledat" ></td><tr>
</table>
</form>
<a href="vlozeni.php">Formulář pro vkládání</a><br>
<a href="seznam.php">Seznam knih</a>


</body>
</head>
