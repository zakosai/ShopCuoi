<?php
/* @var $this PromoteController */
/* @var $model Promote */

$this->breadcrumbs=array(
	'Promotes'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Danh sách các tin khuyến mãi', 'url'=>array('index')),
	array('label'=>'Tạo tin khuyến mãi mới', 'url'=>array('create')),
	array('label'=>'Sửa tin khuyến mãi này', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Xóa tin khuyến mãi này', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Thông tin chi tiết tin khuyến mãi số #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'date',
	),
)); ?>
