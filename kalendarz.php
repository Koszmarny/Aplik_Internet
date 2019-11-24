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
    <title>Kalendarz</title>
</head>
<body>
<header class="w3-container"></header>
<div class="w3-bar w3-green">
    <a href="Strona.html"
       class="w3-bar-item w3-button w3-hover-white">Strona główna</a>
    <a href="http://matrix.umcs.pl:10111/"
       class="w3-bar-item w3-button w3-hover-white">Logowanie</a>
    <a href="test.php"
       class="w3-bar-item w3-button w3-hover-white">Test</a>

</div>
</body>
<?PHP

function printCalendar()
{
$year = date("Y");
$monthNum = date("n");
$daysofmonth = date("t");
$dayofweek = date("w");
$dayofmonth = date("j");
$firstdayofmonth = date("w", mktime(0, 0, 0, $monthNum, 1, $year));

if ($dayofweek == 0) $dayofweek = 7;
if ($firstdayofmonth == 0) $firstdayofmonth = 7;

switch ($monthNum) {
    case 1 :
        $monthName = "Styczeń";
        break;
    case 2 :
        $monthName = "Luty";
        break;
    case 3 :
        $monthName = "Marzec";
        break;
    case 4 :
        $monthName = "Kwiecień";
        break;
    case 5 :
        $monthName = "Maj";
        break;
    case 6 :
        $monthName = "Czerwiec";
        break;
    case 7 :
        $monthName = "Lipiec";
        break;
    case 8 :
        $monthName = "Sierpień";
        break;
    case 9 :
        $monthName = "Wrzesień";
        break;
    case 10 :
        $monthName = "Październik";
        break;
    case 11 :
        $monthName = "Listopad";
        break;
    case 12 :
        $monthName = "Grudzień";
        break;
}

echo("<TABLE border = 2 style='width: 60%'><TR>");
echo("<TD bgcolor=\"yellow\" align=\"center\" colspan=\"9\">");
echo($monthName . " " . $year);
echo("</TD></TR><TR>");
?>
<TR>
    <TD align="center" bgcolor="pink">Pn</TD>
    <TD align="center" bgcolor="pink">Wt</TD>
    <TD align="center" bgcolor="pink">Sr</TD>
    <TD align="center" bgcolor="pink">Cz</TD>
    <TD align="center" bgcolor="pink">Pi</TD>
    <TD align="center" bgcolor="pink">So</TD>
    <TD align="center" bgcolor="pink">Nd</TD>
</TR>
<?
$j = $daysofmonth + $firstdayofmonth - 1;

for ($i = 0; $i < $j; $i++) {
    if ($i < $firstdayofmonth - 1) {
        echo("<TD bgcolor=\"white\"></TD>");
        continue;
    }
    if (($i % 7) == 0) {
        echo("</TR><TR>");
    }
    if (($i - $firstdayofmonth + 2) == $dayofmonth) {
        $color = "yellow";
    } else {
        $color = "green";
    }
    echo("<TD bgcolor=\"$color\" align=\"center\">");
    echo($i - $firstdayofmonth + 2);
    echo("</TD>");
}
echo("</TR></TABLE>");
}
printCalendar();
?>