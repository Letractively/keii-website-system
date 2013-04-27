<?php

/**
 * This is the model class for table "TBL_USER".
 *
 * The followings are the available columns in table 'TBL_USER':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $corporation
 * @property string contact_name
 * @property string $contact_number
 * @property string $userjobtitle
 */
class User extends CActiveRecord
{
	
	public $password_repeat;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'TBL_USER';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username', 'unique','message' => Yii::t('zii', 'system.tip.username.unavailable' )),				
			array('username, password,password_repeat, email, corporation,contact_name, contact_number, userjobtitle', 'required'),
			#array('passwordConfirm', 'compare', 'compareAttribute' => 'password'),
			#array(‘username’, ‘email’, ‘message’=>’必须为电子邮箱’, ‘pattern’=>’/[a-z]/i’),
			array('email','email','message' => '必须为电子邮箱'),
			array('password', 'compare', 'compareAttribute'=>'password_repeat' ,'on'=>'insert,update'),
			array('username, password, email, corporation,contact_name,contact_number, userjobtitle','length', 'min'=>6, 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('contact_number, username, password, email, corporation, contact_name,userjobtitle', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => Yii::t('zii', 'user.name'),
			'password' =>Yii::t('zii', 'user.password'),
			'email' => Yii::t('zii', 'user.email'),
			'password_repeat' => Yii::t('zii', 'user.passwordRepeat'),
			'corporation' => Yii::t('zii', 'user.corporation'),
			'contact_name' => Yii::t('zii', 'user.contact_name'),				
			'contact_number' => Yii::t('zii', 'user.contact_number'),
			'userjobtitle' => Yii::t('zii', 'user.jobtitle'),	
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('corporation',$this->corporation,true);
		$criteria->compare('contact_name',$this->contact_name,true);		
		$criteria->compare('contact_number',$this->contact_number,true);
		$criteria->compare('userjobtitle',$this->userjobtitle,true);		
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	public function validatePassword($password){
		if($this->hashPassword($password)==$this->password)
			return TRUE;
		else
			return FALSE;
	}
	
	public function hashPassword($password){
		return md5($password);
	}
}