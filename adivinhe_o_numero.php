<?php

$tentativas = 0;
$max = (int) readline ("Qual vai ser o máximo do intervalo: ");
$min = (int) readline ("\nQual vai ser o mínimo do intervalo: ");
$num_aleatorio = random_int($min, $max);


while($chute != $num_aleatorio){
$chute = (int) readline("\nQual o seu chute: ");

if ($chute == $num_aleatorio){
    print("\nVocê venceu!!");
    print("\n\nVocê acertou em $tentativas tentativas");
} else {
    if ($chute > $num_aleatorio){
        print("\n\nMuito alto\n\n");
        $tentativas+=1;
    } else{
        print("\n\nMuito baixo\n\n");
        $tentativas+=1;
    }
}
}
