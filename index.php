<?php 
require_once('config.php');
$bd = new Banco();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Cadastro de aluno - Exemplo</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php 
                $pagina = 'home';
                if(!empty($_GET['pagina']))
                    {   
                        $pagina = $_GET['pagina'];
                    }
                if(file_exists("$pagina.php"))
                    {   
                        include("$pagina.php");
                    }
                else
                    {   
                        ?> <i class="glyphicon glyphicon-thumbs-down"></i> Página não encontrada. <?PHP
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
