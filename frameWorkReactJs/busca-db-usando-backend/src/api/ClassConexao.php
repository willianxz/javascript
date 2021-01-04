<?php
abstract class ClassConexao{

    protected function conectaDB()
    {
        try{
            $Con=new PDO("mysql:host=localhost;dbname=react","root","");
            return $Con;
        }catch(PDOException $Erro){
            return $Erro->getMessage();
        }
    }
}

 ?>
