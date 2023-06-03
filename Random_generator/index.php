<?php

// create variable where to words will be stored
$word1 = array("Hi", "Hello", "Welcome");
$word2 = array("thank you", "thanks");
$word3 = array ("Shane", "Amy");

// create function to fetch random word from the variable
function randomize($word){
    return $word[rand(0, count($word) -1)];
};

// call function(variable) into the string
echo randomize($word1) . ", " . randomize($word2). " " . randomize($word3) . " for visiting my website.";
?>