<?php

# Recebendo os valores do formulário

$nome = $_POST['nome'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$opniao = $_POST['opniao'];

# Caso o valor de $_POST seja verdadeiro (diferente de "" ou null)
# executaremos o bloco if
if ($_POST['nome']) {
        echo "armazenar:  " . $nome . " ";
        echo "armazenar:  " . $fone . " ";
        echo "armazenar:  " . $email . " ";
        echo "armazenar:  " . $opniao . " ";

} else {
    echo "não armazenar nada!";
}

?>
