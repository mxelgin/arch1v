<?php
$this->breadcrumbs=array(
	'Kassdays'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kassday', 'url'=>array('index')),
	array('label'=>'Manage Kassday', 'url'=>array('admin')),
);
?>

<h1>Create Kassday</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>