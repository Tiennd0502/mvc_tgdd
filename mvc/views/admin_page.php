<!DOCTYPE html>
<html lang="en">
<head>
	<base href="http://localhost/Web204_MVC/">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Admin</title>
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="public/css/sb-admin.css">
	<!-- Morris Charts CSS -->
  <link href="public/css/plugins/morris.css" rel="stylesheet">
	<!-- Fontawesome -->
  <link rel="stylesheet" href="public/fonts/fontawesome-pro-5.14.0-web/css/all.min.css">

</head>
<body>
	<div id="wrapper">

		<?php require_once './mvc/views/blocks/'.$data["Admin_navbar"].'.php'; ?>

	  <div id="page-wrapper">
		  <div class="container-fluid ">

		  	<?php require_once './mvc/views/pages/'.$data['Page_title'].'.php'; ?>

		  	<?php require_once './mvc/views/pages/'.$data['Page'].'.php'; ?>

		  </div>
		  <!-- /.container-fluid -->
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->


	<!-- jQuery -->
  <script type="text/javascript" src="public/js/jquery-3.5.0.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
  <!-- my js -->
  <script type="text/javascript" src="public/js/javascript.js"></script>
  <!-- Morris Charts JavaScript -->
  <script src="public/js/plugins/morris/raphael.min.js"></script>
  <script src="public/js/plugins/morris/morris.min.js"></script>
  <script src="public/js/plugins/morris/morris-data.js"></script>
  
  <script type="text/javascript" src="public/library/ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('Description');
  </script>

</body>
</html>