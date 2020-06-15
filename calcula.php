<?php
 // Recebe o valor enviado pelo form e insere dentro da variável calcula
 $calcula = $_POST["variavel"];

  // percorre os números de 1 até $calcula
for($i = 1; $i <= $calcula; $i++)
{
  $prime = gmp_nextprime($calcula);

  if ($prime <= $calcula)
  echo $i . ', ';

}