<?php
$this->breadcrumbs=array(
	'Contact Codes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ContactCode', 'url'=>array('index')),
	array('label'=>'Manage ContactCode', 'url'=>array('admin')),
);
?>

<h1>Create ContactCode</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>