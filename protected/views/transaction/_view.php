<?php
/* @var $this TransactionController */
/* @var $data Transaction */
?>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cusName')); ?>:</b>
	<?php echo CHtml::encode($data->cusName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cusMobile')); ?>:</b>
	<?php echo CHtml::encode($data->cusMobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cusEmail')); ?>:</b>
	<?php echo CHtml::encode($data->cusEmail); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />


</div>