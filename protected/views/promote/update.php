<?php
/* @var $this PromoteController */
/* @var $model Promote */

$this->breadcrumbs=array(
	'Promotes'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Danh sách các Khuyến mãi', 'url'=>array('index')),
	array('label'=>'Tạo tin khuyến mãi', 'url'=>array('create')),
	array('label'=>'Xem tin vừa tạo', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Sửa tin khuyến mãi <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>