<?php

$people[] = "Hal";
$people[] = "Sam";
$people[] = "Anderson";
$people[] = "Alex";
$people[] = "Ray";
$people[] = "Handy";


//get query String

$q = $_REQUEST['q'];

$suggestion = "";

//Get suggestions

if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person){
        if(stristr($q,substr($person, 0, $len))){
            if($suggestion == ""){
                $suggestion = $person;
            }else{
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;


?>