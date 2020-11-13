<!DOCTYPE html>
<html lang="en">
<head>
	<base href="http://localhost/Web204_MVC/">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thegioididong.com</title>
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" type="text/css" href="public/fonts/fontawesome-pro-5.14.0-web/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="public/plugin/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="public/plugin/owlcarousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body <?= isset($data["ClassBody"]) ? 'class="lunar"' : ""; ?> >
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0&appId=319982449176196&autoLogAppEvents=1" nonce="YD5P5cue"></script>
	<div class="container-fluid" style="background-color: <?= isset($data["BGC"]) ? $data["BGC"] : "#FFF"; ?>" >
  <?php require_once './mvc/views/blocks/header.php'; ?>
  <!-- /header -->
  <?php require_once './mvc/views/blocks/nav.php'; ?>
  <!--  /nav -->
    <div class="container">
      <?php require_once './mvc/views/pages/'.$data['Page'].'.php'; ?>
    </div>
      <?php require_once './mvc/views/blocks/footer.php'; ?>
  </div>



  <script type="text/javascript" src="public/js/jquery-3.5.0.min.js"></script>
  <script type="text/javascript" src="public/plugin/owlcarousel/owl.carousel.min.js"></script>
  <script type="text/javascript" src="public/js/javascript.js"></script>
</body>
</html>