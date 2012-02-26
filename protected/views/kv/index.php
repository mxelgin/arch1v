<?php
$this->breadcrumbs=array(
	Yii::t('core','Journal')=>array('journal/index'),
	Yii::t('core','Kv'),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


