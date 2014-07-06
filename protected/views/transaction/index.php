<?php
/* @var $this TransactionController */
/* @var $dataProvider CActiveDataProvider */


?>

<h1>Transactions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
