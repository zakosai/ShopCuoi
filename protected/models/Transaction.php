<?php

/**
 * This is the model class for table "transaction".
 *
 * The followings are the available columns in table 'transaction':
 * @property integer $id
 * @property string $cusName
 * @property integer $cusMobile
 * @property string $cusEmail
 * @property string $productStr
 * @property integer $status
 * @property string $date
 */
class Transaction extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Transaction the static model class
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
		return 'transaction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cusName, cusMobile', 'required'),
			array('cusMobile, status', 'numerical', 'integerOnly'=>true),
			array('cusName', 'length', 'max'=>30),
			array('cusEmail', 'length', 'max'=>200),
			array('productStr', 'length', 'max'=>400),
                        array('cusEmail', 'email'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cusName, cusMobile, cusEmail, productStr, status, date', 'safe', 'on'=>'search'),
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
			'cusName' => 'Tên',
			'cusMobile' => 'Số Điện Thoại',
			'cusEmail' => 'Email',
			'productStr' => 'Product Str',
			'status' => 'Status',
			'date' => 'Date',
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
		$criteria->compare('cusName',$this->cusName,true);
		$criteria->compare('cusMobile',$this->cusMobile);
		$criteria->compare('cusEmail',$this->cusEmail,true);
		$criteria->compare('productStr',$this->productStr,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('date',$this->date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        public function beforeSave() {
            if($this->isNewRecord){
                $this->productStr = $_COOKIE['productId'];
                $this->status = 0;
            }
                            parent::beforeSave();
                            return TRUE;
            
            
        }
}