<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site com Bootstrap">
    <meta name="author" content="Mauricio Fraga Jr">
    <link rel="icon" href="favicon.ico">

    <title>CADE MEU PROF</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">


  </head>

  <body>

      

    <nav class="navbar navbar-toggleable-md navbar-light fixed-top back" style="background-color: #fff;">

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="70" height="70" alt="">
      </a>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault" style="background-color: #fff;">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Procurar...">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
        </form>
      </div>
      
    </nav>


    <div class="container-fluid">
      <div class="intro">
        <h2>Bem vindo!</h2>
        <p>Aqui você pode encontrar rapidamente as informações de seu professor e turma!</p>
        <button type="button" class="btn btn-secondary">Sobre</button>
        <button type="button" class="btn btn-primary">Compartilhe</button>
        
      </div>

    </div><!-- /.container -->

    <div class="container cade-meu-prof">
      <h2>Escolha sua faculdade</h2>
      <select class="form-control" id="caminhos" name="caminhos">
        <option disabled>Selecione...</option> 

    
      <?php

        $estado = $_GET["estado"];

        // Conexão com o banco de dados
        $conn = @mysql_connect("localhost", "root", "") or die("Não foi possível a conexão com o Banco");
        // Selecionando banco
        $db = @mysql_select_db("banco_dados", $conn) or die("Não foi possível selecionar o Banco");

        // Lendo como utf8
        mysql_query("SET NAMES 'utf8'");
        mysql_query('SET character_set_connection=utf8');
        mysql_query('SET character_set_client=utf8');
        mysql_query('SET character_set_results=utf8');

        $sql = mysql_query("SELECT * FROM `faculdades` WHERE sigla_estado = '$estado'");

        $numRegistros = mysql_num_rows($sql);
        
        while ($numRegistros > 0) {
          $linha = mysql_fetch_assoc($sql);
          $nome = $linha['nome_faculdade'];
          echo '<option value="'.$linha['id_faculdade'].'">'.$nome.'</option>';
          $numRegistros = $numRegistros - 1;
        }
        
     
      ?>

      </select>

      <button type="button" class="btn btn-secondary btn-block" id="ir" name="ir">Ir</button>


      
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h2>Contato</h2>
            <ul>
              <li>Facebook</li>
              <li>Github</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h2>Links Úteis</h2>
            <ul>
              <li>Bootstrap</li>
              <li>MySql</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h2>Desenvolvedores</h2>
            <ul>
              <li>Mauricio Fraga Jr</li>
              <li>Matheus Leal</li>
            </ul>
          </div>
          <div class="col-md-3">
            <h2>Desenvolvedores</h2>
            <ul>
              <li>Mauricio Fraga Jr</li>
              <li>Matheus Leal</li>
            </ul>
          </div>
        </div>
      </div>

    </footer>

    <div class="container-fluid creditos">
      <div class="container">Desenvolvido por Red Coders, 2017</div>
      
    </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script>
      $( "#ir" ).click(function() {
        var $resultado = $( "#caminhos" ).val();;
          //alert($resultado);
          window.location.href = "http://localhost/bootstrap4/cursos.php?faculdade=" + $("#caminhos").val();;
        });
    </script>
    
  </body>
</html>
