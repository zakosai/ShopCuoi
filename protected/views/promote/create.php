<?php
/* @var $this PromoteController */
/* @var $model Promote */

$this->breadcrumbs=array(
	'Promotes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Promote', 'url'=>array('index')),
	array('label'=>'Manage Promote', 'url'=>array('admin')),
);
?>

<h1>Create Promote</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>