<?php
$animals = array(
    "Africa" => array("Equus grevyi", "Loxodonta cyclotis", "Acinonyx jubatus"),
    "Australia" => array("Vombatus ursinus", "Setonix brachyurus", "Macropus agilis"),
    "America" => array("Ursus arctos horribilis", "Cervus canadensis"),
    "Eurasia" => array("Otocolobus manul", "Ailuropoda melanoleuca", "Nyctereutes procyonoides"),
    "Antarctica" => array("Arctocephalus gazella", "Orcinus orca")
);

$latinClassification = [];
foreach ($animals as $continents) {
    $latinClassification = array_merge($latinClassification, array_filter($continents, function ($species){return count(explode(' ', $species)) === 2;}) );
}

foreach($latinClassification as $name_parts){
    $parts = explode(' ', $name_parts);
    $first[] = $parts[0];
    $second[] = $parts[1];
}

shuffle($second);

for($i = 0; $i < count($latinClassification); $i++){
    echo $first[$i] . ' ' . $second[$i];
    if($i < (count($latinClassification) -1)){
        echo ", ";
    }
}

?>
