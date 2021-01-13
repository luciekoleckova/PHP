<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body bgcolor="#ff6e33">

<h1>Knihy které odpovídají výběru</h1>
<table border=1>
        <tr>
        <td colspan="4"><b>Vyhledávání podle příjmení autora</b></td>
        </tr>
        <tr>
        <td>Příjmení autora</td>
        <td>Jméno autora</td>
        <td>Název knihy</td>
        <td>ISBN</td>
        </tr>  

<?php

$prijmeni2=addslashes($_POST["prijmeniHledat"]);
$jmeno2=addslashes($_POST["jmenoHledat"]);
$nazev2=addslashes($_POST["nazevHledat"]);
$isbn2=addslashes($_POST["isbnHledat"]);


if (!($con = mysqli_connect("localhost","knihy","heslo","knihy")))
{
  echo "Nelze se připojit k databázovému serveru!";
}
else{
    mysqli_query($con,"SET NAMES 'utf8'");
        if (!($vysledek1 = mysqli_query($con, "SELECT prijmeni, jmeno, nazev, isbn FROM kniha WHERE prijmeni='$prijmeni2'")))
{
        echo("Nenalezeno");
}
?>
<?php
while ($radek1 = mysqli_fetch_array($vysledek1))
{
?>
<tr>
<td><?php echo htmlspecialchars($radek1["prijmeni"]);?></td>
<td><?php echo htmlspecialchars($radek1["jmeno"]);?></td>
<td><?php echo htmlspecialchars($radek1["nazev"]);?></td> 
<td><?php echo htmlspecialchars($radek1["isbn"]);?></td>
</tr>
<?php   

}}
mysqli_free_result($vysledek1);
?>
</table><br><br>



<table border=1>
    <tr>
    <td colspan="4"><b>Vyhledávání podle jména autora</b></td>
    </tr>
    <tr>
    <td>Příjmení autora</td>
    <td>Jméno autora</td>
    <td>Název knihy</td>
    <td>ISBN</td>
    </tr>

<?php
 
if (!($vysledek2 = mysqli_query($con, "SELECT prijmeni, jmeno, nazev, isbn FROM kniha WHERE jmeno='$jmeno2'")))
{
        echo("Nenalezeno");
}
?>
<?php
while ($radek2 = mysqli_fetch_array($vysledek2))
{
?>
<tr>
<td><?php echo htmlspecialchars($radek2["prijmeni"]);?></td>
<td><?php echo htmlspecialchars($radek2["jmeno"]);?></td>
<td><?php echo htmlspecialchars($radek2["nazev"]);?></td> 
<td><?php echo htmlspecialchars($radek2["isbn"]);?></td>
</tr>
<?php   
}
mysqli_free_result($vysledek2);
?>
</table><br><br>


<table border=1>
    <tr>
    <td colspan="4"><b>Vyhledávání podle názvu knihy</b></td>
    </tr>
    <tr>
    <td>Příjmení autora</td>
    <td>Jméno autora</td>
    <td>Název knihy</td>
    <td>ISBN</td>
    </tr>
<?php


if (!($vysledek3 = mysqli_query($con, "SELECT prijmeni, jmeno, nazev, isbn FROM kniha WHERE nazev='$nazev2'")))
{
        echo("Nenalezeno");
}
?>
<?php
while ($radek3 = mysqli_fetch_array($vysledek3))
{
?>
<tr>
<td><?php echo htmlspecialchars($radek3["prijmeni"]);?></td>
<td><?php echo htmlspecialchars($radek3["jmeno"]);?></td>
<td><?php echo htmlspecialchars($radek3["nazev"]);?></td> 
<td><?php echo htmlspecialchars($radek3["isbn"]);?></td>
</tr>
<?php   
}
mysqli_free_result($vysledek3);
?>
</table><br><br>


<table border=1>
    <tr>
    <td colspan="4"><b>Vyhledávání podle ISBN knihy</b></td>
    </tr>
    <tr>
    <td>Příjmení autora</td>
    <td>Jméno autora</td>
    <td>Název knihy</td>
    <td>ISBN</td>
    </tr>

<?php
 
if (!($vysledek4 = mysqli_query($con, "SELECT prijmeni, jmeno, nazev, isbn FROM kniha WHERE isbn='$isbn2'")))
{
        echo("Nenalezeno");
}
?>
<?php
while ($radek4 = mysqli_fetch_array($vysledek4))
{
?>
<tr>
<td><?php echo htmlspecialchars($radek4["prijmeni"]);?></td>
<td><?php echo htmlspecialchars($radek4["jmeno"]);?></td>
<td><?php echo htmlspecialchars($radek4["nazev"]);?></td> 
<td><?php echo htmlspecialchars($radek4["isbn"]);?></td>
</tr>
<?php   
}
mysqli_free_result($vysledek4);
mysqli_close($con);
?>
</table>

<a href="vlozeni.php">Formulář pro vkládání</a><br>
<a href="seznam.php">Seznam knih</a><br>
<a href="vyhledej.php">Vyhledávání knih</a>

</body>
</head>
