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
	<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
	<link href="../vendor/morrisjs/morris.css" rel="stylesheet">
	<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div id="wrapper">

		<!-- Navigation -->
		 <?php include('header-admin.php') ?>
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Dashboard</h1>
				</div>
			</div>
			<div class="row">
			</div>
			<!-- /.row -->
		</div>
		<!-- /.panel-body -->
		<div class="panel-footer">
			<div class="input-group">
				<input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
				<span class="input-group-btn">
					<button class="btn btn-warning btn-sm" id="btn-chat">
						Send
					</button>
				</span>
			</div>
		</div>
		<!-- /.panel-footer -->
	</div>
	<!-- /.panel .chat-panel -->
</div>
<!-- /.col-lg-4 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/metisMenu/metisMenu.min.js"></script>
<script src="../vendor/raphael/raphael.min.js"></script>
<script src="../vendor/morrisjs/morris.min.js"></script>
<script src="../data/morris-data.js"></script>
<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
