<?php
/* @var $this PromoteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Promotes',
);

$this->menu=array(
	array('label'=>'Create Promote', 'url'=>array('create')),
	array('label'=>'Manage Promote', 'url'=>array('admin')),
);
?>

<h1>Promotes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
