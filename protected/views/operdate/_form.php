<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'operdate-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php 

echo $form->dropDownList($model,'operdate',CHtml::listData($listData2, 'operdate', 'operdate'));
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'operdate'); ?>
		<?php echo $form->textField($model,'operdate'); ?>
		<?php echo $form->error($model,'operdate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->