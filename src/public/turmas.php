<?php
/**
 * Deposito de dados
 */
$dados = json_encode([
    
        "dados" => [
                        ["id"=>"1","nome"=> "HTC-DDS-2-12"],
                        ["id"=>"2","nome"=> "HTC-DDS-3-11"],
                        ["id"=>"3","nome"=> "AIB-ADM-28"]
                        
         ]
  
], JSON_PRETTY_PRINT);

echo $dados;