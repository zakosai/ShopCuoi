<?php
/* @var $this InfopageController */
/* @var $model Infopage */
if ($col == 'home') $mes = "Trang Chủ";
else if($col == 'album') $mes = "Album Ảnh Cửa Hàng";
else if($col == 'shopping') $mes = "Cách Thức Mua Hàng";
else $mes = "Bản Đồ";
?>

<h1>Update Thông Tin <?php echo $mes;?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'col'=>$col)); ?>