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
					<h1 class="page-header">Lista de Quiz</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="panel-body">
								<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>Id</th>
											<th>Nome</th>
											<th>Descrição </th>
											<th>Iniciar</th>
										</tr>
									</thead>
									<tbody id="tableQuiz"></tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../vendor/jquery/jquery.min.js"></script>
	<script src="../js/ajax.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/metisMenu/metisMenu.min.js"></script>
	<script src="../dist/js/sb-admin-2.js"></script>

</body>
</html>