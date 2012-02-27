<?php
$this->breadcrumbs=array(
	'Operdates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Operdate', 'url'=>array('index')),
	array('label'=>'Manage Operdate', 'url'=>array('admin')),
);
?>

<h1>Create Operdate</h1>

<?php 
$listData2 = array('1'=>array('operdate'=>'2,3'),'2'=>array('operdate'=>'233'),'3'=>array('operdate'=>'4,3'));
echo $this->renderPartial('_form', array('model'=>$model, 'listData2'=>$listData2)); ?>