<?php
$this->breadcrumbs=array(
	'Weeknums',
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
