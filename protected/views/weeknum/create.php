<?php
$this->breadcrumbs=array(
	Yii::t('core','Journal')=>array('journal/index'),
	Yii::t('core','Weeknum')=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Weeknum', 'url'=>array('index')),
	array('label'=>'Manage Weeknum', 'url'=>array('admin')),
);
?>

<h1>Create Weeknum</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'listUser'=>$listUser)); ?>