<?php
/* @var $this PromoteController */
/* @var $model Promote */

$this->breadcrumbs=array(
	'Promotes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Danh sách các khuyến mãi', 'url'=>array('index')),
);
?>

<h1>Tạo tin khuyến mãi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>