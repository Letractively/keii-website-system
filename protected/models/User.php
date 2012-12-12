<?php

/**
 * This is the model class for table "keii_user".
 *
 * The followings are the available columns in table 'keii_user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $corporation
 * @property string $contact_address
 */
class User extends CActiveRecord
{
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
		return 'keii_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password,email, corporation, contact_address', 'required'),
			array('username, password,email, corporation', 'length', 'max'=>128),
			array('contact_address', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password,email, corporation, contact_address', 'safe', 'on'=>'search'),
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
			'username' => Yii::t('zii','Username'),
			'password' => Yii::t('zii','Password'),
			'email' => 'Email',
			'corporation' => Yii::t('zii','Corporation'),
			'contact_address' => Yii::t('zii','Contact Address'),
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
		$criteria->compare('contact_address',$this->contact_address,true);

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
