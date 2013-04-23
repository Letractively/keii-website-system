<?php

/**
 * This is the model class for table "tbl_page".
 *
 * The followings are the available columns in table 'tbl_page':
 * @property integer $id
 * @property string $page_name
 * @property string $page_alias
 * @property string $page_language
 * @property string $page_content
 * @property string $page_category
 */
class Page extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_page';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('page_name, page_alias, page_language, page_content, page_category', 'required'),
			array('page_name, page_alias, page_language, page_category', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, page_name, page_alias, page_language, page_content, page_category', 'safe', 'on'=>'search'),
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
			'page_name' => 'Page Name',
			'page_alias' => 'Page Alias',
			'page_language' => 'Page Language',
			'page_content' => 'Page Content',
			'page_category' => 'Page Category',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('page_name',$this->page_name,true);
		$criteria->compare('page_alias',$this->page_alias,true);
		$criteria->compare('page_language',$this->page_language,true);
		$criteria->compare('page_content',$this->page_content,true);
		$criteria->compare('page_category',$this->page_category,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Page the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
