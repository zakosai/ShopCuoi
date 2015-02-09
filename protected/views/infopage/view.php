<?php
/* @var $this InfopageController */
/* @var $model Infopage */
if ($col == 'home') $mes = "Trang Chủ";
else if($col == 'album') $mes = "Album Ảnh Cửa Hàng";
else if($col == 'shopping') $mes = "Cách Thức Mua Hàng";
else $mes = "Bản Đồ";

$this->breadcrumbs=array(
	'Infopages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Infopage', 'url'=>array('index')),
	array('label'=>'Create Infopage', 'url'=>array('create')),
	array('label'=>'Update Infopage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Infopage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Infopage', 'url'=>array('admin')),
);
?>

<h1><?php echo $mes; ?></h1>

<?php echo $str;?>


