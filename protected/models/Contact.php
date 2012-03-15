<?php

/**
 * This is the model class for table "tbl_contact".
 *
 * The followings are the available columns in table 'tbl_contact':
 * @property integer $id
 * @property string $name
 * @property string $short_name
 * @property string $phone
 * @property integer $codeId
 * @property integer $parentId
 */
class Contact extends CActiveRecord
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
	 * @return Contact the static model class
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
		return 'tbl_contact';
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
			array('codeId', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>64),
			array('short_name', 'length', 'max'=>32),
			array('parentId', 'numerical', 'integerOnly'=>true),	
			array('phone', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			//array('id, name, short_name, phone, code_name', 'safe', 'on'=>'search'),
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
			'fk_id' => 'Fk',
			'name' => 'Name',
			'short_name' => 'Short Name',
			'phone' => 'Phone',
			'code_name' => 'Code Name',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		
//		echo $_GET['Contact']['id'];
//		echo $this->name.'dfvdv';
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.
		$criteria=new CDbCriteria;
		
//		$params = Contact::model()->findAll('length(code_name)<>0');
		if (isset($_GET['id']))
			$params = Contact::model()->findAllByAttributes(array('codeId'=>$_GET['id']));
		if (isset($params))
			foreach ($params as $param){
	 			$criteria->addCondition('root='.$param->root.' and (
	 									(lft<='.$param->lft.' and rgt>='.$param->rgt.') or 
	 									(lft>='.$param->lft.' and rgt<='.$param->rgt.')
	 									)',
	 									'OR');
			}

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('short_name',$this->short_name,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('codeId',$this->codeId,true);

		$criteria->order = $this->tree->hasManyRoots
		?$this->tree->rootAttribute . ', ' . $this->tree->leftAttribute
		:$this->tree->leftAttribute;
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
						'pageSize'=>50,
				),
				
		));
	}
}