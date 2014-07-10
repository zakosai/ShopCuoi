<?php
/* @var $this PromoteController */
/* @var $model Promote */

$this->breadcrumbs=array(
	'Promotes'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Promote', 'url'=>array('index')),
	array('label'=>'Create Promote', 'url'=>array('create')),
	array('label'=>'Update Promote', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Promote', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Promote', 'url'=>array('admin')),
);
?>

<h1>View Promote #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'date',
	),
)); ?>
