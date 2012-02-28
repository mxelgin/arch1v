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
		$closeday = strtotime($weeknum->closeweekdate);
		$openday = strtotime($weeknum->openweekdate);
		$sec = $closeday - $openday;
		$days_diff = $sec / (60*60*24);// необходимо удалить дроби
		
//		for ($i = $weeknum->openweekdate; $i <= $weeknum->closeweekdate; $i++)
		for ($i = 0; $i <= $days_diff; $i++)
		{
			//day of week
			$date = new DateTime($weeknum->openweekdate);
			$date->modify('+'.$i.'day');
			$nextday = $date->format('Y-m-d');
			
			$oper = Operation::model()->findByAttributes(array('id'=>$nextday));
			
			$this->arr[$nextday]=$oper;
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
		return $this->sumItog()+$this->sumDrugoePrihod()+$this->getDay($this->week->openweekdate)->beginostatok;
	}	
	public function sumBalanceRashod()
	{
		return $this->sumRashod()+$this->sumDrugoeRashod()+$this->getDay($this->week->openweekdate)->endostatok;
	}
	public function sumBalanceOstatok()
	{
		return $this->sumBalancePrihod()-$this->sumBalanceRashod();
	}
	
}

