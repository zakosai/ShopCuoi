<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
$baseLink = Yii::app()->baseUrl."/images/Products";
$status = array('Hàng Xuân Hè'=>'Hàng Xuân Hè', 'Hàng Thu Đông'=>'Hàng Thu Đông', 'Hàng Giảm Giá'=>'Hàng Giảm Giá');
$gender = array('Bé Trai', 'Bé Gái');
$type = array('Quần'=>'Quần', 'Áo'=>'Áo', 'Váy'=>'Váy', 'Phụ Kiện Đính Kèm'=>'Phụ Kiện Đính Kèm', 'Bộ'=>'Bộ');
?>

<div class="form product">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
         'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Các mục có dấu <span class="required">*</span> bắt buộc phải điền.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'productCode'); ?>
		<?php echo $form->textField($model,'productCode',array('size'=>7,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'productCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'madeOf'); ?>
		<?php echo $form->textField($model,'madeOf',array('size'=>20,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'madeOf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>7,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		 <?php 
               echo   $form->dropDownList($model,'status', $status);

                  ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo   $form->dropDownList($model,'gender', $gender); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo   $form->dropDownList($model,'type', $type); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>
<div class="upload">
    <input type="file" name="file0" value="file" id="file">
</div>
<input type="hidden" name="number" id="number" value="1">
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo Sản Phẩm' : 'Lưu'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

