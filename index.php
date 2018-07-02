<?php
$animals = array(
    "Africa" => array("Equus grevyi", "Loxodonta cyclotis", "Acinonyx jubatus"),
    "Australia" => array("Vombatus ursinus", "Setonix brachyurus", "Macropus agilis"),
    "America" => array("Ursus arctos horribilis", "Cervus canadensis"),
    "Eurasia" => array("Otocolobus manul", "Ailuropoda melanoleuca", "Nyctereutes procyonoides"),
    "Antarctica" => array("Arctocephalus gazella", "Orcinus orca")
);

$latinClassification = [];
foreach ($animals as $continents => $all_species) {
    foreach ($all_species as $species) {
        $species_separated = [];
        $species_explode = explode(' ', $species);
        $species_separated[] = $species_explode;

        foreach ($species_separated as $species_wordcount) {
            if (count($species_wordcount) === 2) {
                $species_comma = implode(",", $species_wordcount);
                $species_str = str_replace(',', ' ', $species_comma);
                $latinClassification[] = $species_str;
            }
        }
    }
}


foreach($latinClassification as $name_parts){
    $parts = explode(' ', $name_parts);
    $first[] = $parts[0];
    $second[] = $parts[1];
}

$random_first_word = [];
while (count($random_first_word) < count($latinClassification)){
    $check = $first[rand(0, count($latinClassification)-1)];
    if (!in_array($check, $random_first_word)) {
        array_push($random_first_word, $check);
    }
}

$random_second_word = [];
while (count($random_second_word) < count($latinClassification)){
    $check = $second[rand(0, count($latinClassification)-1)];
    if (!in_array($check, $random_second_word)) {
        array_push($random_second_word, $check);
    }
}


$latinClassificationFantasy = [];
for($i = 0; $i < count($latinClassification); $i++){
    $latinClassificationFantasy[]= $random_first_word[$i] . ' ' . $random_second_word[$i];
}

for($i = 0; $i < count($latinClassificationFantasy); $i++){
    echo "$latinClassificationFantasy[$i]";
    if($i < (count($latinClassificationFantasy) -1)){
        echo ", ";
    }
}

?>