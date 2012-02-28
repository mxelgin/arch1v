<?php

/**
 * This is the model class for table "tbl_kassday".
 *
 * The followings are the available columns in table 'tbl_kassday':
 * @property integer $id
 * @property string $operdate
 * @property integer $userid
 * @property integer $debit
 * @property integer $credit
 * @property integer $balance
 * @property integer $mgr1id
 * @property integer $mgr2id
 */
class Kassday extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kassday the static model class
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
		return 'tbl_kassday';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('operdate, userid, debit, credit, balance, mgr1id, mgr2id', 'required'),
			array('userid, debit, credit, balance, mgr1id, mgr2id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, operdate, userid, debit, credit, balance, mgr1id, mgr2id', 'safe', 'on'=>'search'),
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
			'userid' => 'Userid',
			'debit' => 'Debit',
			'credit' => 'Credit',
			'balance' => 'Balance',
			'mgr1id' => 'Mgr1id',
			'mgr2id' => 'Mgr2id',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('operdate',$this->operdate,true);
		$criteria->compare('userid',$this->userid);
		$criteria->compare('debit',$this->debit);
		$criteria->compare('credit',$this->credit);
		$criteria->compare('balance',$this->balance);
		$criteria->compare('mgr1id',$this->mgr1id);
		$criteria->compare('mgr2id',$this->mgr2id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}