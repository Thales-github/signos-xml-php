<?php

require_once("funcoes.php");
if (!isset($_POST["data"])) {
    die("data não informada...");
}

$data = formataData($_POST["data"]);
$dia = $data[0];
$mes = $data[1];
$ano = $data[2];

$signo = signo($dia, $mes);

lerXml($signo);

