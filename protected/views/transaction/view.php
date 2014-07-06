<?php
/* @var $this TransactionController */
/* @var $model Transaction */
/* @var $product Product */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Danh sách toàn bộ đơn đặt hàng', 'url'=>array('index')),
	array('label'=>'Xóa đơn đặt hàng', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Đơn đặt hàng số #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cusName',
		'cusMobile',
		'cusEmail',

		'date',
	),
)); ?>

<h2>Danh sách sản phẩm</h2>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$product,
	'itemView'=>'/product/_view',
)); ?>