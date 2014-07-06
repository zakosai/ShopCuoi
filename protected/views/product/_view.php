<?php
/* @var $this ProductController */
/* @var $data Product */

?>

<div class="view">
    <div class ="info">
	<b>Mã Sản Phẩm:</b>
	<?php echo CHtml::link(CHtml::encode($data->productCode), array('product/update','id'=>$data->id)); ?>
	<br />

	<b>Chất:</b>
	<?php echo CHtml::encode($data->madeOf); ?>
	<br />

	<b>Kích cỡ:</b>
	<?php echo CHtml::encode($data->size); ?>
	<br />

	<b>Giá:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />
        
        <b>Loại:</b>
        <?php
            $str = $data->type;
            if ($data->gender == 0)
                $str = $str." - Đồ Bé Trai";
            else 
                $str = $str." - Đồ Bé Gái";
            
            $str = $str." - ".$data->status;
            echo $str
        ?>
	<br />
    </div>
    <div class="img">
        <?php
        $baseLink = Yii::app()->baseUrl."/images/Products";
        $images = $data->images;
        foreach ($images as $img)
             echo CHtml::image($baseLink."/".$img->link, 'Ảnh Sản Phẩm', array('width' => 80, 'height' => 90));      

        ?>
        
    </div>
</div>