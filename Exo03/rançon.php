<?php

function TesterSiJePeuxEcrireAvec($magazine, $message)
{
    for ($i = 0; $i < strlen($message); $i++) {
        $lettreCouranteDuMessage = $message[$i];
        if ($lettreCouranteDuMessage == " ") {
            continue;
        }
        $lettrePresente = false;
        for ($j = 0; $j < strlen($magazine); $j++) {
            $lettreCouranteDuMagazine = $magazine[$j];
            if ($lettreCouranteDuMessage == $lettreCouranteDuMagazine) {
                $lettrePresente = true;
                $magazine[$j] = " ";
                break;
            }
        }
        if ($lettrePresente == false) {
            return false;
        }
    }
    return true;
}

$magazine = "bonjour aujourd'hui il fait beau";
$lettre = "content content";

if (TesterSiJePeuxEcrireAvec($magazine, $lettre)) {
    echo "tu peux l'ecrire";
} else {
    echo "tu peux pas l'ecrire";
}
