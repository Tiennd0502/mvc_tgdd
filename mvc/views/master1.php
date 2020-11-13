<!DOCTYPE html>
<html lang="en">
<head>
  <base href="http://localhost/MVC/">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dkweb user</title>
  <link rel="stylesheet" href="./public/css/style.css">
  <link rel="stylesheet" href="./public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" async defer src="./public/js/javascript.js"></script>
  <script type="text/javascript" src="./public/js/jquery-3.5.0.min.js"></script>
  <script type="text/javascript" src="./public/js/main.js"></script>
  

  <!-- ẩn các truy vấn GET biến mất khỏi thanh URL của trình duyệt sau khi tải. -->
</head>
<body>
</body>
  <?php 
    if(isset($data['Result'])){ 
      if($data['Result']){ ?>
        <script type="text/javascript">
          alert("Đăng kí thành công!");
        </script>
  <?php }else {?>
        <script type="text/javascript">
          alert("Đăng kí thất bại!");
        </script>
  <?php }} ?>
  <?php require_once './mvc/views/blocks/register.php'; ?>
  <?php require_once './mvc/views/blocks/login.php'; ?>
  <div class="container-fluid">
    <?php require_once './mvc/views/blocks/header.php'; ?>
    <?php require_once './mvc/views/blocks/menu.php'; ?>
    <div class="container main">
      <aside class="">
        <?php require_once './mvc/views/pages/category.php'; ?>
      </aside>
      <main class="content">
        <?php require_once './mvc/views/pages/'.$data['Page'].'.php'; ?>
      </main>
    </div>
      <?php require_once './mvc/views/blocks/footer.php'; ?>
  </div>
</html>