<?php
$this->breadcrumbs=array(
	'Operdates',
);

$this->menu=array(
	array('label'=>'Create Operdate', 'url'=>array('create')),
	array('label'=>'Manage Operdate', 'url'=>array('admin')),
);
?>

<h1>Operdates</h1>



<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
