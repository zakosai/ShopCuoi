<?php
/* @var $this InfopageController */
/* @var $model Infopage */

?>

<h1>Update Infopage <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'col'=>$col)); ?>