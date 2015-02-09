<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />




        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
        <?php Yii::app()->bootstrap->register(); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <div class="banner">
             <object width="100%" height="100%" data="<?php echo Yii::app()->baseUrl."/images/bg/banner.swf" ?>"></object>
        </div>
    </head>

    <body>
        <div class="fairy">
            <a href="<?php echo Yii::app()->createUrl('/site/shoppingCart') ?>"><b>Shop Cuội</b></a>
            <img src="<?php echo Yii::app()->baseUrl . "/images/bg/fairy.png" ?>"></img>
        </div>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <div class="container" id="page">

            <div id="header">

            </div><!-- header -->

            <div id="mainmenu">
                <?php
                $this->widget('bootstrap.widgets.TbMenu', array(
                    'type' => 'pills',
                    'stacked' => false,
                    'items' => array(
                        array('label' => 'TRANG CHỦ', 'url' => array('/site/index')),
                        array('label' => 'ALBUM ẢNH CỬA HÀNG', 'url' => array('/site/album')),
                        array('label' => 'CÁCH THỨC MUA HÀNG', 'url' => array('/site/howToBuy')),
                        array('label' => 'KHUYẾN MẠI', 'url' => array('/promote/list')),
                        array('label' => 'BẢN ĐỒ', 'url' => array('/site/map')),
                        array('label' => 'TIN 24H', 'url' => array('/news/list')),
                        array('label' => 'GIỎ HÀNG', 'url' => array('/site/shoppingCart')),
                    ),
                ));
                ?>
            </div> 
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
<?php endif ?>

         
            <div class="span-5 last">
<?php $this->renderPartial('/layouts/catalog') ?>
            </div>

<?php echo $content; ?>
            <div class="clear"></div>

           

        </div><!-- page -->
 <div id="footer">
                <div class="rabbit"><img src="<?php echo Yii::app()->baseUrl . "/images/bg/rabiit.png" ?>"></img></div>        

                <div class="footerimage"><img src="<?php echo Yii::app()->baseUrl."/images/bg/footer.png"?>"/></div>
            </div><!-- footer -->
    </body>
   
</html>
