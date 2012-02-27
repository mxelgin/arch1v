<?php
class KvForm extends CFormModel
{
	public $week;
	public $arr;
	
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
			//day of week
			$numday = date("N", strtotime($i));
			$oper = Operation::model()->findByAttributes(array('id'=>$i));
			
			$this->arr[$numday]=$oper;
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
		return  date("d.m.Y", strtotime($this-> week -> openweekdate));
	}
	
	public function getEndWeek()
	{
		return  date("d.m.Y", strtotime($this-> week -> closeweekdate));
	}
	
	public function getDay($id)
	{
		return $this->arr[$id];
	}
	
	public function sumItog()
	{
		$sum = 0;
		foreach ($this->arr as $key => $value)	
		{
			$sum = $value->itog + $sum ;
		}		
		return $sum;
	}
	
	public function sumDrugoePrihod()
	{
		$sum = 0;
		foreach ($this->arr as $key => $value)
		{
			$sum = $value->drugoeprixod + $sum ;
		}
		return $sum;
	}	

	public function sumRashod()
	{
		$sum = 0;
		foreach ($this->arr as $key => $value)
		{
			$sum = $value->rashod + $sum ;
		}
		return $sum;
	}
	
	public function sumDrugoeRashod()
	{
		$sum = 0;
// 		foreach ($this->arr as $key => $value)
// 		{
// 			$sum = $value->rashod + $sum ;
// 		}
		return $sum;
	}	
	public function sumBalancePrihod()
	{
		return $this->sumItog()+$this->sumDrugoePrihod()+$this->arr[1]->beginostatok;
	}	
	public function sumBalanceRashod()
	{
		return $this->sumRashod()+$this->sumDrugoeRashod()+$this->arr[7]->endostatok;
	}
	public function sumBalanceOstatok()
	{
		return $this->sumBalancePrihod()-$this->sumBalanceRashod();
	}
	
}

