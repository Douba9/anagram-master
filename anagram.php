<?php
$wordlist = "anagram-master-dictionnaire.txt";

if (isset($argv[1])) {
    $arg = $argv[1];
    if($stream = fopen($wordlist, "r")){
        while($word = fgets($stream)){
            is_anagram($arg, $word);
        }
        fclose($stream);
    }
} else {
    echo "\e[0;31mPas d'arguments...\e[0m\n";
}


function is_anagram($a, $b)
{
    if (strlen($a)+1 == strlen($b)+1) {
        echo $b;
    } else {
        return false;
    }
}

?>