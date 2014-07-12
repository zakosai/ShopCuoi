<?php /* @var $this AdminController */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
<!--       	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
                <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin.css" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	        <?php Yii::app()->bootstrap->register(); ?>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<?php
$ticket = Transaction::model()->findAll(array("condition"=>"status = 0"));
$str = "Đơn đặt hàng mới"
?>
<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php 
                if(!Yii::app()->user->isGuest) {
                $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Trang Chủ', 'url'=>array('/infopage/update', 'col'=>'home')),
                            array('label'=>'Album Ảnh', 'url'=>array('/infopage/update', 'col'=>'album')),
				array('label'=>'Cách Thức Mua Hàng', 'url'=>array('/infopage/update', 'col'=>'shopping')),
				array('label'=>'Bản đồ', 'url'=>array('/infopage/update', 'col'=>'map')),
                                array('label'=>'Upload Ảnh', 'url'=> array('infopage/upload')),
                                array('label'=>'Khuyến Mại', 'url'=> array('promote/index')),
                                 array('label'=>'Tin 24h', 'url'=> array('news/index')),
				array('label'=>'Sản phẩm', 'url'=>array('/product/index')),
                                array('label'=> 'Web liên kết', 'url'=>array('friends/index')),
                                array('label'=>'Đơn đặt hàng mới('.count($ticket).')', 'url'=>array('/transaction/indexNew')),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		));
                }?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>