<?php
include("./ClassCarros.php");

$Busca=json_decode(file_get_contents("php://input"),true);
if($Busca == null){
    $BuscaFinal=null;
}else{
    foreach($Busca as $Busca2){
        $BuscaFinal=$Busca2;
    }
}
$Carros=new ClassCarros();
$Carros->searchCar($BuscaFinal);

?>
