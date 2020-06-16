<?php

// INFORMAÇÃO IMPORTANTE, PARA O FUNCIONAMENTO DESSE CÓDIGO É NECESSÁRIO TER ATIVADO A BILIOTECA GMP DENTRO DO SERVIDOR QUE IRÁ RODAR O CÓDIGO

//NO CASO DO XAMPP FOI NECESSÁRIO APENAS TIRAR O COMENTÁRIO DA LINHA DENTRO DE PHP.INI


 // Recebe o valor enviado pelo form e insere dentro da variável calcula
 $calcula = $_POST["variavel"];

// utilizando a função gmp_nextprime conforme a biblioteca: https://www.php.net/manual/pt_BR/function.gmp-nextprime.php

 for($i = 1; $i <= $calcula; $i++)
{
  //confere qual o número mais próximo de $i é primo e guarda na varíavel $prime
  $prime = gmp_nextprime($i);

  //se o número primo dentro de $prime estiver dentro do intervalo informado, faz o print do número primo e o insere na varíavel $i para continuar verificando o próximo primo a partir daí, dessa forma
  // melhorando demais o desempenho do código
  if ($prime <= $calcula){
    echo $prime . ', ';
    $i = $prime-1;
  }
}