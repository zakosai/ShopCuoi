<?php
/* @var $this FriendsController */
/* @var $model Friends */

$this->breadcrumbs=array(
	'Friends'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Danh sách Web Liên Kết', 'url'=>array('index')),
	array('label'=>'Quản Lý Web Liên Kết', 'url'=>array('admin')),
);
?>

<h1>Tạo Web Liên Kết</h1>

<?php echo $this->renderPartial('/admin/friends/_form', array('model'=>$model)); ?>