<!DOCTYPE html>
<html lang="en">
<head>
	<base href="http://localhost/Web204_MVC/">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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
	<div class="container-fluid accountbg" style="background: url('public/images/bg.jpg');background-size: cover;background-position: center;">
		<div class="account-pages mt-4 ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card">
              <div class="card-body">
                <div class="text-center mt-4">
                  <div class="mb-3">
                    <a href=""><img src="public/images/logo/logo-tgdd.png" height="50" alt="logo"></a>
                  </div>
                </div>
                <div class="p-3">
                  <h4 class="font-size-18 mt-2 text-center">Chào mừng bạn đã trở lại !</h4>
                  <p class="text-muted text-center mb-4">Đăng nhập quản trị hệ thống.</p>
                	<?php if (isset($data["Error"])): ?>
                		<div class="mt-2 mb-2" id="errorMessage" style="color: #d0021b">
            			Tên đăng nhập hoặc Mật khẩu không đúng!
            				</div>
                	<?php endif ?>
                  <form class="form-horizontal" action="admin" method="POST">
                    <div class="form-group">
                      <label for="username">Tên đăng nhập</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Nhập tên đăng nhập" autofocus>
                    </div>
                    <div class="form-group">
                      <label for="userpassword">Mật khẩu</label>
                      <input type="password" class="form-control" name="password" id="userpassword" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="form-group row mt-4">
                      <div class="col-sm-6">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" name="remember" id="customControlInline">
                          <label class="custom-control-label" for="customControlInline">Ghi nhớ tài khoản</label>
                        </div>
                      </div>
                      <div class="col-sm-6 text-right">
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit" name="login">Đăng nhập</button>
                      </div>
                    </div>
                    <div class="form-group mb-0 row">
                      <div class="col-12 mt-2">
                        <a href="admin/ForgotYourPass" class="text-muted"><i class="fas fa-user-lock"></i> Quên mật khẩu?</a> 
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="text-center mt-3">
              <p class="text-white">2017 - 2020 © Thegioididong. Được viết <i class="fas fa-heart" style="color: #d0021b"></i> bởi Tien Nguyen</p>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
	<!-- jQuery -->
  <script type="text/javascript" src="public/js/jquery-3.5.0.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
  <!-- my js -->
  <script type="text/javascript" src="public/js/javascript.js"></script>
</body>
</html>