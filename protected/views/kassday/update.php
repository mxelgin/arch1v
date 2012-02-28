<?php
$this->breadcrumbs=array(
	'Kassdays'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kassday', 'url'=>array('index')),
	array('label'=>'Create Kassday', 'url'=>array('create')),
	array('label'=>'View Kassday', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kassday', 'url'=>array('admin')),
);
?>

<h1>Update Kassday <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>