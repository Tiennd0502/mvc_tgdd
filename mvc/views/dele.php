<div class="item">
      <a href="" class="large">
        <img src="./images/iphone-11-pro-max-green-400x400.jpg" alt="" width="180" height="180">
        <h3>Samsung Galaxy Note 20</h3>
        <h6 class="text-promo">Hàng sắp về</h6>
        <div class="product-price">
          <strong>6.490.000₫</strong>
          <span>6.990.000₫</span>
          <i>-7%</i>                      
        </div>
        <div class="product-promo noimage">
          <p>Giảm thêm <b>500.000₫</b></p>
          <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
        </div>
        <label class="preorder">Đặt trước đến 24/09</label>
        <!-- <label class="installment">Trả góp 0%</label> -->
        <!-- <label class="discount">GIẢM 45.000₫</label> -->
        <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt="">
      </a>
    </div>
    <div class="item">
      <a href="" class="large">
        <img src="./images/iphone-11-pro-max-green-400x400.jpg" alt="" width="180" height="180">
        <h3>Samsung Galaxy Note 20</h3>
        <h6 class="text-promo">Hàng sắp về</h6>
        <div class="product-price">
          <strong>6.490.000₫</strong>
          <span>6.990.000₫</span>
          <i>-7%</i>                      
        </div>
        <div class="product-promo noimage">
          <p>Giảm thêm <b>500.000₫</b></p>
          <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
        </div>
        <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
        <label class="installment">Trả góp 0%</label>
        <!-- <label class="discount">GIẢM 45.000₫</label> -->
        <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt="">
      </a>
    </div>
    <div class="item">
      <a href="" class="large">
        <img src="./images/iphone-11-pro-max-green-400x400.jpg" alt="" width="180" height="180">
        <h3>Samsung Galaxy Note 20</h3>
        <h6 class="text-promo">Hàng sắp về</h6>
        <div class="product-price">
          <strong>6.490.000₫</strong>
          <span>6.990.000₫</span>
          <i>-7%</i>                      
        </div>
        <div class="product-promo noimage">
          <p>Giảm thêm <b>500.000₫</b></p>
          <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
        </div>
        <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
        <!-- <label class="installment">Trả góp 0%</label> -->
        <label class="discount">GIẢM 45.000₫</label>
        <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt="">
      </a>
    </div>
    <div class="item">
      <a href="" class="large">
        <img src="./images/iphone-11-pro-max-green-400x400.jpg" alt="" width="180" height="180">
        <h3>Samsung Galaxy Note 20</h3>
        <h6 class="text-promo">Hàng sắp về</h6>
        <div class="product-price">
          <strong>6.490.000₫</strong>
          <span>6.990.000₫</span>
          <i>-7%</i>                      
        </div>
        <div class="product-promo noimage">
          <p>Giảm thêm <b>500.000₫</b></p>
          <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
        </div>
        <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
        <!-- <label class="installment">Trả góp 0%</label> -->
        <label class="discount">GIẢM 45.000₫</label>
        <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt="">
      </a>
    </div>
    <div class="item">
      <a href="" class="large">
        <img src="./images/iphone-11-pro-max-green-400x400.jpg" alt="" width="180" height="180">
        <h3>Samsung Galaxy Note 20</h3>
        <h6 class="text-promo">Hàng sắp về</h6>
        <div class="product-price">
          <strong>6.490.000₫</strong>
          <span>6.990.000₫</span>
          <i>-7%</i>                      
        </div>
        <div class="product-promo noimage">
          <p>Giảm thêm <b>500.000₫</b></p>
          <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
        </div>
        <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
        <!-- <label class="installment">Trả góp 0%</label> -->
        <label class="discount">GIẢM 45.000₫</label>
        <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt="">
      </a>
    </div>
    <!-- san phaarm noi batj -->
    <?php 
      // lấy 2 sản phẩm laptôp nôi bật nhất
      if(isset($data["Laptop"])){
        $laptops = json_decode($data["Laptop"], TRUE);
        $laptop_hot = array();
        $index = 0; 
        foreach ($laptops as $key => $laptop) {
          if(!empty($laptop->image_hot)){
            $laptop_hot[] = $laptop;
            unset($laptops[$key]);
            $index ++ ;
          }
          if($index == 2){
            break;
          }
        }
        $index = 0;
        $count = 0;
        foreach ($laptops as $laptop) {
          if ($count == 0 || $count == 4) { ?>
            <div class="feature">
              <a href="dtdd/<?= strtolower(str_replace(" ","-",$laptop_hot[$index]->name)) ?>" class="large">
                <img src="public/images/avatar_hot/<?= $laptop_hot[$index]->image_hot?>" alt="" width="600" height="275">
                <h3><?= $laptop_hot[$index]->name ?></h3>
                <!-- <h6 class="text-promo">Hàng sắp về</h6> -->
                <div class="product-price">
                  <?php 
                  if ($laptop_hot[$index]->discount != 0) { ?>
                    <strong><?= number_format($laptop_hot[$index]->price - $laptop_hot[$index]->price * $laptop_hot[$index]->discount / 100,0,",", ".")  ?></strong>
                    <span><?= number_format($laptop_hot[$index]->price,0,",",".") ?></span>
                    <i>-<?= $laptop_hot[$index]->discount ?>%</i>
                  <?php }else { ?>
                    <strong><?= number_format($laptop_hot[$index]->price,0,",", ".")  ?></strong>
                  <?php }?>                      
                </div>
                <!-- <div class="product-promo noimage">
                  <p>Giảm thêm <b>500.000₫</b></p>
                  <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p>
                </div> -->
                <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
                <label class="installment">Trả góp 0%</label>
                <!-- <label class="discount">GIẢM 45.000₫</label> -->
                <!-- <img class="icon-imgNew cate1" src="./images/Label_01-05.png" alt=""> -->
                <?php 
                if (!empty($laptop_hot[$index]->icon)) { ?>
                  <img class="icon-imgNew cate1" src="public/images/icon/<?= $laptop_hot[$index]->icon?>" alt="">
                <?php }?>
              </a>
            </div>
          <?php $index = 1; $count++ ;}else{ ?>
            <div>
              <a href="dtdd/<?= strtolower(str_replace(" ","-",$laptop->name)) ?>" class=" large">
                <img src="public/images/avatar/<?= $laptop->image?>" alt="" width="180" height="180">
                <h3><?= $laptop->name?></h3>
                <h6 class="text-promo">Hàng sắp về</h6>
                <div class="product-price">
                  <?php 
                  if ($laptop->discount != 0) { ?>
                    <strong><?= number_format($laptop->price - $laptop->price * $laptop->discount / 100,0,",", ".")  ?></strong>
                    <span><?= number_format($laptop->price,0,",",".") ?></span>
                    <i>-<?= $laptop->discount ?>%</i>
                  <?php }else { ?>
                    <strong><?= number_format($laptop->price,0,",", ".")  ?></strong>
                  <?php }?>                    
                </div>
                <div class="product-promo noimage">
                  <?php if(!empty($laptop->gift)){ ?>
                    <p>Giảm thêm <b><?= number_format($laptop->gift, 0,",",".")?>₫</b></p>
                  <?php } ?>
                  <!-- <p>Ưu đãi đặc quyền Galaxy Z Elite và gói dịch vụ cao cấp</p> -->
                </div>
                <!-- <label class="preorder">Đặt trước đến 24/09</label> -->
                <!-- <label class="installment">Trả góp 0%</label> -->
                <label class="discount">GIẢM 45.000₫</label>
                <?php 
                if (!empty($laptop->icon)) { ?>
                  <img class="icon-imgNew cate1" src="public/images/icon/<?= $laptop->icon?>" alt="">
                <?php }?>
              </a>
            </div>
          <?php 
            $count++ ; 
            if ($count == 8) {
              break;
            }
          }
        }
      }

     ?>


     <!-- comment -->
     <div class="comment-now">
      <div class="input-reply">
        <form method="POST" class="form-reply" autocomplete="off" id="post-commemt">
          <textarea name="content" id="content-comment" rows="5"></textarea>
          <input type="hidden" name="product_id" value="<?= $product->infor->id?>">
          <input type="hidden" name="custumer_comment_id" value="<?= isset($_SESSION["custumer"]) ? $_SESSION["custumer"]["id"] : "" ?>">
          <input type="hidden" name="name" value="<?= isset($_SESSION["custumer"]) ? $_SESSION["custumer"]["name"] : "" ?>">
          <input type="hidden" name="phone" value="<?= isset($_SESSION["custumer"]) ? $_SESSION["custumer"]["phone"] : "" ?>">
          <input type="hidden" name="email" value="<?= isset($_SESSION["custumer"]) ? $_SESSION["custumer"]["email"] : "" ?>">
          <div class="attach">
            <label onmousedown="ShowAttach('list-attach')" onclick="AttachImgs(this, 'image')"><i class="fas fa-camera-retro mr-2"></i> Đính kèm ảnh</label>
            <a href="javascript:void(0);" onclick="PostComment('post-commemt', 'content-comment', 'js-lCmtMessage', 'box-infor')">Gửi bình luận</a>
          </div>
          <div class="list-attach" id="list-attach">
            <ul class="attach-view" id="attach-view-image">
              <li class="" id="insert-attach-image">
                <!-- <label class="insert-attach" onclick="AttachImg(this, 'image')"><i class="far fa-plus"></i></label> -->
              </li>
            </ul>
          </div>
          <div id="box-infor"></div>
        </form>
      </div>
      <span id="js-lCmtMessage" style="color: #d0021b;width: 100%"></span>
    </div>
    
    <div class="comment-detail">
      <ul class="list-comment">
        <?php 
          foreach ($contentComments as $item) { ?>
            <li class="commemt-ask">
              <div class="custumer">
                <div>
                  <?php 
                    $arr = explode(" ", $item->name);
                    $char = substr(ucfirst(array_pop($arr)), 0, 1);
                    echo $char;
                   ?>
                </div>
                <strong><?= ucwords($item->name) ?></strong>
              </div>
              <div class="question">
                <?= ucfirst($item->content) ?>
              </div>
              <div class="answer">
                <a class="respondent" href="javascript:ShowReply('<?= ($item->parent_id != 0) ? $item->parent_id : $item->id ?>', '<?= ucwords($item->name) ?>');">Trả lời</a>
                <?php 
                  $time = (time() - $item->created_time);
                  $date = $time/(24*60*60);
                  $hour = $time/(60*60);
                  $minute = $time/60;
                  if ( $date >=1){ ?>
                    <a class="time-respont" href="javascript:void(0)"> <?= round($date)?> ngày trước</a>
                  <?php }elseif($hour >= 1){ ?>
                    <a class="time-respont" href="javascript:void(0)"> <?= round($hour) ?> giờ trước</a>
                  <?php }else{ ?> 
                    <a class="time-respont" href="javascript:void(0)"> <?= round($minute) ?> phút trước</a> 
                  <?php }?>
              </div>
              <?php 
                if (isset($item->children)) { ?>
                  <div class="list-reply">
                    <?php foreach ($item->children as $item1) { ?>
                      <div class="reply">
                        <div class="custumer">
                          <div>
                            <?php 
                              $arr = explode(" ", $item1->name);
                              $char = substr(ucfirst(array_pop($arr)), 0, 1);
                              echo $char;
                             ?>
                          </div>
                          <strong><?= ucwords($item1->name) ?></strong>
                        </div>
                        <div class="question">
                          <?= $item1->content ?>
                        </div>
                        <div class="answer">
                          <a class="respondent" href="javascript:ShowReply('<?= $item1->parent_id ?>', '<?= ucwords($item1->name) ?>');">Trả lời</a>
                          <?php 
                            $time = (time() - $item1->created_time);
                            $date = $time/(24*60*60);
                            $hour = $time/(60*60);
                            $minute = $time/60;
                            if ( $date >=1){ ?>
                              <a class="time-respont" href="javascript:void(0)"> <?= round($date)?> ngày trước</a>
                            <?php }elseif($hour >= 1){ ?>
                              <a class="time-respont" href="javascript:void(0)"> <?= round($hour) ?> giờ trước</a>
                            <?php }else{ ?> 
                              <a class="time-respont" href="javascript:void(0)"> <?= round($minute) ?> phút trước</a> 
                            <?php }?> 
                        </div>
                      </div>
                    <?php }?>
                  </div>  
                <?php }
               ?>
              <div class="comment-now hide" id="reply<?= $item->id ?>">
                <div class="input-reply">
                  <form method="POST" class="form-reply" autocomplete="off" id="post-reply<?= $item->id ?>">
                    <textarea name="content" id="content<?= $item->id ?>" rows="5"></textarea>
                    <input type="hidden" name="product_id" value="<?= $product->infor->id?>">
                    <input type="hidden" name="parent_id" value="<?= $item->id ?>">
                    <input type="hidden" name="custumer_comment_id" value="<?= isset($_SESSION["custumer"]) ? $_SESSION["custumer"]["id"] : "" ?>">
                    <input type="hidden" name="name" value="<?= isset($_SESSION["custumer"]) ? $_SESSION["custumer"]["name"] : "" ?>">
                    <input type="hidden" name="phone" value="<?= isset($_SESSION["custumer"]) ? $_SESSION["custumer"]["phone"] : "" ?>">
                    <input type="hidden" name="email" value="<?= isset($_SESSION["custumer"]) ? $_SESSION["custumer"]["email"] : "" ?>">
                    <div class="attach">
                      <label onmousedown="ShowAttach('list-attach')" onclick="AttachImgs(this, 'image<?=$item->id?>')"><i class="fas fa-camera-retro mr-2"></i> Đính kèm ảnh</label>
                      <a href="javascript:void(0);" onclick="PostComment('post-reply<?= $item->id ?>', 'content<?= $item->id ?>', 'js-lCmtMessage<?= $item->id ?>', 'box-infor<?= $item->id ?>')">Gửi bình luận</a>
                    </div>
                    <div class="list-attach" id="list-attach">
                      <ul class="attach-view" id="attach-view-image<?=$item->id?>">
                        <li class="" id="insert-attach-image<?=$item->id?>">
                          <!-- <label class="insert-attach" onclick="AttachImg(this, 'image')"><i class="far fa-plus"></i></label> -->
                        </li>
                      </ul>
                    </div>
                    <div id="box-infor<?= $item->id ?>"></div>
                  </form>
                </div>
                <span id="js-lCmtMessage<?= $item->id ?>" style="color: #d0021b;width: 100%"></span>
              </div>
            </li>  
        <?php } ?>
      </ul>
    </div>