<?php

/**
 * This is the model class for table "infopage".
 *
 * The followings are the available columns in table 'infopage':
 * @property integer $id
 * @property string $home
 * @property string $album
 * @property string $shopping
 * @property string $map
 */
class Infopage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Infopage the static model class
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
		return 'infopage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('home, album, shopping, map', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, home, album, shopping, map', 'safe', 'on'=>'search'),
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
			'home' => 'Home',
			'album' => 'Album',
			'shopping' => 'Shopping',
			'map' => 'Map',
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
		$criteria->compare('home',$this->home,true);
		$criteria->compare('album',$this->album,true);
		$criteria->compare('shopping',$this->shopping,true);
		$criteria->compare('map',$this->map,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}