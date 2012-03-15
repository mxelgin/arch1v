<?php
$this->breadcrumbs=array(
	'Contact Codes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ContactCode', 'url'=>array('index')),
	array('label'=>'Create ContactCode', 'url'=>array('create')),
	array('label'=>'Update ContactCode', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ContactCode', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ContactCode', 'url'=>array('admin')),
);
?>

<h1>View ContactCode #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
