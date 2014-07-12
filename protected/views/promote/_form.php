<?php
/* @var $this PromoteController */
/* @var $model Promote */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'promote-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
 <?php
            $this->widget('application.extensions.ckeditor.CKEditor', array(
                "model" => $model,
                'attribute' => 'content',
                'editorTemplate' => 'full'));
            ?>		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo' : 'Lưu'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->