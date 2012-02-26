<?php
$this->breadcrumbs=array(
	'Weeknums'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Weeknum', 'url'=>array('index')),
	array('label'=>'Manage Weeknum', 'url'=>array('admin')),
);
?>

<h1>Create Weeknum</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>