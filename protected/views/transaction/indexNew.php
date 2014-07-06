<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */

$this->menu=array(
	array('label'=>'Danh sách toàn bộ đơn đặt hàng', 'url'=>array('index')),
);

?>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
