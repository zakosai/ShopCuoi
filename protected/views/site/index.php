<?php
/* @var $this SiteController */
/* @var ProductController */
//if (!isset(Yii::app()->request->cookies['shopcuoi-product'])){
//     $cookie= new CHttpCookie('shopcuoi-product', "");
//     $cookie->expire = time() + 24*60*60;
//     Yii::app()->request->cookies['shopcuoi-product'] = $cookie;
//}
?>
<div class ="text">
    <div class="cont">
        <?php echo $str;?>
    </div>
    </div>
<?php  $this->renderPartial('/product/List', array('page'=>$page)) ?>

