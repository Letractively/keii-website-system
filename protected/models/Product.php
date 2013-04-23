<?php

/**
 * This is the model class for table "tbl_product".
 *
 * The followings are the available columns in table 'tbl_product':
 * @property integer $id
 * @property string $product_name
 * @property string $product_alias
 * @property string $page_language
 * @property string $page_summary
 * @property string $product_page_content
 * @property string $product_introduction
 * @property string $product_parameter
 * @property string $product_gallery
 * @property string $product_series
 */
class Product extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
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
		return 'tbl_product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_name, product_alias, page_language, page_summary, product_page_content, product_introduction, product_parameter, product_gallery, product_series', 'required'),
			array('product_name, product_alias, page_language, product_series', 'length', 'max'=>128),
			array('page_summary', 'length', 'max'=>512),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, product_name, product_alias, page_language, page_summary, product_page_content, product_introduction, product_parameter, product_gallery, product_series', 'safe', 'on'=>'search'),
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
			'product_name' => 'Product Name',
			'product_alias' => 'Product Alias',
			'page_language' => 'Page Language',
			'page_summary' => 'Page Summary',
			'product_page_content' => 'Product Page Content',
			'product_introduction' => 'Product Introduction',
			'product_parameter' => 'Product Parameter',
			'product_gallery' => 'Product Gallery',
			'product_series' => 'Product Series',
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
		$criteria->compare('product_name',$this->product_name,true);
		$criteria->compare('product_alias',$this->product_alias,true);
		$criteria->compare('page_language',$this->page_language,true);
		$criteria->compare('page_summary',$this->page_summary,true);
		$criteria->compare('product_page_content',$this->product_page_content,true);
		$criteria->compare('product_introduction',$this->product_introduction,true);
		$criteria->compare('product_parameter',$this->product_parameter,true);
		$criteria->compare('product_gallery',$this->product_gallery,true);
		$criteria->compare('product_series',$this->product_series,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}