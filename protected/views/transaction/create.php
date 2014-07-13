<?php
/* @var $this TransactionController */
/* @var $model Transaction */
/* @var $data Product */



?>

<h1 align="center">Form Đặt Hàng</h1>

<?php echo $this->renderPartial('/transaction/_form', array('model'=>$model, 'data'=>$data)); ?>