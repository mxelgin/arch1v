<?php
$this->breadcrumbs=array(
	Yii::t('core','Journal')=>array('journal/index'),
	Yii::t('core','Weeknum'),
);

$this->menu=array(
	array('label'=>'Create Weeknum', 'url'=>array('create')),
	array('label'=>'Manage Weeknum', 'url'=>array('admin')),
);
?>

<h1>Weeknums</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
