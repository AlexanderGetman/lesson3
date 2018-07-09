<?php
$animals = array(
    "Africa" => array("Equus grevyi", "Loxodonta cyclotis", "Acinonyx jubatus"),
    "Australia" => array("Vombatus ursinus", "Setonix brachyurus", "Macropus agilis"),
    "America" => array("Ursus arctos horribilis", "Cervus canadensis"),
    "Eurasia" => array("Otocolobus manul", "Ailuropoda melanoleuca", "Nyctereutes procyonoides"),
    "Antarctica" => array("Arctocephalus gazella", "Orcinus orca")
);

foreach ($animals as $continents => $animal){
    foreach ($animal as $animalParts) {
        $animalNames = explode(' ', $animalParts);
        if (count($animalNames)==2) {
            $part1[] = $animalNames[0];
            $part2[] = $animalNames[1];
            $animalsNewArr[$continents][] = $animalNames[0];
        }
    }
}

shuffle($part2);

foreach ($animalsNewArr as $continents => $animalsNewName){
    for ($i=0; $i<count($part1); $i++){
        if(in_array($part1[$i], $animalsNewName)){
            $animalsShuffeled[$continents][] = $part1[$i]. ' ' .$part2[$i];
        }
    }
    $animalsResult = implode(', ', $animalsShuffeled[$continents]);
    echo '<h2>'.$continents.'</h2>';
    echo $animalsResult;
}

?>
