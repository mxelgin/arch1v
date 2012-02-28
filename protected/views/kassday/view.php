<?php
$this->breadcrumbs=array(
	'Kassdays'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kassday', 'url'=>array('index')),
	array('label'=>'Create Kassday', 'url'=>array('create')),
	array('label'=>'Update Kassday', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kassday', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kassday', 'url'=>array('admin')),
);
?>

<h1>View Kassday #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'operdate',
		'userid',
		'debit',
		'credit',
		'balance',
		'mgr1id',
		'mgr2id',
	),
)); ?>
