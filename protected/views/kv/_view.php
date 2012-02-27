
<div class="view">

	<b>
	<?php 
		$k = Yii::t('core','Kv');
		$k = "{$k} №{$data->weeknum}";
		echo CHtml::link(CHtml::encode($k), array('view', 'id'=>$data->id)); ?></b>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
	<?php echo CHtml::encode($data->year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('openweekdate')); ?>:</b>
	<?php echo CHtml::encode($data->openweekdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('closeweekdate')); ?>:</b>
	<?php echo CHtml::encode($data->closeweekdate); ?>
	<br />


</div>