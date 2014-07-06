<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        
       	<?php Yii::app()->getClientScript()->registerCoreScript('jquery'); ?>

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
        <?php Yii::app()->bootstrap->register(); ?>
        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
         <div class="banner">

            </div>
</head>

<body>

<div class="container" id="page">

	<div id="header">
           
	</div><!-- header -->
 
        <div id="mainmenu">
		<?php $this->widget('bootstrap.widgets.TbMenu',array(
                        'type'=>'tabs',
                        'stacked'=>false,
			'items'=>array(
				array('label'=>'Trang chủ', 'url'=>array('/site/index')),
				array('label'=>'Album ảnh', 'url'=>array('/site/album')),
				array('label'=>'Cách thức mua hàng', 'url'=>array('/site/howToBuy')),
				array('label'=>'Khuyến mại', 'url'=>array('/site/login')),
                                array('label'=>'Bản đồ', 'url'=>array('/site/map')),
                                array('label'=>'Tin 24h', 'url'=>array('/site/login')),
                                array('label'=>'Giỏ hàng', 'url'=>array('/site/shoppingCart')),

			),
		)); ?>
	</div> 
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
           
                <div class="span-5 last">
	         <?php $this->renderPartial('/layouts/catalog')?>
                </div>

	<?php echo $content; ?>
                
	<div class="clear"></div>
       
	<div id="footer">
             <hr></hr>
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
