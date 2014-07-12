<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Danh sách các tin đã đăng', 'url'=>array('index')),
	array('label'=>'Tạo tin mới', 'url'=>array('create')),
	array('label'=>'Xem tin này', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Sửa Tin 24h <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>