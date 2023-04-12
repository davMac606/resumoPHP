<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datas</title>
  <link rel="stylesheet" type="text/css" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Resumo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
          <li class="nav-item" style="border-right: 1px solid black;">
            <a class="nav-link" href="getpostreq.php">Arrays $_GET, $_POST e $_REQUEST</a>
          </li>
          <li class="nav-item" style="border-right: 1px solid black;">
            <a class="nav-link" href="forms.php">Formulários e method</a>
          </li>
          <li class="nav-item disabled" style="border-right: 1px solid black;">
            <a class="nav-link" href="datas.php">Datas</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h1>Datas em PHP</h1>
        <hr>
        <p>Em PHP, é possível criar e <code>manipular datas</code>. Existem vários comandos, os quais podem ser vistos
          <a href="https://www.php.net/manual/pt_BR/ref.datetime.php">na documentação de PHP</a>.</p>
        <p>Para ser breve, mostrarei apenas as mais importantes(a.k.a q a Simone mostrou).</p>

      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <h2><code>date()</code></h2>
        <p>Retorna a data atual do servidor.</p>
        <p>Exemplo:</p>
        <p><code>echo date("d/m/Y H:i:s");</code></p>
        <p>Resultado:</p>
        <p>
          <?php echo date("d/m/Y H:i:s"); ?>
        </p>
      </div>
      <div class="col-md-4 col-sm-12">
        <h2><code>time()</code></h2>
        <p>Retorna o timestamp atual do servidor caso não tenha formatação. Vale lembrar que o timestamp é dado em
          segundos que se passaram desde 01/01/1970.</p>
        <p>Exemplo:</p>
        <p><code>echo time();</code></p>
        <p>Resultado:</p>
        <p>
          <?php echo time(); ?>
        </p>
      </div>
      <div class="col-md-4 col-sm-12">
        <h2><code>mktime()</code></h2>
        <p>Retorna o timestamp de uma data específica.</p>
        <p>Exemplo:</p>
        <p><code>echo mktime(15, 30, 00, 02, 15, 2021);</code></p>
        <p>Resultado:</p>
        <p>
          <?php echo mktime(15, 30, 00, 02, 15, 2021); ?>
        </p>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <h2><code>strtotime()</code></h2>
        <p>Retorna o timestamp de uma data específica.</p>
        <p>Exemplos:</p>
        <p><code>echo strtotime("2021-02-15 15:30:00");</code></p>
        <p><code>echo strtotime("now");</code></p>
        <p><code>echo strtotime("+1 day");</code></p>
        <p><code>echo strtotime("+1 week");</code></p>
        <p><code>echo strtotime("+1 week 2 days 3 hours 4 seconds");</code></p>
        <p>Resultados:</p>
        <p>
          <?php echo strtotime("2021-02-15 15:30:00") . "<br>";?>
          <?php echo strtotime("now") . "<br>" ?>
          <?php echo strtotime("+1 day") . "<br>" ?>
          <?php echo strtotime("+1 week") . "<br>"  ?>
          <?php echo strtotime("+1 week 2 days 3 hours 4 seconds") . "<br>" ?>
        </p>
      </div>
      <div class="col-md-4 col-sm-12">
        <h2><code>date_default_timezone_set()</code></h2>
        <p>Define o timezone padrão do servidor.</p>
        <p>Exemplo:</p>
        <p><code>date_default_timezone_set("America/Sao_Paulo");</code></p>
      </div>
      <div class="col-md-4 col-sm-12">
        <h2><code>checkdate()</code></h2>
        <p>Verifica se uma data é válida.</p>
        <p>Exemplo:</p>
        <p><code>echo checkdate(02, 29, 2023);</code></p>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-4 col-sm-12">

      </div>
      <div class="col-md-4 col-sm-12">
        <h2><code>Diferença entre datas</code></h2>
        <p>Exemplo:</p>
        <p><code>echo strtotime("now") - strtotime("2021-02-15 15:30:00");</code></p>
        <p>Resultado:</p>
        <p>
          <?php echo strtotime("now") - strtotime("2021-02-15 15:30:00"); ?></p>
      </div>
      <div class="col-md-4 col-sm-12">

      </div>
    </div>
    <hr>
  </div>
  <div class="container-fluid botoes">
    <div class="row">
      <div class="col-6">
        <a href="forms.php">
          <button class="btn btn-primary position-absolute bottom-0 start-0 mb-3 btn-danger">Anterior</button>
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