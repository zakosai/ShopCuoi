<?php
/* @var $this FriendsController */
/* @var $model Friends */

$this->breadcrumbs=array(
	'Friends'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Danh sách Web liên kết', 'url'=>array('index')),
	array('label'=>'Tạo Web liên kết', 'url'=>array('create')),
	array('label'=>'Sửa Web liên kết', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Xóa Web liên kết', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Quản lý Web liên kết', 'url'=>array('admin')),
);
?>

<h1>Xem Web liên kết <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'link',
		'date',
	),
)); ?>
