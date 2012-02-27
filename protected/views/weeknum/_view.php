<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weeknum')); ?>:</b>
	<?php echo CHtml::encode($data->weeknum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
	<?php echo CHtml::encode($data->year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('openweekdate')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->format('dd-MM-yyyy',$data->openweekdate)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('closeweekdate')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->format('dd-MM-yyyy',$data->closeweekdate)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userid')); ?>:</b>
	<?php //echo CHtml::encode(User::model()->findByPk($data->userid)->username); ?>
	<?php echo VUsers::model()->findByAttributes(array('id'=>$data->userid))->fullname; ?>
	<br />
</div>