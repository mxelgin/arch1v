<?php

/**
 * This is the model class for table "tbl_weeknum".
 *
 * The followings are the available columns in table 'tbl_weeknum':
 * @property integer $id
 * @property integer $weeknum
 * @property string $year
 * @property string $openweekdate
 * @property string $closeweekdate
 * @property integer $userid
 *
 * The followings are the available model relations:
 * @property Users $user
 * @property Operdate $openweekdate0
 * @property Operdate $closeweekdate0
 */
class Weeknum extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Weeknum the static model class
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
		return 'tbl_weeknum';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('weeknum, year, openweekdate, closeweekdate, userid', 'required'),
			array('weeknum, userid', 'numerical', 'integerOnly'=>true),
			array('year', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, weeknum, year, openweekdate, closeweekdate, userid', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'Users', 'userid'),
			'openweekdate0' => array(self::BELONGS_TO, 'Operdate', 'openweekdate'),
			'closeweekdate0' => array(self::BELONGS_TO, 'Operdate', 'closeweekdate'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'weeknum' => 'Номер недели',
			'year' => 'Год',
			'openweekdate' => 'Дата открытия недели',
			'closeweekdate' => 'Дата закрытия недели',
			'userid' => 'Менеджер недели',
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
		$criteria->compare('weeknum',$this->weeknum);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('openweekdate',$this->openweekdate,true);
		$criteria->compare('closeweekdate',$this->closeweekdate,true);
		$criteria->compare('userid',$this->userid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}