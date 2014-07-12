<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Danh sách các tin', 'url'=>array('index')),
);
?>

<h1>Tạo tin mới</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>