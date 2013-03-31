<?php

class ApplicationController extends Controller
{
	public $example_no = null;
	public $example_name = null;
	
	public function actionIndex()
	{
		if(isset($_GET['example'])) {
				
				$example = $_GET['example'];
				$this->example_no = $example ;
				
				switch ($example) {
					case 1:
						$this->example_name = Yii::t('zii', 'application_gallery.building_diagnostics');
						$this->render('example1');
						break;
					case 2:
						$this->example_name = Yii::t('zii', 'application_gallery.cement&glass');
						$this->render('example2');
						break;
					case 3:
						$this->example_name = Yii::t('zii', 'application_gallery.metallurgy&steel');
						$this->render('example3');
						break;
					case 4:
						$this->example_name = Yii::t('zii', 'application_gallery.petrochemical');
						$this->render('example4');
						break;
					case 5:
						$this->example_name = Yii::t('zii', 'application_gallery.predictive_maintenance');
						$this->render('example5');
						break;
					case 6:
						$this->example_name = Yii::t('zii', 'application_gallery.pulp&paper');
						$this->render('example6');
						break;
					case 7:
						$this->example_name = Yii::t('zii', 'application_gallery.R&D');
						$this->render('example7');
						break;
					case 8:
						$this->example_name = Yii::t('zii', 'application_gallery.automation');
						$this->render('example8');
						break;
					case 9:
						$this->example_name = Yii::t('zii', 'application_gallery.electrical');
						$this->render('example9');
						break;
					case 10:
						$this->example_name = Yii::t('zii', 'application_gallery.gas_leak_checking');						
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