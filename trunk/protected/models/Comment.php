<?php

/**
 * This is the model class for table "keii_comment".
 *
 * The followings are the available columns in table 'keii_comment':
 * @property integer $id
 * @property integer $author_id
 * @property string $create_time
 * @property string $comment_content
 */
class Comment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comment the static model class
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
		return 'keii_comment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('author_id, create_time, comment_content', 'required'),
			array('author_id', 'numerical', 'integerOnly'=>true),
			array('comment_content', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, author_id, create_time, comment_content', 'safe', 'on'=>'search'),
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
			'create_time' => 'Create Time',
			'comment_content' => 'Comment Content',
		);
	}

	public function getUrl()
	{
		return Yii::app()->createUrl('comment/view', array(
				'id'=>$this->id,
		));
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
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('comment_content',$this->comment_content,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}