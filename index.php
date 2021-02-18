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


$pattern = "/[0-9]+/";
if(preg_match_all($pattern, $randomStr, $matches)) {
    print_r($matches);
  }


// $input = $randomStr;
// $pattern = "/[0-9]+/";
// $result = preg_replace_callback($pattern, 'countLetters', $input);
// echo $result;
