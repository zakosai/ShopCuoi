<?php
/* @var $this InfopageController */
/* @var $model Infopage */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'infopage-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
        <p>Lưu ý Upload ảnh từ máy: Qua tab Upload để up ảnh. Sau đó chèn link dưới dạng http://ShopCuoi.com/images/ten_file.duoi_file</p>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">

           <?php echo $form->labelEx($model, $col); ?>

            <?php
            $this->widget('application.extensions.ckeditor.CKEditor', array(
                "model" => $model,
                'attribute' => $col,
                'editorTemplate' => 'full'));
            ?>

            <?php echo $form->error($model, $col); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
 


<?php $this->endWidget(); ?>

</div><!-- form -->
