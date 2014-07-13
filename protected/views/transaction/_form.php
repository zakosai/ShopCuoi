<?php
/* @var $this TransactionController */
/* @var $model Transaction */
/* @var $form CActiveForm */
$baseLink = Yii::app()->baseUrl."/images/Products";
$str = "";
foreach ($data as $m){
    $str = $str.",".$m->id;
}
?>

<div class="cusInfo">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaction-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Các ô có dấu <span class="required">*</span> bắt buộc phải điền.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="rowform">
		<?php echo $form->labelEx($model,'cusName'); ?>
		<?php echo $form->textField($model,'cusName',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'cusName'); ?>
	</div>

	<div class="rowform">
		<?php echo $form->labelEx($model,'cusMobile'); ?>
		<?php echo $form->textField($model,'cusMobile'); ?>
		<?php echo $form->error($model,'cusMobile'); ?>
	</div>

	<div class="rowform">
		<?php echo $form->labelEx($model,'cusEmail'); ?>
		<?php echo $form->textField($model,'cusEmail',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'cusEmail'); ?>
	</div>
        <input type="hidden" name="Transaction[productStr]" id="Transaction_productStr" value="<?php echo $str?>">
	<div class="row buttons">
		<?php echo CHtml::submitButton('Đặt Hàng'); ?>
	</div>
</div>
<div class="sp">
    <table class="items table table-bordered">
        <thead>
            <tr>
                <th id="yw29_c0">#Mã sản phẩm</th>
                <th id="yw29_c1">Ảnh</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $m) {
                $img = $m->images;
                if($img[0]->link =="") 
                    $img[0]->link = "defaults.jpg";
                ?>
            <tr>
            <td style="width: 150px"><?php echo $m->productCode ?></td>
            <td style="width: 150px"><?php echo CHtml::image($baseLink . "/" . $img[0]->link, 'Ảnh sản phẩn', array('width' => 50, 'height' => 20, 'border' => '1px solid gray')) ?></td>
            </tr>
             <?php }?>
        </tbody>
    </table>
</div>


<?php $this->endWidget(); ?>

<!-- form -->