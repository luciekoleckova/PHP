<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body bgcolor="#ff6e33">
<?php
if (!($con = mysqli_connect("localhost","knihy","heslo","knihy")))
{
	die("Nelze se připojit k databázovému serveru!</body></html>");
}

mysqli_query($con,"SET NAMES 'utf8'");
if (!((isset($_POST["vlozit"])) && ($_POST["isbn"] != "") && ($_POST["jmeno"] != "") && ($_POST["prijmeni"] != "")&& ($_POST["nazev"] != "") && ($_POST["popis"] != ""))) {
	echo "Nelze vložit! Musíte zadat všechny údaje";}
elseif (mysqli_query($con,
		"INSERT INTO kniha(isbn, jmeno, prijmeni, nazev, popis) VALUES('" .
		addslashes($_POST["isbn"]) . "', '" .
        addslashes($_POST["jmeno"]) . "', '" .
        addslashes($_POST["prijmeni"]) . "', '" .
        addslashes($_POST["nazev"]) . "', '" .
		addslashes($_POST["popis"]) . "')"))
{
	echo "Úspěšně vloženo.";
}
else
{
	echo "Nelze provést dotaz. " . mysqli_error($con);
}

mysqli_close($con); 
?>
<br>
<a href="vlozeni.php">Zpět na vkládací formulář</a>
<br>
<a href="seznam.php">Seznam všech knih</a>
<br>
<a href="vyhledej.php">Vyhledej knihu</a>
</body>
</html>