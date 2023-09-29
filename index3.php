<?php
    $a1 = 22;
    $a3 = "opa meus amigos";
    $a2 = 52;
    
   
   

    if(is_numeric($a1)){
        $resposta1 = $a1 * 2;
        echo "$resposta1 é um número.";
        if ($resposta1 > 100 ){
            echo "  Maior que 100.";
        } else {
            echo "  Não é maior do que 100.";
        }
    
    } else {
        echo "  Não é um número";
    }
    echo "<br>";

    //secção 2

    if(is_numeric($a2)){
        $resposta2 = $a2 * 2;
        echo "$resposta2 é um número.";
        if ($resposta2 > 100 ){
            echo "  Maior que 100.";
        } else {
            echo "  Não é maior do que 100.";
        }
   
     } else {
         echo "  Não é um número";
     }
     echo "<br>";

     //secção 3

     if(is_numeric($a3)){
        $resposta3 = $a3 * 2;
        echo "$resposta3 é um número.";
        if ($resposta3 > 100 ){
            echo "  Maior que 100.";
        } else {
            echo "  Não é maior do que 100.";
        }
    
     } else {
         echo "  Não é um número.";
     }
 
     
     echo "<br>";
 
 ?>
