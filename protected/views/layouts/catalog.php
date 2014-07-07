<?php
/* @var $this ProductController */
/* @var $catalog Product */
$boy = array('Quần', 'Áo', 'Bộ');
$girl = array('Quần', 'Áo', 'Bộ', 'Váy');
$status = array('Hàng Xuân Hè', 'Hàng Thu Đông', 'Phụ Kiện Đính Kèm', 'Hàng Giảm Giá');
$statusGet = $_GET['status'];
$genderGet = $_GET['gender'];
$typeGet = $_GET['type'];

?>
<div class="Catalog">
<ul id="yw0" class="nav nav-list">
        <div class="title"> DANH MỤC</div>
        <hr>
        
      <!-- Hang Xuân Hè ------------------------------------------------------------- -->
        <li class ="type1">
            <a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Xuân Hè"))?>">HÀNG XUÂN HÈ</a></li>
        <ul>
            <li class ="type2"><a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Xuân Hè","gender"=>"0"))?>">ĐỒ BÉ TRAI</a></li>
            <ul>
                <?php
                        foreach ($boy as $b){
                        ?><li class ="type3"><a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Xuân Hè","gender"=>"0","type"=>"$b"))?>"><?php echo $b ?></a></li>
                        <?php }
                ?>
            </ul>
            <br />
            <li class ="type2"><a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Xuân Hè","gender"=>"1"))?>">ĐỒ BÉ GÁI</a></li>
            <ul>
                <?php
                        foreach ($girl as $g){
                        ?><li class ="type3"><a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Xuân Hè","gender"=>"1","type"=>"$g"))?>"><?php echo $g ?></a></li>
                        <?php }
                ?>
            </ul>
        </ul>
        <hr class ="catalogHr">
        <!-- Hang Thu Dong------------------------------------------------------------- -->
         <li class ="type1"><a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Thu Đông"))?>">HÀNG THU ĐÔNG</a></li>
        <ul>
            <li class ="type2"><a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Thu Đông","gender"=>"0"))?>">ĐỒ BÉ TRAI</a></li>
            <ul>
                <?php
                        foreach ($boy as $b){
                        ?><li class ="type3"><a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Thu Đông","gender"=>"0","type"=>"$b"))?>"><?php echo $b ?></a></li>
                        <?php }
                ?>
            </ul>
            <br />
            <li class ="type2"><a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Thu Đông","gender"=>"1"))?>">ĐỒ BÉ GÁI</a></li>
            <ul>
                <?php
                        foreach ($girl as $g){
                        ?><li class ="type3"><a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Thu Đông","gender"=>"1","type"=>"$g"))?>"><?php echo $g ?></a></li>
                        <?php }
                ?>
            </ul>
        </ul>
        <hr class ="catalogHr">
      <!-- Phu Kien Dinh Kem------------------------------------------------------------- -->
       <li class ="type1"><a href="<?php echo $this->createUrl('product/list', array("type"=>"Phụ Kiện Đính Kèm"))?>">PHỤ KIỆN ĐÍNH KÈM</a></li>
<!--        <hr class ="catalogHr">-->
      <!-- Hàng Giảm Giá------------------------------------------------------------- -->
<!--       <li class ="type1"><a href="#">Hàng Giảm Giá</a></li>-->
       <br />
</ul>
</div>
<!-- Ho tro online ----------------------------------------------->
<div class="Support">
<ul id="yw0" class="nav nav-list">
    <div class="title"> HỖ TRỢ ONLINE</div>
    <hr>
   <script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
<div id="SkypeButton_Call_zakosai_1">
  <script type="text/javascript">
    Skype.ui({
      "name": "dropdown",
      "element": "SkypeButton_Call_zakosai_1",
      "participants": ["zakosai"],
      "imageSize": 32
    });
  </script>
</div>              
    <br/>
</ul>
</div>

<div class="Visited">
<ul id="yw0" class="nav nav-list">
    <div class="title"> LƯỢT KHÁCH GHÉ THĂM</div>
    
    <hr>
    
    <br/>
</ul>
</div>
<div class="fb-like-box" data-href="https://www.facebook.com/banquanaotreemgiare" data-width="185" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>

<?php
    $files = scandir("../ShopCuoi/images/");
    $extension = array("gif", "jpeg", "jpg", "png");
    $i = 0;
    foreach ($files as $f){
        $type = explode(".", $f);
        $type = end($type);
        if (in_array($type, $extension)){
            echo CHtml::image(Yii::app()->baseUrl."/images/".$f,'Ảnh Trang Trí', array('width' => 185));
            if ($i++ >= 7) break;
        }

    }
?>