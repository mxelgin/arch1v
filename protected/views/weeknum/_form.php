<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'weeknum-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'weeknum'); ?>
		<?php echo $form->textField($model,'weeknum'); ?>
		<?php echo $form->error($model,'weeknum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'openweekdate'); ?>
		<?php echo $form->textField($model,'openweekdate'); ?>
		<?php echo $form->error($model,'openweekdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'closeweekdate'); ?>
		<?php echo $form->textField($model,'closeweekdate'); ?>
		<?php echo $form->error($model,'closeweekdate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->