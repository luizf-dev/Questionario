<body>
 
<?php
// acrescente as 3 linhas a seguir
$questao1 = $_POST['questao1'];
$questao2 = $_POST['questao2'];
$questao3 = $_POST['questao3'];
 
echo "Questao 1 Resposta Certa = ".$questao1."<br>";
echo "Questao 2 Resposta Certa = ".$questao2."<br>";
echo "Questao 3 Resposta Certa = ".$questao3."<br>";
 
 
$resposta1 = "c";
$resposta2 = "d";
$resposta3 = "a";
 
 
$acertou = 0;
$errou = 0;

if ($questao1 == $resposta1)
{
    $acertou++;
    echo "<font color = blue> Questao 1 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 1 errada<br></font>";
}
 
if ($questao2 == $resposta2)
{
    $acertou++;
    echo "<font color = blue> Questao 2 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 2 errada<br></font>";
}
 
if ($questao3 == $resposta3)
{
    $acertou++;
    echo "<font color = blue> Questao 3 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 3 errada<br></font>";
}

$calc = 10;
$porcent = $calc * $acertou;
 
echo "<br><br> Voce <font color = blue>acertou</font> $acertou e <font color = red>errou</font> $errou.";
 
 
if ($acertou >=3)
{
echo "<br><br><b><blink>Muito bem, um total de $porcent % de acerto</blink></b>";
}
else
{
echo "<br><br><b><blink> Voce nao foi muito bem, um total de $porcent% de acerto, tente novamente!</blink></b>";
}
 
?>
<br /><input type="button" value="voltar" id="botao_voltar" onclick="history.go(-1)">
</body>