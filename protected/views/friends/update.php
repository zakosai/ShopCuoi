<?php
/* @var $this FriendsController */
/* @var $model Friends */

$this->breadcrumbs=array(
	'Friends'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Danh sách Web liên kết', 'url'=>array('index')),
	array('label'=>'Tạo Web liên kết', 'url'=>array('create')),
	array('label'=>'Xem Web liên kết này', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Quản lý Web liên kết', 'url'=>array('admin')),
);
?>

<h1>Sửa Web liên kết <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>