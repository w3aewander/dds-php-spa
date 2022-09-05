
<?php include __DIR__ . '/../../vendor/autoload.php';?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Exercicios programação WEB">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Página Inicial</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        
        
        <link rel="stylesheet" href="css/app.css">

    </head>
    <body>

        <div class="header">
            <h1>Exercicio - Programação WEB - HTML5</h1>
            <h2>Presença e Atividades</h2>
        </div>

        <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
    <a class="navbar-brand" href="#">Minha Pauta</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
           <ul class="navbar-nav eme-auto mb-2 mb-lg-0">
               <li class="nav-item">
                    <a class="nav-link" href="" data-target="inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="" data-target="contato">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="" data-target="sobre">Sobre</a> 
                </li>
            </ul>

        </nav> 
          
        
        <div class="container">
             <div id="app"></div>
        </div>

        <script src="js/app.js"></script>
    </body>
</html>