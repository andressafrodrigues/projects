<?php 
    include "../../../config/config.php";
?> 
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

 <title><?=ADMIN?></title>
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
  <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
  <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
  <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

    <body>

      <div id="wrapper">
        <?php 
            include('header-admin.php');
        ?>
        <div id="page-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="page-header">Criar novo Quiz.</h1>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  Preencha todos os campos
                </div>
                <div class="panel-body">
                   <!-- <div class="alert alert-success msgSuccess" role="alert"> </div> -->
                  <form action="model/quiz.php" id="formQuiz" method="POST">
                    <div class="form-group">
                      <label for="name">Nome: </label>
                      <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Insira o título do Quiz" required="true">
                    </div>
                    <div class="form-group">
                      <label for="description">Descrição</label>
                      <input type="text" class="form-control"id="description" name="description" placeholder="Descreva em poucas palavras;" required="true">
                    </div>
                    <button type="submit"  name="saveQuiz" id="saveQuiz" class="btn btn-primary">Salvar</button>
                  </form>
                </div>
              </div>
            </div>
            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../js/ajax.js"></script>
            <script src="../js/listQuiz.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="../vendor/metisMenu/metisMenu.min.js"></script>
            <script src="../dist/js/sb-admin-2.js"></script>
</body>

</html>


