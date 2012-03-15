<?php
$this->breadcrumbs=array(
	'Contacts',
);

$this->menu=array(
	array('label'=>'Create Contact', 'url'=>array('create')),
	array('label'=>'Contact Code', 'url'=>array('contactCode/index')),
);
?>
<h1>Contacts</h1>
<br/>

<?php
$css = '
    #my-menu ul{list-style-type:none;}
    #my-menu li {float:left;display:block;margin-right:20px;}
    #my-menu li.active a{color:#f00}
    ';
Yii::app()->clientScript->registerCss('css-place-1',$css);
?>
<?php

$this->widget('zii.widgets.CMenu', array(
        'id'=>'my-menu',
        'items'=>$menu1,
));

$this->widget('zii.widgets.CMenu', array(
		'id'=>'my-menu',
		'items'=>$menu2,
));

?>

<?php 
$this->widget('ext.QTreeGridView.CQTreeGridView', array(
	'id'=>'category-grid',
	'ajaxUpdate' => false,
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
				'name',
// 				'id',
// 				'lft',
// 				'rgt',
// 				'level',
// 				'root',
// 				'codeId',
				'phone',

			array(
			'class'=>'CButtonColumn',
		),
	),
));
?>

