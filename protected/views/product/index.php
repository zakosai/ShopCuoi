<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Tạo Sản Phẩm Mới', 'url'=>array('create')),
	array('label'=>'Quản Lý Sản Phẩm', 'url'=>array('admin')),
);
?>

<h1>Products</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
