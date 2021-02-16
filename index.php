<h5> 1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
</h5>

<?php
// $masyvas[]=[];
// for ($i = 0; $i <= 29; $i++){
// $masyvas[] = [rand(5, 25)];

// }
// echo '<pre>';
// print_r ($masyvas);
// echo '<br><br>';

$masyvas = [];

for ($i = 0; $i <= 29; $i++) {
    array_push($masyvas, rand(5, 25));
}
echo '<pre>';
print_r($masyvas);

?>

<h5>Naudodamiesi 1 uždavinio masyvu:</h5>
<p>a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;</p>
<?php
$daugiauNegu10 = 0;
foreach ($masyvas as $value) {
    if ($value > 10) {
        $daugiauNegu10++;
    }
}
echo $daugiauNegu10 . ' didesniu reiksmiu uz 10';
?>
<p>b) Raskite didžiausią masyvo reikšmę;</p>
<?php
$masyvukas = $masyvas;
rsort($masyvukas);
echo " Didziausia masyvo reiksme = $masyvukas[0]";

?>
<p>c) Suskaičiuokite visų reikšmių sumą;
</p>
<?php
$suma = 0;
foreach ($masyvas as $value) {
    $suma += $value;
}
echo "Visu reiksmiu suma = $suma";
?>

<p>d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
</p>
<?php
$masyvas2 = [];
foreach ($masyvas as $index => $value) {
    $value2 = $value - $index;
}
print_r($masyvas2);
?>

<p>e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
</p>
<?php
for ($i = count($masyvas); $i <= 39; $i++) {
    array_push($masyvas, rand(5, 25));
}
print_r($masyvas);
?>

<p> f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;</p>
<?php
$porinisArray = [];
$nePorinisArray = [];
foreach ($masyvas as $index => $value) {
    if ($value % 2 == 0) {
        array_push($porinisArray, $value);
    } else
        array_push($nePorinisArray, $value);
}
echo "Porinis Masyvas" . '<pre>';
print_r($porinisArray);
echo "NEporinis Masyvas" . '<pre>';
print_r($nePorinisArray);
?>
<p> g) Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;</p>
<?php
foreach ($masyvas as $index => $value) {

    if ($index % 2 == 0 & $value > 15) {
        $masyvas[$index] = 0;
        echo "suveike $index jo value = $value" . '<br>';
    }
}
echo '<pre>';
print_r($masyvas);
?>

<p>h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
</p>
<?php


for ($i = 0; $i < count($masyvas); $i++) {

    if ($masyvas[$i] > 10) {
        echo " Pirmiausias indeksas = $i , kurio verte didesne uz 10";
        break;
    }
}
?>
<P> i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;
</P>
<?php

foreach ($masyvas as $index => $value)

    if ($index % 2 == 0) {
        unset($masyvas[$index]);
    }
echo '<pre>';
print_r($masyvas);
?>

<h4>3. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.
</h4>

<?php

$array200 = [];
$countA = 0;
$countB = 0;
$countC = 0;
$countD = 0;

for ($i = 0; $i < 200; $i++) {
    $valueABC = chr(rand(65, 68));
    array_push($array200, $valueABC);

    if ($valueABC == chr(65)) {
        $countA++;
    }
    if ($valueABC == chr(66)) {
        $countB++;
    }
    if ($valueABC == chr(67)) {
        $countC++;
    }
    if ($valueABC == chr(68)) {
        $countD++;
    }
}
echo "<br>";
echo "Siame masyve A raidziu = $countA, B = $countB, C = $countC, D = $countD ";
echo '<pre>';
print_r($array200);
?>

<h4>4. Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.</h4>

<?php
$array201 = $array200;
echo sort($array201);
print_r($array201);
?>
<h4>5.Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių reikšmių kombinacijų gavote.
</h4>
<?php
$masyvas201 =[];
$masyvas202 =[];
$masyvas203 =[];
$trigubasMasyvas= [];
$vienodas = 0;
$unikalus = 0;

for ($i = 0; $i < 200; $i++) {
    $valueABC1 = chr(rand(65, 68));
    $valueABC2 = chr(rand(65, 68));
    $valueABC3 = chr(rand(65, 68));
    array_push($masyvas201, $valueABC1);
    array_push($masyvas202, $valueABC2);
    array_push($masyvas203, $valueABC3);
 
    $valueTrigubas = $masyvas201[$i] . $masyvas202[$i] . $masyvas203[$i];
    array_push($trigubasMasyvas,$valueTrigubas);
}
// foreach($trigubasMasyvas as $key =>$valueTrigubas){
//     echo $valueTrigubas[$key].'<br>';
//     if ($valueTrigubas[$key] !==$valueTrigubas[$key]){
//     Echo "nevienodas";}
// }

// for($i = 0; $i <count($trigubasMasyvas); $i++){
//     for($j = 0; $j < $i; $j++)
//     if($trigubasMasyvas[$i] == $trigubasMasyvas[$j]){
//         $vienodas++;
//         Echo "vienodas, ";
//     }
//     echo "<br>";
//     echo $trigubasMasyvas[$i];
// }
// $unikalus = count($trigubasMasyvas)- $vienodas;
// echo "<br>";
//     echo "kiek yra vienodu = $vienodas, UNIKALUS = $unikalus ";

echo "unikalios reiksmes = ";
print_r(count(array_count_values($trigubasMasyvas)));

// echo'<pre>';
// print_r($masyvas201);
// echo'<pre>';
// print_r($masyvas202);
// echo'<pre>';
// print_r($masyvas203);
// echo'<pre>';
// print_r($trigubasMasyvas);
?>

<h4> 6. Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
</h4>
<?php

$array1 = [];
$array2 = [];

while( count($array1)< 100) {
    $reiksme1 = rand(100, 999);
    if(!in_array($reiksme1, $array1)){
        array_push($array1,$reiksme1);
    }
}
while( count($array2)< 100) {
    $reiksme2 = rand(100, 999);
    if(!in_array($reiksme2, $array2)){
        array_push($array2,$reiksme2);
    }
}
echo '<pre>';
Echo "pirmas masyvas is unikaliu skaiciu";
print_r($array1);
echo '<br>';
echo '<pre>';
Echo "antras masyvas is unikaliu skaiciu";
print_r($array2);

?>

<h4> 7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
</h4>
<?php
$arrayUnikaliosReiksmes =[];
for ($i = 0; $i<count($array1); $i++){
    if(!in_array($array1[$i], $array2)){
        array_push($arrayUnikaliosReiksmes, $array1[$i]);
        
    }
}
// echo '<pre>';
// print_r($arrayUnikaliosReiksmes);
?>
<h4>8.  Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.
</h4>
<?php

$kartojasiReiksmesArray = [];

for ($i = 0; $i <count($array1); $i++){
    if(in_array($array1[$i], $array2)){
        array_push($kartojasiReiksmesArray, $array1[$i]);
    }
}
echo '<pre>';
print_r($kartojasiReiksmesArray);
?>

<h4>9.Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.
</h4>
<?php

$balaganasMasyvas = [];

for($i = 0; $i < count($array1); $i++) {

    $balaganasMasyvas[$array1[$i]] = $array2[$i];
// array_push($indeksas[$reiksme1],$naujaReiksme[$reiksme2] );

}
echo '<pre>';
print_r($balaganasMasyvas);
?>
<h4>10. Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.
</h4>

<?php

$paskutinisMasyvas = [];

for($i = 0; $i<10; $i++){

    if ($i < 2) { 

        array_push($paskutinisMasyvas, rand(5, 25));
       
    } else 
    array_push($paskutinisMasyvas, ($paskutinisMasyvas[$i - 2] + $paskutinisMasyvas[$i -1]));
    // if ($i == 3) {
    //     array_push($paskutinisMasyvas, ($paskutinisMasyvas[0] + $paskutinisMasyvas[1]));
    }
    // $paskutinioReiksme =($paskutinisMasyvas[$i] + $paskutinisMasyvas[$i-1]);
    // echo " paskutine reiksme $paskutinioReiksme";
    // array_push($paskutinisMasyvas, $paskutinioReiksme);
    

echo '<pre>';
print_r($paskutinisMasyvas);
?>

