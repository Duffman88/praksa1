<?php

echo "Pozdrav";

echo "<br/>";

$ime = "Marko";
$prezime = "Kraljevic";

echo $ime . $prezime;

echo "<br/>";

//aritmeticke operacije

$num1 = 10;
$num2 = 15;

echo $num1 + $num2;

echo "<br/>";

echo $num1 - $num2;

echo "<br/>";

echo $num1 * $num2;

echo "<br/>";

echo $num1 / $num2;

echo "<br/>";

echo $num1 += 50;

echo "<br/>";

//nizovi

$imena = array("Ana","Stefan","Milos");

echo $imena[2];

echo "<br/>";

echo "$imena[2] je najbolji drug $imena[1]a"


?>

<?php

//petlje

echo "<br/>";

$x = 40;
$y = 30;

if ($x > $y) {
    echo $x;
} else {
    echo $y;
}

echo "<br/>";

$ocjena = 9;

if ($ocjena < 6) {
    echo "Pao!";
} elseif ($ocjena > 6 && $ocjena < 8) {
    echo "Vrlo dobar!";
} else {
    echo "Odlican!";
}

echo "<br/>";

$i = 9;
while ($i < 15) {
    echo "Broj je $i! <br/>";
    $i++;
} 

echo "<br/>";

for ($a = 40; $a <= 49; $a++) {
    echo "Vrijednost broja a je".$a ."<br/>";
}

$dan = "Uto";

switch ($dan) {
    case "Pon":
    case "Uto":
    case "Sri":
    case "Cet":
    case "Pet":
    echo "Radni dan";
    break;
    case "Sub":
    case "Ned":
    echo "Neradni dan";
    break;
}



?>
