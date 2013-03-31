<?php

class ServiceController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionInspection()
	{
		$this->render('inspection');
	}
	
	public function actionPresales()
	{
		$this->render('presales');
	}
	
	public function actionTraining()
	{
		$this->render('training');
	}
	
	public function actionAftersales()
	{
		$this->render('aftersales');
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
}