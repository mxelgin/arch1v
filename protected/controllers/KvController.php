<?php

class KvController extends Controller
{
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Weeknum');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
	public function actionView($id)
	{
		$this->render('view', array(
				'model'=>$this->loadModel($id)
		));
	}
	
	public function loadModel($id)
	{
		$model=KvForm::model()->findbyWeeknum($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
}