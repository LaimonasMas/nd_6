<h2>ND nr.1</h2>

<?php

echo 'Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą.';
$text = 'tekstas, kuris yra įterpiamas į h1 tagą!';
function tekstas($text)
{
    return "<h1>$text</h1>";
};
echo tekstas($text);
?>

<h2>ND nr.2</h2>

<?php

echo 'Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją.';
echo '<br><br>';

$text2 = 'tekstas, kuris yra įterpiamas į h1 tagą!';
$randomTag = rand(1, 6);
echo "Tago numeris: $randomTag";
function tekstas2($text2, $randomTag)
{
    return "<h$randomTag>$text2</h$randomTag>";
};
echo tekstas2($text2, $randomTag);
?>

<h2>ND nr.3</h2>

<?php

echo 'Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo uždavinio funkciją ir preg_replace_callback().';
echo '<br><br>';
$randomStr = md5(time());
echo $randomStr;
echo '<br>';
// paternas rasti raidem
$pattern = "/[a-z]+/";
$matched = preg_replace($pattern, ' ', $randomStr);
$exploded = explode(' ', $matched);
// paternas rasti tarpus pradzioj ir bagaigoj (jei $randomStr prasideda ir/arba baigiasi su raide preg_replace paliks tarpa)
$pattern2 = "/^\s+|\s+$/";
$matched2 = preg_replace($pattern2, '', $matched);
// _dc($exploded);
$exploded2 = explode(' ', $matched2);
// _dc($exploded2);
$string3 = '';
foreach ($exploded2 as $value) {
    $string3 .= "<h1 style=\"display: inline-block; padding: 0 10px;\">$value</h1>";
}
echo tekstas($string3);
?>

<h2>ND nr.4</h2>

<?php

echo 'Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių.';
echo '<br><br>';
function divide($num)
{
    if ((!is_numeric($num)) || ($num === null) || (!is_int($num))) {
        return 'Prašau įveskite sveiką skaičių';
    }
    $count4 = 0;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            $count4++;
        }
    }
    return $count4;
}
echo divide(100);
?>

<h2>ND nr.5</h2>

<?php

echo 'Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.';
echo '<br><br>';
// sukuriu nauja masyva su duotom reiksmem
$array5 = [];
for ($i = 0; $i < 100; $i++) {
    $array5[] = rand(33, 77);
}
// _dc($array5);

// i nauja masyva sukeliu reiksmes su dalikliais
$pagalDalikliuKieki = [];
foreach ($array5 as $key => $value) {
    $pagalDalikliuKieki[] = ['key' => divide($value), 'value' => $value];
}
// _dc($pagalDalikliuKieki);

// isrusiuoju pagal daliklius mazejimo tvarka
usort($pagalDalikliuKieki, function ($a, $b) {
    return $b['key'] <=> $a['key'];
});
// _dc($pagalDalikliuKieki);

//sukeliu i nauja masyva tik vertes
$result = [];
foreach ($pagalDalikliuKieki as $value) {
    $result[] = $value['value'];
}
_dc($result);
?>

<h2>ND nr.6</h2>

<?php

echo 'Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.';
echo '<br><br>';
$array6 = [];
for ($i = 0; $i < 100; $i++) {
    $array6[] = rand(333, 777);
}
_dc($array6);
foreach ($array6 as $key => $value) {
    if (divide($array6[$key]) === 0) {
        unset($array6[$key]);
    }
}
_dc($array6);
_dc(count($array6));
?>

<h2>ND nr.7</h2>

<?php

echo 'Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0.';
echo '<br><br>';
$mainLength = rand(10, 30);

echo $mainLength;
echo '<br><br>';
function recursion($mainLength, $num)
{
    $array7 = [];
    $length = rand(10, 20);
    for ($i = 0; $i < $length - 1; $i++) {
        $array7[] = rand(0, 10);
    }
    if ($num < $mainLength) {
        $array7[$length - 1] = recursion($mainLength, $num + 1);
    } else if ($num === $mainLength) {
        $array7[$length - 1] = 0;
        return $array7;
    }
    return $array7;
}
echo '<pre>';
$result7 = recursion($mainLength, 1);
print_r($result7);
echo '</pre>';
?>

<h2>ND nr.8</h2>

<?php

echo 'Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą.';
echo '<br><br>';
echo $mainLength;
$array8 = $result7;
_dc($array8);
$sum8 = 0;
$count8 = 1;
while (true) {
    $sum8 += array_sum($array8);
    echo "$count8 iteracijos masyvo suma yra: ". array_sum($array8);
    if ($array8[count($array8) - 1] === 0) {
        break;
    }
    $array8 = $array8[count($array8) - 1];
    _dc($array8);  
    $count8++;
}
echo '<br><br>';

echo "Septinto uždavinio elementų, kurie nėra masyvai, suma yra: $sum8";
?>

<h2>ND nr.9</h2>

<?php

echo 'Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento.';
$pirminiai = [];
for ($i = 1; $i < 200; $i++) {
    $count11B = 0;
    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j === 0) {
            $count11B++;
        }
    }
    if ($count11B === 2) {
        array_push($pirminiai, $i);
    }
}
_dc($pirminiai);
$array9 = [];
for ($i = 0; $i < 3; $i++) {
    $array9[] = rand(1, 33);
}
_dc($array9);
for ($i = 0; $i < count($array9); $i++) {
    while (true) {
        if (!in_array($array9[count($array9) - 1], $pirminiai) || !in_array($array9[count($array9) - 2], $pirminiai) || !in_array($array9[count($array9) - 3], $pirminiai)) {
            $array9[] = rand(1, 33);
        } else {
            break;
        }
    }
}
_dc($array9);
?>

<h2>ND nr.10</h2>

<?php

echo 'Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio masyvo pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite.';

$array10 = [];
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $array10[$i][$j] = rand(1, 100);
    }
}
_dc($array10);

$count10 = 0;
do {
    $array10Pirminiai = [];
    echo 'pradejo suktis ' . $count10 + 1 . ' kartas';
    echo '<br>';
    for ($i = 0; $i < count($array10); $i++) {
        for ($j = 0; $j < count($array10[$i]); $j++) {
            if (in_array($array10[$i][$j], $pirminiai)) {
                $array10Pirminiai[] = $array10[$i][$j];
            }
        }
    }
    $primeAverige = array_sum($array10Pirminiai) / count($array10Pirminiai);
    echo 'Stai pirminiai skaiciai: ';
    _dc($array10Pirminiai);
    echo '<br>';
    echo "Vidurkis yra $primeAverige";
    echo '<br>';
    if ($primeAverige < 70) {
        $smallest = [];
        for ($i = 0; $i < count($array10); $i++) {
            if (!in_array(min($array10[$i]), $smallest))
                $smallest[] = min($array10[$i]);
        }
    }
    if ($primeAverige >= 70) {
        echo 'Cia baigiam cikla';
        echo '<br>';
        break;
    }
    echo 'Maziausiu skaiciu sarasas: ';
    _dc($smallest);
    $smallestA = min($smallest);
    echo "pats maziausias skaicius yra $smallestA";
    echo '<br>';
    for ($i = 0; $i < count($array10); $i++) {
        for ($j = 0; $j < count($array10[$i]); $j++) {
            if ($array10[$i][$j] === $smallestA) {
                $array10[$i][$j] += 3;
                continue;
            }
        }
    }
    _dc($array10);
    $count10++;
    echo '<br>';
    echo "baige suktis $count10 kartas";
    echo '<br>-------------------<br>';
} while ($primeAverige < 70);
?>

<h2>ND nr.11</h2>

<?php

echo ' Sugeneruokite masyvą, kurio ilgis atsitiktinai kinta nuo 10 iki 100. Masyvo reikšmes sudaro atsitiktiniai skaičiai 0-100 ir masyvai. Santykis skaičiuojamas atsitiktinai, bet taip, kad skaičiai sudarytų didesnę dalį nei masyvai. Reikšmių masyvų gylis (ilgis???) nuo 1 iki 5, o reikšmės analogiškos (nuo 50% iki 100% atsitiktiniai skaičiai 0-100, o likusios masyvai) ir t.t. kol visos galutinės reikšmės bus skaičiai ne masyvai. Suskaičiuoti kiek elementų turi masyvas. Suskaičiuoti masyvo elementų (tie kurie ne masyvai) sumą. Suskaičiuoti maksimalų masyvo gylį. Atvaizduokite masyvą grafiškai . Masyvą pavazduokite kaip div elementą, kuris yra display:flex, kurio viduje yra skaičiai. Kiekvienas div elementas turi savo unikalų id ir unikalią background spalvą (spalva pvz nepavaizduota). pvz: ';
echo '<br><br>';
$masyvuMasyvoIlgis = rand(1, 5);
$masyvuMasyvoreiksmes = [];
$masyvoIlgis = rand(10, 100);
echo "masyvo ilgis $masyvoIlgis";
echo '<br><br>';
$length11A = rand(51, 100);
echo "procentas virs 50% $length11A";
echo '<br><br>';
$chance11 = ($masyvoIlgis * $length11A)/100;
$skaiciuKiekis = floor($chance11);
echo "skaiciu kiekis $skaiciuKiekis";
echo '<br><br>';
$masyvuKiekis = $masyvoIlgis - $skaiciuKiekis;
echo "masyvu kiekis $masyvuKiekis";
$array11 = [];
$count11 = 0;

// function repeat() {
    
// }

// foreach (range(0, $masyvoIlgis-1) as $key => $value) {     
//         if ($key < $skaiciuKiekis) {
//             $array11[] = rand(0, 100);
//         } else {
//             $array11[] = $array11;
//         }
//         $count11++;
// }

// _dc($array11);

// } while ($skaiciuKiekis === count($array11));