<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <title>Currículo Fácil!</title>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registre aqui suas informações:</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nome Completo" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Área que Atua" name="prof">		
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Email" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Número de Telefone/Celular" name="ntelef" maxlength="11">      
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Endereço Completo" name="enden">      
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Qual seu objetivo de adentrar na empresa?" name="enter">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Digite aqui, um pouco, de suas experiências profissionais:" name="enden">
                            <div class="col-2">
                            </div>
                        </div>
                            <input class="input--style-1" type="number" placeholder="De que ano:" name="enden" maxlength="4" style="position: relative; top: -3.5vh; width: 45%; ">
                            <input class="input--style-1" type="number" placeholder="Até que ano:" name="enden" maxlength="4" style="position: relative; top: -3.5vh; width: 45%; ">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Você fez Ensino Superio? Coloque aqui qual crurso!" name="enden">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="Data de Nascimento" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Gênero</option>
                                            <option>Homem</option>
                                            <option>Mulher</option>
                                            <option>Outro</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        <!-- PASSANDO AS INFORMACOES DE HTML PARA PHP VARIÁVEIS -->
                        <?php
                        if ($_POST) 
                        {
                          $nome = $_POST['nome'];  
                          $profissao = $_POST['prof'];  
                          $email = $_POST['email'];  
                          $nome = $_POST['nome'];  
                          $nome = $_POST['nome'];  
                          $nome = $_POST['nome'];  
                        }
                        ?>
                        <!-- TERMINANDO A ÚNICA COISA QUE FIZ NA RAÇA KKKK -->
                        <div class="p-t-20">
                            <button class="btn btn--radius" type="submit" id="jonathas" style="color: #2D6ED5; border: 1px solid #2D6ED5; box-shadow: #f2f2f2 -3px 3px 100px; transition: 2s;">Enviar Informações</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/global.js"></script>
</body>
</html>