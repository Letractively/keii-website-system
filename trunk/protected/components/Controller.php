<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	public function init()
	{
		if(isset($_GET['lang']) && $_GET['lang'] != "")
		{
			$website_language = $_GET['lang'];
			Yii::app()->request->cookies['lang'] = new CHttpCookie('lang', $_GET['lang']);
		}
		else if(!empty(Yii::app()->request->cookies['lang']))
		{
			Yii::app()->language = Yii::app()->request->cookies['lang'];
		}
		else
		{
			$lang = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
			$website_language = strtolower(str_replace('-', '_', $lang[0]));
		}
		
		if (strstr($website_language, 'zh'))
			Yii::app()->language = 'zh_cn';
		else 
			Yii::app()->language = 'en';
	}
	
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
}