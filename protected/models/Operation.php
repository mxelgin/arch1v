<?php

/**
 * This is the model class for table "vw_operation".
 *
 * The followings are the available columns in table 'vw_operation':
 * @property string $id
 * @property string $operdate
 * @property integer $mgr1id
 * @property integer $mgr2id
 * @property integer $userid
 * @property integer $prixod
 * @property integer $vozvrat
 * @property string $itog
 * @property integer $endostatok
 * @property string $rashod
 * @property string $drugoeprixod
 * @property integer $beginostatok
 * @property string $rachet
 */
class Operation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Operation the static model class
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
		return 'vw_operation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, operdate', 'required'),
			array('mgr1id, mgr2id, userid, prixod, vozvrat, endostatok, beginostatok', 'numerical', 'integerOnly'=>true),
			array('itog', 'length', 'max'=>12),
			array('rashod, drugoeprixod', 'length', 'max'=>32),
			array('rachet', 'length', 'max'=>34),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, operdate, mgr1id, mgr2id, userid, prixod, vozvrat, itog, endostatok, rashod, drugoeprixod, beginostatok, rachet', 'safe', 'on'=>'search'),
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
			'operdate' => 'Operdate',
			'mgr1id' => 'Mgr1id',
			'mgr2id' => 'Mgr2id',
			'userid' => 'Userid',
			'prixod' => 'Prixod',
			'vozvrat' => 'Vozvrat',
			'itog' => 'Itog',
			'endostatok' => 'Endostatok',
			'rashod' => 'Rashod',
			'drugoeprixod' => 'Drugoeprixod',
			'beginostatok' => 'Beginostatok',
			'rachet' => 'Rachet',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('operdate',$this->operdate,true);
		$criteria->compare('mgr1id',$this->mgr1id);
		$criteria->compare('mgr2id',$this->mgr2id);
		$criteria->compare('userid',$this->userid);
		$criteria->compare('prixod',$this->prixod);
		$criteria->compare('vozvrat',$this->vozvrat);
		$criteria->compare('itog',$this->itog,true);
		$criteria->compare('endostatok',$this->endostatok);
		$criteria->compare('rashod',$this->rashod,true);
		$criteria->compare('drugoeprixod',$this->drugoeprixod,true);
		$criteria->compare('beginostatok',$this->beginostatok);
		$criteria->compare('rachet',$this->rachet,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}