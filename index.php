<?php
$nome=[
    '1' => 'Zé ',
    '2' => 'Vanesa ',
    '3' => 'João ',
    '4' => 'Bonifacio ',
    '5' => 'Lula ',
    '6' => 'Bolsonaro ',
    '7' => 'Lulu ',
    '8' => 'Arnaldo ',
    '9' => 'Thomas ',
    '10' => 'Leonardo ',
    '11' => 'Marcelinho ',
    '12' => 'Maria ',
    '13' => 'Renata ',
    '14' => 'Lumila ',
    '15' => 'Roberto ',
    '16' => 'Jonhathan ',
    '17' => 'Robervaldo '
];
$sobreNome=[
    '1' => 'da Mata ',
    '2' => 'Corne ',
    '3' => 'do Gás ',
    '4' => 'do Clitóris ',
    '5' => 'Safado ',
    '6' => 'Japonês',
    '7' => 'Arrombador',
    '8' => 'Jamaicano',
    '9' => 'Cano',
    '10' => 'Encanador ',
    '11' => 'da Crakolandia ',
    '12' => 'Mendigo',
    '13' => 'Bolsonarista',
    '14' => 'Lulista',
    '15' => 'Facista ',
    '16' => 'Taxista ',
    '17' => 'Otoringolaringologista'
];
$proposta1=[
    '1' => 'Zerar o imposto n',
    '2' => 'Aumentar o imposto n',
    '3' => 'Incentivar ',
    '4' => 'Proibir ',
    '5' => 'Legalizar ',
    '6' => 'Criminalizar ',
    '7' => 'Privatizar ',
    '8' => 'Diminuir o imposto n',
    '9' => 'Entrar em guerra com ',
    '10' => 'Criar '
];
$proposta2=[
    '1' => 'o crack ',
    '2' => 'a cocaina ',
    '3' => 'o Lionel Mesi ',
    '4' => 'a região sul ',
    '5' => 'o Rio de Janeiro ',
    '6' => 'o uso de narcoticos ',
    '7' => 'o churrasco ',
    '8' => 'a criação de gado ',
    '9' => 'o porte de arco e flecha ',
    '10' => 'a prostituição ',
    '11' => 'o roubo ',
    '12' => 'o sexo entre irmãos ',
    '13' => 'o sexo anal ',
    '14' => 'a liberdade de imprensa ',
    '15' => 'a Argentina ',
    '16' => 'o consumo de meta-anfetamina',
    '17' => 'os menores de 18 anos '
];
$proposta3=[
    '1' => ' em igrejas ',
    '2' => ' nas escolas',
    '3' => ' para a copa do mundo ',
    '4' => ' durante noites de sexta-feira 13',
    '5' => ' em dia de feriado',
    '6' => ' durante a aula online',
    '7' => ' em lugares públicos',
    '8' => ' em boates de striptesse',
    '9' => ' no mar',
    '10' => ' em casa de apostas ',
    '11' => ' durante o parto',
    '12' => ' na virada de ano',
    '13' => ' no youtube',
    '14' => ' em caso de divorcio',
    '15' => ' para a luta de classes',
    '16' => ' contra o comunismo',
    '17' => ' contra o capitalismo'
];

echo "<h2>"."Nome: ".$nome[rand(1,17)].$sobreNome[rand(1,17)]."<br>";
echo "Proposta: ".$proposta1[rand(1,10)].$proposta2[rand(1,17)].$proposta3[rand(1,17)]."</h2>";







?>