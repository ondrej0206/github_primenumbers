<?php

class PrimeNumberCalculator {
    
    public $inputNumber;

    public function getPrimeNr ($inputNumber) {
        $primeNrs =  [];
        for($i = 1; $i <= $inputNumber; $i++) {      
            $points = 0;
            // cyklus vyhodnocuje, zda číslo n(i) je dělitelné čísly <1;n(i)> bez zbytku. Za každý podíl bez zbytku přičteme do proměnné $points číslo 1. Jakmile cyklus skončí, jdeme do podmínky if. 
            for($j = 1; $j <= $i; $j++) {
                if($i % $j === 0) {
                    $points++;
                }
            }
            // podmínka vyhodnocuje, zda číslo n(i) je dělitelné číslem 1 a samosebou. Pokud to tak je, má proměnná $b právě hodnotu 2 a jedná se o prvočíslo a uloží se do pole $primeNrs[]. 
            if($points === 2) {
                $primeNrs[] = $i;
            }
        }
            // cyklus projde pole po indexech a vypíše číslo po číslu oddělených mezerou
        echo "Výsledkem jsou tato prvočísla:<br>";
        foreach ($primeNrs as $primeNr) {
        echo $primeNr.' ';
        }
        
    }  
    
}

?>