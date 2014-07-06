<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $id
 * @property string $productCode
 * @property string $madeOf
 * @property string $size
 * @property integer $price
 * @property integer $status
 * @property integer $gender
 * @property string $type
 * @property string $date
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
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('productCode, status, gender, type', 'required'),
			array('price, gender', 'numerical', 'integerOnly'=>true),
			array('productCode', 'length', 'max'=>255),
			array('madeOf', 'length', 'max'=>255),
			array('size', 'length', 'max'=>255),
			array('type', 'length', 'max'=>255),
                        array('status', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, productCode, madeOf, size, price, status, gender, type, date', 'safe', 'on'=>'search'),
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
                    'images' => array(self::HAS_MANY, 'image', 'productID'),
                    
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'productCode' => 'Mã Sản Phẩm',
			'madeOf' => 'Chất',
			'size' => 'Kích cỡ',
			'price' => 'Giá Tiền',
			'status' => 'Hàng',
			'gender' => 'Giới Tính',
			'type' => 'Kiểu',
			'date' => 'Ngày tạo',
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
		$criteria->compare('productCode',$this->productCode,true);
		$criteria->compare('madeOf',$this->madeOf,true);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('status',$this->status);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('date',$this->date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
       
        
}