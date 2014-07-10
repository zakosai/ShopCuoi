<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $img Image */



$this->menu=array(
	array('label'=>'Danh Sách Sản Phẩm', 'url'=>array('index')),
	array('label'=>'Tạo Sản Phẩm Mới', 'url'=>array('create')),
	array('label'=>'Xem Sản Phẩm', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Quản Lý Sản Phẩm', 'url'=>array('admin')),
);
?>

<h1>Update Product <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'img'=>$img)); ?>