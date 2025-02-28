<?php 
$ar_buah = ["pepaya", "mangga", "pisang", "jambu"];
echo $ar_buah[1];
echo "<br/> jumlah buah " . count($ar_buah);
echo "<ol>";
foreach ($ar_buah as $buah) {
    echo "<li> $buah </li>";
} echo "</ol>";

$ar_buah []= "apel";
unset($ar_buah[1]);
$ar_buah[2]= "manggis";
echo "<ul>";
sort ($ar_buah);
foreach ($ar_buah as $buah => $v) {
    echo "<li>buah index : " .$buah. " adalah ". $v ."</li>";
}
echo "</ul>"
?>