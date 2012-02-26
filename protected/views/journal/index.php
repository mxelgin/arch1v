<?php
$this->breadcrumbs=array(
	Yii::t('core','Journal'),
);?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>

<?php
	$this->widget('zii.widgets.CMenu',array(
		'items'=>array(
				array('label'=>'weeknum', 'url'=>array('/weeknum/index')),
				array('label'=>'mgrday', 'url'=>array('/mgrday/index')),
				array('label'=>'kassday', 'url'=>array('/kassday/index')),
				array('label'=>'operdate', 'url'=>array('/operdate/index')),
//				array('label'=>'operation', 'url'=>array('/operation/index')),
				array('label'=>'Кассовая Ведомость', 'url'=>array('/kv/index')),
		),
	)); 

?>