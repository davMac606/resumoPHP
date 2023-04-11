<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays $_GET, $_POST e $_REQUEST</title>
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
              <li class="nav-item" style="border-right: 1px solid black;">
                <a class="nav-link" href="serverarray.php">Arrays de servidor</a>
              </li>
              <li class="nav-item disabled" style="border-right: 1px solid black;">
                <a class="nav-link" href="getpostreq.php">Arrays $_GET, $_POST e $_REQUEST</a>
              </li>
              <li class="nav-item" style="border-right: 1px solid black;">
                <a class="nav-link" href="forms.php">Formulários e method</a>
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
            <h1>Arrays $_GET, $_POST E $_REQUEST</h1>
            <hr>
            <p><code>$_GET,$_POST e $_REQUEST</code>são variáveis superglobais usadas para envio de dados em <b>formulários</b>. Apesar de serem do mesmo grupo, existem diferenças cruciais entre as mesmas:</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <h1>$_GET</h1>
            <hr>
            <p>A mais simples das 3 variáveis, uso recomendado para valores da URL, tais como filtro de pesquisa e identificadores de página.</p>
          </div>
          <div class="col-md-4 col-sm-12">
            <h1>$_POST</h1>
            <hr>
            <p>A mais comum das variáveis, usada para coletar dados de <b>formulários</b>, arquivos, entre outros.</p>
          </div>
          <div class="col-md-4 col-sm-12">
            <h1>$_REQUEST</h1>
            <hr>
            <p>Extremamente específica, $_REQUEST coleta dados tanto de métodos GET quanto métodos POST e cookies da página. Devido ao contato com cookies, requer maior segurança, pois a injeção de dados maliciosos pode danificar os dados da página, fazendo com que a variável $_REQUEST seja evitada a menos que necessária.</p>
          </div>
        </div>
        
     
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            <a href="serverarray.php">
            <button class="btn btn-primary position-absolute bottom-0 start-0 mb-3 btn-danger">Anterior</button>
            </a>
          </div>
          <div class="col-6">
            <a href="forms.php">
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