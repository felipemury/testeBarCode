<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grupo Darwin</title>
    <link rel="icon" type="image/png" sizes="96x96" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiIpiC5avUlVzUHLJopZDYSVn4rdq16b-9-VNnHdvwl_ni3ded">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="collapse.css">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap/js/jquery-2.2.4.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/collapse.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
            </div>
        </div>
    </div>
    <?php
        include "include/imgIndex.php";
        include "include/navbar.php";
        ?>
    <div class="with-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm col-lg-4">
                    <h3>O que é<br> o Grupo Darwin?</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 offset-md-1">
                    <p><br>O grupo Darwin é uma rede para conectar pessoas, startups, empresas privadas, instituições do
                        terceiro setor e iniciativas que estão mudando o nosso dia a dia.</p>
                    <p>Somos um grupo sem fins lucrativos com o objetivo de disseminar conhecimento sobre
                        diversos temas da inovação, tecnologia e empreendedorismo com as tendências tecnologicas,
                        tornando-os mais
                        competitivos.</p><br><br><br><br><br><br>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm col-lg-5">
                <h3>Desenvolvedores</h3><br>
            </div>
        </div>
    </div>
    <div class="row speakers justify-content-center">
        <div class="circle">
            <img src="Imagem/foto.jpeg" class="img-fluid" alt="Imagem responsiva" title="Felipe Mury">
        </div>
        <div class="circle">
            <img src="Imagem/foto2.png" class="img-fluid" alt="Imagem responsiva" title="Ana Carolina Dias">
        </div>
    </div><br><br><br><br><br><br>
    <div class="container">
        <h1 class="page-header"></h1>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Ordem </th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Turma</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Felipe Mury Siqueira Cunha</td>
                        <td>26 Anos</td>
                        <td>2018.1</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Ana Carolina Dias Goulart</td>
                        <td>19 anos</td>
                        <td>2018.1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div><br><br><br><br>
    <?php
    include "include/rodape.php";
    ?>
</body>

</html>