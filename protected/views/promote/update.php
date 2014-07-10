<?php
/* @var $this PromoteController */
/* @var $model Promote */

$this->breadcrumbs=array(
	'Promotes'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Promote', 'url'=>array('index')),
	array('label'=>'Create Promote', 'url'=>array('create')),
	array('label'=>'View Promote', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Promote', 'url'=>array('admin')),
);
?>

<h1>Update Promote <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>