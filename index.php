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
echo '<br><br>';
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
    $string3 .= "<h1>$value</h1>";
}
echo tekstas($string3);
?>

<h2>ND nr.4</h2>

<?php

echo 'Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių.';
echo '<br><br>';
function divide($num) {    
    if ((!is_numeric($num)) || ($num === null) || (!is_int($num))) {
        return 'Prašau įveskite sveiką skaičių';
    }
    $count4 = 0;
    for ($i=2; $i < $num; $i++) { 
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
for ($i=0; $i < 100; $i++) { 
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
for ($i=0; $i < 100; $i++) { 
    $array6[] = rand(333, 777);
}
_dc($array6);
$naujas = [];
foreach ($array6 as $key => $value) {
    if (divide($value) !== 0) {
        $naujas[] = $value;
    }
}
_dc($naujas);
?>

<h2>ND nr.7</h2>

<?php
