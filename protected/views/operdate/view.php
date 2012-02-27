<?php
$this->breadcrumbs=array(
	'Operdates'=>array('index'),
	$model->operdate,
);

$this->menu=array(
	array('label'=>'List Operdate', 'url'=>array('index')),
	array('label'=>'Create Operdate', 'url'=>array('create')),
	array('label'=>'Update Operdate', 'url'=>array('update', 'id'=>$model->operdate)),
	array('label'=>'Delete Operdate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->operdate),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Operdate', 'url'=>array('admin')),
);
?>

<h1>View Operdate #<?php echo $model->operdate; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'operdate',
	),
)); ?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'operdate-form',
	'enableAjaxValidation'=>false,
)); ?>
<?php
echo $form->dropDownList($model,'operdate',CHtml::listData($listData2, 'operdate', 'operdate'));
?>
<?php $this->endWidget(); ?>