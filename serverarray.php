<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays de Servidor</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Resumo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item" style="border-right: 1px solid black;">
                <a class="nav-link" href="vars.php">Variáveis</a>
            </li>
            <li class="nav-item" style="border-right: 1px solid black;">
                <a class="nav-link" href="stmt.php">Statements(if,while,switch)</a>
            </li>
              <li class="nav-item" style="border-right: 1px solid black;">
                <a class="nav-link" href="echo.php">Echo</a>
              </li>
              <li class="nav-item" style="border-right: 1px solid black;">
                <a class="nav-link" href="isset.php">Método isset</a>
              </li>
              <li class="nav-item" style="border-right: 1px solid black;">
                <a class="nav-link" href="mapsarrays.php">Maps e Arrays</a>
              </li>
              <li class="nav-item" style="border-right: 1px solid black;">
                <a class="nav-link" href="stringfun.php">Funções de String</a>
              </li>
              <li class="nav-item" style="border-right: 1px solid black;">
                <a class="nav-link" href="arrayfun.php">Funções de array</a>
              </li>
              <li class="nav-item disabled" style="border-right: 1px solid black;">
                <a class="nav-link" href="serverarray.php">Arrays de servidor</a>
              </li>
              <li class="nav-item" style="border-right: 1px solid black;">
                <a class="nav-link" href="getpostreq.php">Arrays $_GET, $_POST e $_REQUEST</a>
              </li>
              <li class="nav-item" style="border-right: 1px solid black;">
                <a class="nav-link" href="forms.php">Formulários e method</a>
              </li>
              <li class="nav-item" style="border-right: 1px solid black;">
                <a class="nav-link" href="reqmeth.php">Request Method</a>
              </li>
              <li class="nav-item" style="border-right: 1px solid black;">
                <a class="nav-link" href="datas.php">Datas</a>
              </li>
              <li class="nav-item" style="border-right: 1px solid black;">
                <a class="nav-link" href="gaslightdata.php">Manipulação e Criação de Datas</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container container-fluid">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <h1>Arrays de Servidor</h1>
            <hr>
            <p>(Não vou mentir, provavelmente ninguém nunca vai usar isso, mas ainda vai ser cobrado, então tá) Os arrays de servidor são funções que contém dados do usuário, sendo 5 delas as mais importantes:</p>
            <ul type="dot">
              <li> $_SERVER["SERVER_ADDR"] => Endereço IP do servidor onde o script está sendo executado.</li>
              <li> $_SERVER["SERVER_NAME"] => Nome do host do servidor onde o script está sendo executado.</li>
              <li> $_SERVER["HTTP_USER_AGENT"] => Dados do navegador ou agente que fez 'request' ao servidor.</li>
              <li> $_SERVER["REMOTE_ADDR"] => Endereço IP do usuário vendo a página.</li>
              <li> $_SERVER["SCRIPT_NAME"] => Caminho do script em relação à raiz do servidor.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            <a href="arrayfun.php">
            <button class="btn btn-primary position-absolute bottom-0 start-0 mb-3 btn-danger">Anterior</button>
            </a>
          </div>
          <div class="col-6"> 
            <a href="getpostreq.php">
            <button class="btn btn-secondary position-absolute bottom-0 end-0 mb-3 btn-success">Próximo</button>
            </a>
          </div>
        </div>
      </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>
</html>