<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Category', 'url'=>array('index')),
	array('label'=>'Create Category', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('category-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Categories</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php 
 	$this->renderPartial('_search',array(
 	'model'=>$model,
 )); 
?>
</div><!-- search-form -->

<?php 

$this->widget('ext.QTreeGridView.CQTreeGridView', array(
	'id'=>'category-grid',
	'ajaxUpdate' => false,
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
				'name',
				'id',
				'lft',
				'rgt',
				'level',
				'root',
			array(
			'class'=>'CButtonColumn',
		),
	),
)); 

//  $root=Category::model()->findByPk(16);
//  $root->name='MMM';
//  $root->saveNode();

// $root=new Category;
// $root->name='Mobile Phones';
// $root->saveNode();
// $root=new Category;
// $root->name='Cars';
// $root->saveNode();

// $category1=new Category;
// $category1->name='Ford';
// $category2=new Category;
// $category2->name='Mercedes';
// $category3=new Category;
// $category3->name='Audi';
// $root=Category::model()->findByPk(13);
// $category1->appendTo($root);
// $category2->insertAfter($category1);
// $category3->insertBefore($category1);

// $category1=new Category;
// $category1->name='Samsung';
// $category2=new Category;
// $category2->name='Motorola';
// $category3=new Category;
// $category3->name='iPhone';
// $root=Category::model()->findByPk(14);
// $category1->appendTo($root);
// $category2->insertAfter($category1);
// $category3->prependTo($root);

// $category1=new Category;
// $category1->name='X100';
// $category2=new Category;
// $category2->name='C200';
// $node=Category::model()->findByPk(17);
// $category1->appendTo($node);
// $category2->prependTo($node);

// // сначала переместим модели телефонов на место
// $x100=Category::model()->findByPk(21);
// $c200=Category::model()->findByPk(22);
// $samsung=Category::model()->findByPk(18);
// $x100->moveAsFirst($samsung);
// $c200->moveBefore($x100);
// // теперь переместим всю ветку с телефонами Samsung
// $mobile_phones=Category::model()->findByPk(13);
// $samsung->moveAsFirst($mobile_phones);
// // переместим остальные модели телефонов
// $iphone=Category::model()->findByPk(20);
// $iphone->moveAsFirst($mobile_phones);
// $motorola=Category::model()->findByPk(19);
// $motorola->moveAfter($samsung);
// // переместим модели машин на место
//  $cars=Category::model()->findByPk(14);
// $audi=Category::model()->findByPk(17);
//  $ford=Category::model()->findByPk(15);
// $mercedes=Category::model()->findByPk(16);
 
// foreach(array($audi,$ford,$mercedes) as $category)
//     $category->moveAsLast($cars);
?>
