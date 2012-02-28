<?php
$this->breadcrumbs=array(
	'Kassdays',
);

$this->menu=array(
	array('label'=>'Create Kassday', 'url'=>array('create')),
	array('label'=>'Manage Kassday', 'url'=>array('admin')),
);
?>

<h1>Kassdays</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
