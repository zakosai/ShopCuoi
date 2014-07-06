<?php
/* @var $this ProductController */
/* @var $model Product */


$this->menu=array(
	array('label'=>'Danh Sách Sản Phẩm', 'url'=>array('index')),
	array('label'=>'Quản Lý Sản Phẩm ', 'url'=>array('admin')),
);
?>

<h1>Tạo Sản Phẩm Mới</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>