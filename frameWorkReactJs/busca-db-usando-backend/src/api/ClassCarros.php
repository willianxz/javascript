<?php
include ("./ClassConexao.php");


class ClassCarros extends ClassConexao{

    public function searchCar($Par=null){

        if($Par == null){
            $BFetch=$this->conectaDB()->prepare("select * from carros");
        }else{
            $ParLike='%'.$Par.'%';
            $BFetch=$this->conectaDB()->prepare("select * from carros where Marca like :marca or Modelo like :modelo");
            $BFetch->bindParam(":marca",$ParLike,PDO::PARAM_STR);
            $BFetch->bindParam(":modelo",$ParLike,PDO::PARAM_STR);
        }
        $BFetch->execute();

        $I=0;
        $J=[];

        while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
            $J[$I]=[
                "Id"=>$Fetch['Id'],
                "Marca"=>$Fetch['Marca'],
                "Modelo"=>$Fetch['Modelo'],
                "Ano"=>$Fetch['Ano']
            ];

            $I++;
        }

        header("Access-Control-Allow-Origin: *");
        header("Content-type: application/json");

        echo json_encode($J);
    }
}

 ?>
