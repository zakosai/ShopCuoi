<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
$baseLink = Yii::app()->baseUrl."/images/Products";
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
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender'); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>
        <div class="uploadImage">
            <h2>Chọn Ảnh Sản Phẩm</h2>
           
            <?php $this->renderPartial('/product/upload', array('img'=>$img))?>
        </div>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo Sản Phẩm' : 'Lưu'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

