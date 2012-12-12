<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function actionResponsibility()
	{
		$this->render('responsibility');
	}
	
	public function actionJob()
	{
		$this->render('job');
	}
	
	public function actionHistory()
	{
		$this->render('history');
	}
	
	public function actionField()
	{
		$this->render('field');
	}
	
	public function actionChoose()
	{
		$this->render('choose');
	}
	
	public function actionInfraredcamera()
	{
		$this->render('infraredcamera');
	}
	
	public function actionDInfraredcamera()
	{
		$this->render('dinfraredcamera');
	}
	
	public function  actionPrinciple()
	{
		
		if(isset($_GET['page'])) {
		
			$page = $_GET['page'];
		
			switch ($page) {
				case 1:
					$this->render('Principle/page1');
					break;
				case 2:
					$this->render('Principle/page2');
					break;
				case 3:
					$this->render('Principle/page3');
					break;
				case 4:
					$this->render('Principle/page4');
					break;
				case 5:
					$this->render('Principle/page5');
					break;
				default:
					throw new CHttpException(404,'The requested page does not exist.');
					break;
			}
		}
		else
		{
			$this->render('Principle/page1');
			//throw new CHttpException(404,'The requested page does not exist.');
		}
		
	}
	
	public function  actionParameter()
	{
	
		if(isset($_GET['page'])) {
	
			$page = $_GET['page'];
	
			switch ($page) {
				case 1:
					$this->render('Parameter/page1');
					break;
				case 2:
					$this->render('Parameter/page2');
					break;
				case 3:
					$this->render('Parameter/page3');
					break;
				default:
					throw new CHttpException(404,'The requested page does not exist.');
					break;
			}
		}
		else
		{
			$this->render('Parameter/page1');
			//throw new CHttpException(404,'The requested page does not exist.');
		}
	}
	
	public function  actionTerms()
	{
	
		if(isset($_GET['page'])) {
	
			$page = $_GET['page'];
	
			switch ($page) {
				case 1:
					$this->render('Terms/page1');
					break;
				case 2:
					$this->render('Terms/page2');
					break;
				case 3:
					$this->render('Terms/page3');
					break;
				default:
					throw new CHttpException(404,'The requested page does not exist.');
					break;
			}
		}
		else
		{
			$this->render('Terms/page1');
			//throw new CHttpException(404,'The requested page does not exist.');
		}
	}
}