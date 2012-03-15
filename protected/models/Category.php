<?php

/**
 * This is the model class for table "category".
 *
 * The followings are the available columns in table 'category':
 * @property string $id
 * @property string $lft
 * @property string $rgt
 * @property integer $level
 */
class Category extends CActiveRecord
{
	public $parentId;
	public $tree;
	
	public function init()
	{
//		$model = Category::model()->findByPk(3);
		$this->tree = $this;
	}
	
	public function behaviors()
	{
   		return array(
	        'nestedSetBehavior'=>array(
	            'class'=>'ext.yiiext.behaviors.model.trees.NestedSetBehavior',
	            'leftAttribute'=>'lft',
	            'rightAttribute'=>'rgt',
	            'levelAttribute'=>'level',
	        	'hasManyRoots'=>'true',	
	        ),
	    );
	}
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Category the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
//			array('level', 'numerical', 'integerOnly'=>true),
//			array('lft, rgt', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
//			array('id, lft, rgt, level', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'lft' => 'Lft',
			'rgt' => 'Rgt',
			'level' => 'Level',
			'name' => 'Name',	
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
//		$criteria->condition='root=14';

		
// 		$criteria->compare('id',$this->id,true);
// 		$criteria->compare('lft',$this->lft,true);
// 		$criteria->compare('rgt',$this->rgt,true);
// 		$criteria->compare('level',$this->level);

		$criteria->order = $this->tree->hasManyRoots
		?$this->tree->rootAttribute . ', ' . $this->tree->leftAttribute
		:$this->tree->leftAttribute;
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}