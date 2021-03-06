<?php
/* @var $this ProductController */
/* @var $model Product */
function gender($n0){
    if ($n0 == 0)        return "Bé Trai";
    else return "Bé Gái";
}

$this->menu=array(
	array('label'=>'Danh sách sản phẩm', 'url'=>array('index')),
	array('label'=>'Tạo Sản Phẩm Mới', 'url'=>array('create')),
	array('label'=>'Sửa thông tin sản phẩm', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Xóa sản phẩm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Bạn có chắc chắn muốn xóa sản phẩm này?')),
	array('label'=>'Quản lý sản phẩm', 'url'=>array('admin')),
);
?>
<h1>Thông tin chi tiết sản phẩm <?php echo $model->productCode; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'productCode',
		'madeOf',
		'size',
		'price',
		'status',
		array(
                    'label'=> 'Giới Tính',
                    'value'=> gender($model->gender),
                ),
		'type',
		'date',
	),
)); 
 $baseLink = Yii::app()->baseUrl."/images/Products";
 ?><div class="imgView">
     <?php
    foreach($img as $i){
         echo CHtml::image($baseLink."/".$i->link, 'Ảnh Sản Phẩm', array('width' => 320, 'height' => 360));      

    }
?>
 </div>