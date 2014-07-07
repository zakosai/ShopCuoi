<?php
/* @var $this InfopageController */
/* @var $model Infopage */
/* @var $form CActiveForm */
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/extensions/tinymce/js/tinymce/tinymce.min.js');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'infopage-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,$col); ?>
				<?php 
//                                $this->widget('application.extensions.ckeditor.CKEditor', array( 
//                     "model" => $model,
//                    'attribute'=>$col,
//
//                    'editorTemplate'=>'full'));
                                		//echo $form->textField($model,$col);
?>
<?php $this->widget('application.extensions.tinymce.ETinyMce', array('name'=>'html')); ?>
		<?php echo $form->error($model,$col); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
 


<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste moxiemanager"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>