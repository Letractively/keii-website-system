<?php

/**
 * This is the model class for table "keii_product".
 *
 * The followings are the available columns in table 'keii_product':
 * @property integer $id
 * @property string $product_name
 * @property string $product_parameter
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
		return 'keii_product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_name, product_parameter', 'required'),
			array('product_name', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, product_name, product_parameter', 'safe', 'on'=>'search'),
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
			'product_parameter' => 'Product Parameter',
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
		$criteria->compare('product_parameter',$this->product_parameter,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	public function getProductList($style)
	{
		if ($style == 1) {
			$menu = $this->widget('zii.widgets.CMenu',array(
					'id'=>'',
					'htmlOptions'=>array('class'=>'unordered-list'),
					'items'=>array(
							array('label'=>Yii::t('zii', 'kc100'), 'url'=>array('/product/kc100')),
							array('label'=>Yii::t('zii', 'kc500'), 'url'=>array('/product/kc500')),
							array('label'=>Yii::t('zii', 'kc700'), 'url'=>array('/product/kc700')),
							array('label'=>Yii::t('zii', 'kc750'), 'url'=>array('/product/kc750'), 'visible'=>strstr(Yii::app()->language, 'en')),
							array('label'=>Yii::t('zii', 'kc800'), 'url'=>array('/product/kc800')),
							array('label'=>Yii::t('zii', 'kc850'), 'url'=>array('/product/kc850')),
							array('label'=>Yii::t('zii', 'gl600'), 'url'=>array('/product/gl600')),
							array('label'=>Yii::t('zii', 'carmobile'), 'url'=>array('/product/carmobile')),
							array('label'=>Yii::t('zii', 'substation'), 'url'=>array('/product/substation')),
							array('label'=>Yii::t('zii', 'helicopter'), 'url'=>array('/product/helicopter'))
					),
			));
		}
		elseif ($style == 2) {
		$menu = $this->widget('zii.widgets.CMenu',array(
				'id'=>'',
				'htmlOptions'=>array('class'=>'list cat'),
				'items'=>array(
						array('label'=>Yii::t('zii', 'kc100'), 'url'=>array('/product/kc100')),
						array('label'=>Yii::t('zii', 'kc500'), 'url'=>array('/product/kc500')),
						array('label'=>Yii::t('zii', 'kc700'), 'url'=>array('/product/kc700')),
						array('label'=>Yii::t('zii', 'kc750'), 'url'=>array('/product/kc750'), 'visible'=>strstr(Yii::app()->language, 'en')),
						array('label'=>Yii::t('zii', 'kc800'), 'url'=>array('/product/kc800')),
						array('label'=>Yii::t('zii', 'kc850'), 'url'=>array('/product/kc850')),
						array('label'=>Yii::t('zii', 'gl600'), 'url'=>array('/product/gl600')),
						array('label'=>Yii::t('zii', 'carmobile'), 'url'=>array('/product/carmobile')),
						array('label'=>Yii::t('zii', 'substation'), 'url'=>array('/product/substation')),
						array('label'=>Yii::t('zii', 'helicopter'), 'url'=>array('/product/helicopter'))
				),
		));
		}
		else
			continue;
	
		return $menu;
	}
}