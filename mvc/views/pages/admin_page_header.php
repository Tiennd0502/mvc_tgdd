
<!-- Page Heading -->
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      <?php 
        echo $data["Title"] ;
        if($data["Title"] == "Bảng điều khiển"){ ?>
          <small class="text-secondary">Thống kê tổng quan</small>
      <?php } ?> 
    </h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <?php if($data["Title"] == $data["Breadcrumb"]){ ?>
          <li class="breadcrumb-item active">
            <span> <i class="fas fa-tachometer-alt mr-1"></i>
              <?= $data["Breadcrumb"]?>
            </span>
          </li>
        <?php }else { ?>
          <li class="breadcrumb-item">
            <a href="admin" class="text-decoration-none "><i class="fas fa-tachometer-alt mr-1"></i>
              <?= $data["Breadcrumb"]?>
            </a>
          </li>
          <?php if (isset($data["Current_title"])){ ?>
            <li class="breadcrumb-item">
              <a href="<?= $data["Path"]?>" class="text-decoration-none "><?= $data["Title"]?></a>
            </li>
            <li class="breadcrumb-item active">
              <span><?= $data["Current_title"] ?></span>
            </li>
          <?php }else { ?>
            <li class="breadcrumb-item active">
              <span><?= $data["Title"]?></span>
            </li>
          <?php } ?>
          

        <?php } ?>
      </ol>
    </nav>
  </div>
</div>