<?php
/* @var $this ProductController */
/* @var $catalog Product */
$boy = array('Quần', 'Áo', 'Bộ');
$girl = array('Quần', 'Áo', 'Bộ', 'Váy');
$status = array('Hàng Xuân Hè', 'Hàng Thu Đông', 'Phụ Kiện Đính Kèm', 'Hàng Giảm Giá');
$statusGet = $_GET['status'];
$genderGet = $_GET['gender'];
$typeGet = $_GET['type'];
$link = Friends::model()->findAll();
?>
<div class="Catalog">
    <div class="CatalogDecorTop">
        <?php   echo CHtml::image(Yii::app()->baseUrl."/images/bg/left001.png",'Ảnh Trang Trí');?>
    </div>
    <div class="CatalogDecorMiddle">
<!--<ul id="yw0" class="nav nav-list">-->
<!--        <div class="title"> DANH MỤC</div>
        <hr>-->
        
      <!-- Hang Xuân Hè ------------------------------------------------------------- -->
        <div class ="type1">
            <img src="<?php echo Yii::app()->baseUrl."/images/bg/left002.png"?>">
            <a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Xuân Hè"))?>">HÀNG XUÂN HÈ</a></img></div>
        <ul>
            <div class ="type2">
                 <img src="<?php echo Yii::app()->baseUrl."/images/bg/star.png"?>" />
                                     <a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Xuân Hè","gender"=>"0"))?>">ĐỒ BÉ TRAI</a></div>
            <ul>
                <?php
                        foreach ($boy as $b){
                        ?><li class ="type3"><a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Xuân Hè","gender"=>"0","type"=>"$b"))?>"><?php echo $b ?></a></li>
                        <?php }
                ?>
            </ul>
            <br />
            <div class ="type2">
                 <img src="<?php echo Yii::app()->baseUrl."/images/bg/heart.png"?>" />
                <a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Xuân Hè","gender"=>"1"))?>">ĐỒ BÉ GÁI</a></div>
            <ul>
                <?php
                        foreach ($girl as $g){
                        ?><li class ="type3"><a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Xuân Hè","gender"=>"1","type"=>"$g"))?>"><?php echo $g ?></a></li>
                        <?php }
                ?>
            </ul>
        </ul>
        <!-- Hang Thu Dong------------------------------------------------------------- -->
         <div class ="type1"><img src="<?php echo Yii::app()->baseUrl."/images/bg/left002.png"?>"><a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Thu Đông"))?>">HÀNG THU ĐÔNG</a></img></div>
        <ul>
            <div class ="type2">
                <img src="<?php echo Yii::app()->baseUrl."/images/bg/star.png"?>" />
                <a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Thu Đông","gender"=>"0"))?>">ĐỒ BÉ TRAI</a></div>
            <ul>
                <?php
                        foreach ($boy as $b){
                        ?><li class ="type3"><a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Thu Đông","gender"=>"0","type"=>"$b"))?>"><?php echo $b ?></a></li>
                        <?php }
                ?>
            </ul>
            <br />
            <div class ="type2">
                 <img src="<?php echo Yii::app()->baseUrl."/images/bg/heart.png"?>" />
                <a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Thu Đông","gender"=>"1"))?>">ĐỒ BÉ GÁI</a></div>
            <ul>
                <?php
                        foreach ($girl as $g){
                        ?><li class ="type3"><a href="<?php echo $this->createUrl('product/list', array("status" => "Hàng Thu Đông","gender"=>"1","type"=>"$g"))?>"><?php echo $g ?></a></li>
                        <?php }
                ?>
            </ul>
        </ul>
      <!-- Phu Kien Dinh Kem------------------------------------------------------------- -->
       <div class ="type1"><img src="<?php echo Yii::app()->baseUrl."/images/bg/left002.png"?>"><a href="<?php echo $this->createUrl('product/list', array("type"=>"Phụ Kiện Đính Kèm"))?>">PHỤ KIỆN ĐÍNH KÈM</a></img></div>
<!--        <hr class ="catalogHr">-->
      <!-- Hàng Giảm Giá------------------------------------------------------------- -->
<!--       <li class ="type1"><a href="#">Hàng Giảm Giá</a></li>-->

</ul>
        </div>
    <div class="CatalogDecorBottom">
        <?php   echo CHtml::image(Yii::app()->baseUrl."/images/bg/left004.png",'Ảnh Trang Trí');?>
    </div>
</div>
<!-- Ho tro online ----------------------------------------------->
<div class="Support">
        <div class="CatalogDecorTop">
        <?php   echo CHtml::image(Yii::app()->baseUrl."/images/bg/left001.png",'Ảnh Trang Trí');?>
    </div>
    <div class="type1"><img src="<?php echo Yii::app()->baseUrl."/images/bg/left0021.png"?>"> <div class="txt">HỖ TRỢ ONLINE</div></img></div>
    <div class="middle">
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
</div>              

</div>

<div class="friendlink">
        <div class="CatalogDecorTop">
        <?php   echo CHtml::image(Yii::app()->baseUrl."/images/bg/left001.png",'Ảnh Trang Trí');?>
    </div>
    <div class="type1"><img src="<?php echo Yii::app()->baseUrl."/images/bg/left0021.png"?>"> <div class="txt">LINK LIÊN KẾT</div></img></div>
    <div class="middle">
    <ul>
        <?php 
        foreach($link as $l){?>
    <li><a href="<?php echo $l->link?>"> <?php  echo $l->name;?></a> </li>
    <?php  }
        ?>
    </ul>
    </div>
    <br/>

</div>
<div class="fb-like-box" data-href="https://www.facebook.com/banquanaotreemgiare" data-width="185" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>

<?php
    $files = scandir("images/decor/");
    $extension = array("gif", "jpeg", "jpg", "png");
    $i = 0;
    foreach ($files as $f){
        $type = explode(".", $f);
        $type = end($type);
        if (in_array($type, $extension)){
            echo CHtml::image(Yii::app()->baseUrl."/images/decor/".$f,'Ảnh Trang Trí', array('width' => 185));
           // if ($i++ >= 7) break;
        }

    }
?>