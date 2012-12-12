<?php

/**
 * This is the model class for table "keii_article".
 *
 * The followings are the available columns in table 'keii_article':
 * @property integer $id
 * @property integer $author_id
 * @property integer $category_id
 * @property string $create_time
 * @property string $modify_time
 * @property string $article_title
 * @property string $article_description
 * @property string $article_content
 */
class Article extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Article the static model class
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
		return 'keii_article';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('author_id, create_time, article_title, article_description, article_content', 'required'),
			array('author_id, category_id', 'numerical', 'integerOnly'=>true),
			array('article_title', 'length', 'max'=>50),
			array('article_description', 'length', 'max'=>200),
			array('modify_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, author_id, category_id, create_time, modify_time, article_title, article_description, article_content', 'safe', 'on'=>'search'),
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
			'author_id' => 'Author',
			'category_id' => 'Category',
			'create_time' => 'Create Time',
			'modify_time' => 'Modify Time',
			'article_title' => 'Article Title',
			'article_description' => 'Article Description',
			'article_content' => 'Article Content',
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
		$criteria->compare('author_id',$this->author_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('modify_time',$this->modify_time,true);
		$criteria->compare('article_title',$this->article_title,true);
		$criteria->compare('article_description',$this->article_description,true);
		$criteria->compare('article_content',$this->article_content,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}