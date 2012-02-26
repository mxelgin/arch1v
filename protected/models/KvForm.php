<?php
class KvForm extends CFormModel
{
	public $week;
	public $operation1;
	public $operation2;
	public $operation3;
	public $operation4;
	public $operation5;
	public $operation6;
	public $operation7;
	
	public static function model($className=__CLASS__)
	{
		return new KvForm();
	}

	public function rules()
	{
		return array(
		);
	}
	
	private function setWeekNum($id)
	{
		$model = Weeknum::model()->findByPk($id);
		$this -> week = $model;
	}
	
	private function setOperation($weeknum)
	{
		for ($i = $weeknum->openweekdate; $i <= $weeknum->closeweekdate; $i++)
		{
			$oper = Operation::model()->findByAttributes(array('id'=>$i));
			$numday = date("N", strtotime($i));
			switch ($numday)
			{
				case 1:  $this -> operation1 = $oper;break;
				case 2:  $this -> operation2 = $oper;break;
				case 3:  $this -> operation3 = $oper;break;
				case 4:  $this -> operation4 = $oper;break;
				case 5:  $this -> operation5 = $oper;break;
				case 6:  $this -> operation6 = $oper;break;
				case 7:  $this -> operation7 = $oper;break;
			}
		}
	}
	
	public function findbyWeeknum($id)
	{
		$this -> setWeekNum($id);
		$this -> setOperation($this -> week);
		return $this;
	}
	public function getBeginWeek()
	{
		return $this-> week -> openweekdate;
	}
	
	public function getEndWeek()
	{
		return $this-> week -> openweekdate;
	}
}

