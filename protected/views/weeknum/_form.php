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
		<?php //echo $form->textField($model,'year',array('size'=>4,'maxlength'=>4)); ?>
		<?php 
			$list = array('0'=>array('year'=>''), '1'=>array('year'=>'2011'),'2'=>array('year'=>'2012'),'3'=>array('year'=>'2013'));
			echo $form->dropDownList($model,'year',CHtml::listData($list, 'year', 'year'),array('class'=>'year'));
		?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'openweekdate'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
			    'attribute'=>'openweekdate',
			    'options'=>array(
					'showAnim'=>'fold',
			    	'dateFormat'=>'yy-mm-dd',
				),
			    'htmlOptions'=>array(
//			    	'style'=>'width:100px',
				),
			 ));
		?>
		<?php echo $form->error($model,'openweekdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'closeweekdate'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'model'=>$model,
			    'attribute'=>'closeweekdate',
			    'options'=>array(
					'showAnim'=>'fold',
			    	'dateFormat'=>'yy-mm-dd',
			    ),
			    'htmlOptions'=>array(
//			    	'style'=>'width:100px',
				),
			 ));
		?>
		<?php echo $form->error($model,'closeweekdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userid'); ?>
		<?php 
			echo $form->dropDownList($model,'userid',CHtml::listData($listUser, 'id', 'fullname'),array('class'=>'year'));
		?>
		<?php //echo $form->textField($model,'userid'); ?>
		<?php echo $form->error($model,'userid'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
		
<?php $this->endWidget(); ?>


</div><!-- form -->