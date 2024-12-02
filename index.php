<?php
echo "Liczby podzielne przez 4 (pętla for):\n";
for ($i = 4 ; $i <= 200; $i++) {
    if($i % 4 == 0) {
        echo $i . "\n";
    }
}

echo"\n";

echo "Liczby podzielne przez 4 (pętla for):\n";
$i = 4; 
while($i <= 200){
    if($i % 4 == 0) {
        echo $i . "\n";
    }
    $i++;
}

echo"\n";

echo "Liczby podzielne przez 4 (pętla for):\n";
$i = 4;
do{
   if($i % 4 == 0) {
        echo $i . "\n";
    }
    $i++; 
} while($i <= 200);


echo "Liczby podzielne przez 5 i 8 (pętla for):\n";
for ($i = 4; $i <= 200; $i++) {
    if ($i % 5 == 0 && $i % 8 == 0) {
        echo $i . "\n";
    }
}
echo "Liczby podzielne przez 5 i 8 (pętla while):\n";
$i = 4;
while ($i <= 200) {
    if ($i % 5 == 0 && $i % 8 == 0) {
        echo $i . "\n";
    }
    $i++;
}

echo "Liczby podzielne przez 5 i 8 (pętla do-while):\n";
$i = 4;
do {
    if ($i % 5 == 0 && $i % 8 == 0) {
        echo $i . "\n";
    }
    $i++;
} while ($i <= 200);
$sum = 0; 

for ($i = 11; $i <= 17; $i++) {
    $sum += $i; 
}

echo "Suma liczb od 11 do 17 wynosi: $sum";

echo "Nieparzyste liczby od 40 do 350:\n";

for ($i = 40; $i <= 350; $i++) {
    if ($i % 2 != 0) { 
        echo $i . "\n";
    }
}

echo "Parzyste liczby od 40 do 250:\n";

for ($i = 40; $i <= 250; $i++) {
    if ($i % 2 == 0) { 
        echo $i . "\n";
    }
}


?>
