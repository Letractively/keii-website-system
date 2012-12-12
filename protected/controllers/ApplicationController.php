<?php

class ApplicationController extends Controller
{
	public function actionIndex()
	{
		
		
		
		if(isset($_GET['example'])) {
				
				$example = $_GET['example'];
				
				switch ($example) {
					case 1:	
						$this->render('example1');
						break;
					case 2: 
						$this->render('example2');
						break;
					case 3:
						$this->render('example3');
						break;
					case 4:
						$this->render('example4');
						break;
					case 5:
						$this->render('example5');
						break;
					case 6:
						$this->render('example6');
						break;
					case 7:
						$this->render('example7');
						break;
					case 8:
						$this->render('example8');
						break;
					case 9:
						$this->render('example9');
						break;
					case 10:
						$this->render('example10');
						break;
					default:
						throw new CHttpException(404,'The requested page does not exist.');
						break;
				}
		}
		else
		{
			$this->render('index');
			//throw new CHttpException(404,'The requested page does not exist.');
		}
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