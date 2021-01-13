<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body bgcolor="#ff6e33">
<h1>Formulář ke vkládání knih</h1>

<form method="POST" action="zpracuj.php">
	<table>
<tr>
	<td>ISBN knihy:</td>
	<td><input name="isbn" type="text" ></td>
</tr>
<tr>
	<td>Jméno autora:</td>
	<td><input name="jmeno" type="text" ></td>
</tr>
<tr>
	<td>Příjmení autora:</td>
	<td><input name="prijmeni" type="text" ></td>
</tr>
<tr>
	<td>Název knihy:</td>
	<td><input name="nazev" type="text" ></td>
</tr>
<tr>
	<td>Popis:</td>
	<td><textarea name="popis"></textarea>
	<input type="submit" name="vlozit" value="Vložit" ></td>
</tr>
</table>
</form>
<a href="seznam.php">Seznam všech knih</a><br>
<a href="vyhledej.php">Vyhledej knihu</a>
</body>
</html>
