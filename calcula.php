<?php
 // Recebe o valor enviado pelo form e insere dentro da variável calcula
 $calcula = $_POST["variavel"];

 
 // percorre os números de 1 até $calcula
for($i = 1; $i <= $calcula; $i++)
{
    $divisores = 0;
     //pega o número do outro for acima e verifica quantos divisores ele tem
    for($j = $i; $j >= 1; $j--)
    {
        if (($i % $j) == 0) {
            $divisores++;
        }
    }
    // se só tiver dois divisores, faz o print do número
    if ($divisores == 2)
    {
        echo $i . ', ';
    }
}
