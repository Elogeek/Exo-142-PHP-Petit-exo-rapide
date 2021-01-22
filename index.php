<?php
echo"text";
echo "Hello";

echo '<br>';

$accueil = "Bonjour";

echo $accueil;

echo '<br>';

$array = ["a", "b", "c", "d"];

echo $array[1] . '<br>';

for($x = 0; $x < 3; $x++) {
    echo $array[$x] . '<br>';
}
?>

    <ul></ul>

<?php
foreach ($array as $value ) {
    echo $value . '<br>';
}
?>