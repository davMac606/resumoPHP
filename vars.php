<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
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
              <li class="nav-item disabled" style="border-right: 1px solid black;">
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
              <li class="nav-item" style="border-right: 1px solid black;">
                <a class="nav-link" href="getpostreq.php">Arrays $_GET, $_POST e $_REQUEST</a>
              </li>
              <li class="nav-item" style="border-right: 1px solid black;">
                <a class="nav-link" href="forms.php">Formulários e method</a>
              </li>
              <li class="nav-item" style="border-right: 1px solid black;">
                <a class="nav-link" href="datas.php">Datas</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container container-fluid ">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <h1>Variáveis em PHP</h1>
            <hr>
            <p>Assim como em JavaScript, as variáveis são fracamente tipadas, o que significa que, na declaração das mesmas, não se usa termos como "Int", "float", "string".</p>
            <p>Para declarar uma variável, se usa <code>$</code> e o nome. Por exemplo: <code>$msg = "Hello world!"</code> declara uma variável chamada 'msg' com valor "Hello world". Portanto, <code>$msg</code> é uma string, neste caso.</p>
            <p>Para declarar uma variável com valor numérico, basta usar <code>$</code> e o nome, acompanhado do <code>=</code> e um valor numérico. Por exemplo, <code>$valor1 = 5</code> cria uma variável chamada <code>$valor1</code> com valor 5.</p>
          </div>
        </div>
      </div>


      <div class="container-fluid botoes">
        <div class="row">
          <div class="col-6">
            <a href="index.php">  
            <button class="btn btn-primary position-absolute bottom-0 start-0 mb-3 btn-danger">Anterior</button>
            </a>
          </div>
          <div class="col-6">
            <a href="stmt.php">
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