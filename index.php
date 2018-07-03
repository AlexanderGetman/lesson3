<?php
$animals = array(
    "Africa" => array("Equus grevyi", "Loxodonta cyclotis", "Acinonyx jubatus"),
    "Australia" => array("Vombatus ursinus", "Setonix brachyurus", "Macropus agilis"),
    "America" => array("Ursus arctos horribilis", "Cervus canadensis"),
    "Eurasia" => array("Otocolobus manul", "Ailuropoda melanoleuca", "Nyctereutes procyonoides"),
    "Antarctica" => array("Arctocephalus gazella", "Orcinus orca")
);

foreach ($animals as $continents => $all_species) {
    foreach ($all_species as $species) {
        $species_separated = [];
        $species_explode = explode(' ', $species);
        $latinClassification[] = $species_explode;
    }
}

foreach ($latinClassification as $speciesCount){
    if (count($speciesCount)===2){
        $species_comma = implode(",", $speciesCount);
        $species_str = str_replace(',', ' ', $species_comma);
        $latinClassificationTwo[] = $species_str;
    }
}

print_r ($latinClassificationTwo);

?>
