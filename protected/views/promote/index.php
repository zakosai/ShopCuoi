<?php
/* @var $this PromoteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Promotes',
);

$this->menu=array(
	array('label'=>'Tạo tin khuyến mại', 'url'=>array('create')),
);
?>

<h1>Các tin khuyến mại</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
