<?php
$this->breadcrumbs=array(
	'Contact Codes',
);

$this->menu=array(
	array('label'=>'Create ContactCode', 'url'=>array('create')),
	array('label'=>'Manage ContactCode', 'url'=>array('admin')),
);
?>

<h1>Contact Codes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
