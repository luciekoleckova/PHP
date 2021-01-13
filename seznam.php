<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body bgcolor="#ff6e33">
<h1>Seznam knih</h1>
<table border=1>
    <tr>
    <td>ISBN</td>
    <td>Jméno autora</td>
    <td>Příjmení autora</td>
    <td>Název knihy</td>
    <td>Popis</td>
    </tr>

<?php
if (!($con = mysqli_connect("localhost","knihy","heslo","knihy")))
{
  die("Nelze se připojit k databázovému serveru!</body></html>");
}
mysqli_query($con,"SET NAMES 'utf8'");
if (!($vysledek = mysqli_query($con, "SELECT isbn, jmeno, prijmeni, nazev, popis FROM kniha")))
{
  die("Nelze provést dotaz.</body></html>");
}
?>

<?php
while ($radek = mysqli_fetch_array($vysledek))
{
?>
<tr>
<td><?php echo htmlspecialchars($radek["isbn"]);?></td>
<td><?php echo htmlspecialchars($radek["jmeno"]);?></td> 
<td><?php echo htmlspecialchars($radek["prijmeni"]);?></td>
<td><?php echo htmlspecialchars($radek["nazev"]);?></td>
<td><?php echo htmlspecialchars($radek["popis"]);?></td>
</tr>
<?php   
}
mysqli_free_result($vysledek);
mysqli_close($con);
?>
</table>
<a href="vlozeni.php">Vkládací formulář</a><br>
<a href="vyhledej.php">Vyhledej knihu</a>

</body>
</head>
