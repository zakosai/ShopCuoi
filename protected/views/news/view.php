<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Danh sách các tin đã đăng', 'url'=>array('index')),
	array('label'=>'Tạo tin mới', 'url'=>array('create')),
	array('label'=>'Sửa tin này', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Xóa tin này', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Tin số #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'link',
		'content',
		'date',
	),
)); ?>
