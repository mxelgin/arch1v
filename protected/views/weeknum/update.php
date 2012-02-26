<?php
$this->breadcrumbs=array(
	'Weeknums'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Weeknum', 'url'=>array('index')),
	array('label'=>'Create Weeknum', 'url'=>array('create')),
	array('label'=>'View Weeknum', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Weeknum', 'url'=>array('admin')),
);
?>

<h1>Update Weeknum <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>