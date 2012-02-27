<?php
$this->breadcrumbs=array(
	'Operdates'=>array('index'),
	$model->operdate=>array('view','id'=>$model->operdate),
	'Update',
);

$this->menu=array(
	array('label'=>'List Operdate', 'url'=>array('index')),
	array('label'=>'Create Operdate', 'url'=>array('create')),
	array('label'=>'View Operdate', 'url'=>array('view', 'id'=>$model->operdate)),
	array('label'=>'Manage Operdate', 'url'=>array('admin')),
);
?>

<h1>Update Operdate <?php echo $model->operdate; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>