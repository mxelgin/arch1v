
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
	<?php echo CHtml::encode($data->openweekdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('closeweekdate')); ?>:</b>
	<?php echo CHtml::encode($data->closeweekdate); ?>
	<br />


</div>