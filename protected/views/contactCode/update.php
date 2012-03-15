<?php
$this->breadcrumbs=array(
	'Contact Codes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ContactCode', 'url'=>array('index')),
	array('label'=>'Create ContactCode', 'url'=>array('create')),
	array('label'=>'View ContactCode', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ContactCode', 'url'=>array('admin')),
);
?>

<h1>Update ContactCode <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>