<?php
/* @var $this FriendsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Friends',
);

$this->menu=array(
	array('label'=>'Tạo Web Liên Kết', 'url'=>array('create')),
	array('label'=>'Quản Lý Web Liên Kết', 'url'=>array('admin')),
);
?>

<h1>Web Liên Kết</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'/admin/friends/_view',
)); ?>
