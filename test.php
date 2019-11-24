<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="shortcut icon"
          href="https://lh3.googleusercontent.com/a-/AAuE7mCNV-c5FoaN1Y6vKhgVV5OTtDe3ToSzr9T1k-vC=s96-cc"
          type="image/x-icon">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Test</title>
</head>
<body class="w3-green">
<header class="w3-container"></header>
<div class="w3-row">
    <div class=" w3-container w3-green">
        <a href="Strona.html"
           class="w3-bar-item w3-button w3-hover-white">Strona główna</a>
        <a href="kalendarz.php"
           class="w3-bar-item w3-button w3-hover-white">Kalendarz</a>
        <a href="http://matrix.umcs.pl:10111/"
           class="w3-bar-item w3-button w3-hover-white">Logowanie</a>
    </div>
</div>
<form action="" method="post">

    <div class="w3-red">

        Ojciec Marii ma 3 córki: Ola, Ala i..?<br/>

        <input class="w3-radio" type="radio" name="pyt1" value="Ela">
        <label>Ela</label>
        <input class="w3-radio" type="radio" name="pyt1" value="Ala">
        <label>Basia</label>
        <input class="w3-radio" type="radio" name="pyt1" value="Maria">
        <label>Maria</label><br/><br/>

        U dwóch rąk jest 10 palców...Ile palców jest u dziesięciu rąk?<br/>

        <input name="pyt2" value=""/><br/><br/>

        Ile równy jest pierwiastek z 4?<br/>
        <input class="w3-check" type="checkbox" name="pyt3[]" value="2">
        <label>2</label>
        <input class="w3-check" type="checkbox" name="pyt3[]" value="-2">
        <label>-2</label>
        <input class="w3-check" type="checkbox" name="pyt3[]" value="4">
        <label>4</label><br/><br/>

        <input type="submit" value="Wyślij" name="submit"/>
        <input type="submit" value="Reset" name="reset"/>

    </div>

</form>
<?php
$punkty = 0;
if ($_POST ['pyt1'] == "Maria")
    $punkty++;
if ($_POST['pyt2'] == 50)
    $punkty++;
if (($_POST ['pyt3']=="2") AND (['pyt3']=="-2"))
    $punkty++;


if ($_POST['submit']){
    echo "punkty: ";
    echo $punkty;
echo "/3";}
$punkty = 0;
if ($_POST['reset']){
    echo "punkty: ";
echo $punkty;
echo "/3";}

?>

</body>

</html>