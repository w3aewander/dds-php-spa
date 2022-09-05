<?php
/**
 * Deposito de dados
 */
$dados = json_encode([
    
        "dados" => [
                        ["nome"=>  "Wanderlei Silva", "semestre"=>"1", "pontos" => 8],
                        ["nome"=> "Marileide Silva", "semestre"=>"1", "pontos" => 7],
                        ["nome"=> "Octavio Duarte da Silva","semestre"=>"1", "pontos" => 8.5],
                        ["nome"=>  "Wanderson Andre Dias do Carmo","semestre"=>"1", "pontos" => 6.5],
                        ["nome"=> "Adriana Dias do Carmo","semestre"=>"1", "pontos" => 7,8],
                        ["nome"=> "Asafe Dias do Carmo","semestre"=>"1", "pontos" => 9],
                        ["nome"=> "Samuel Dias do Carmo","semestre"=>"1", "pontos" => 5],
                        ["nome"=> "Maria Fernanda Dias do Carmo","semestre"=>"1", "pontos" => 10]
         ]
  
], JSON_PRETTY_PRINT);

echo $dados;