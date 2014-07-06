<?php
/* @var $this InfopageController */
/* @var $model Infopage */

$this->breadcrumbs=array(
	'Infopages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Infopage', 'url'=>array('index')),
	array('label'=>'Create Infopage', 'url'=>array('create')),
	array('label'=>'Update Infopage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Infopage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Infopage', 'url'=>array('admin')),
);
?>

<h1>View Infopage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'home',
		'album',
		'shopping',
		'map',
	),
)); ?>
