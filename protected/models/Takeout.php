<?php

/**
 * This is the model class for table "{{takeout}}".
 *
 * The followings are the available columns in table '{{takeout}}':
 * @property integer $id
 * @property string $restaurant
 * @property string $slogan
 * @property string $meal_time
 * @property integer $support
 * @property string $brief
 * @property string $remark
 * @property string $contact
 * @property string $ps
 * @property string $menu_7
 * @property string $menu_8
 * @property string $menu_9
 * @property string $menu_o
 * @property string $menu_scws
 * @property string $snack
 */
class Takeout extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Takeout the static model class
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
		return '{{takeout}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, support', 'numerical', 'integerOnly'=>true),
			array('restaurant', 'length', 'max'=>15),
			array('slogan', 'length', 'max'=>100),
			array('meal_time', 'length', 'max'=>45),
			array('brief, remark, contact, ps', 'length', 'max'=>254),
			array('menu_7, menu_8, menu_9, menu_o, menu_scws, snack', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, restaurant, slogan, meal_time, support, brief, remark, contact, ps, menu_7, menu_8, menu_9, menu_o, menu_scws, snack', 'safe', 'on'=>'search'),
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
			'restaurant' => '餐馆名',
			'slogan' => '标语',
			'meal_time' => '送餐时间',
			'brief' => '简介',
			'remark' => '备注',
			'contact' => '送餐拨号',
			'ps' => '吐槽',
			'menu_7' => '7元菜单',
			'menu_8' => '8元菜单',
			'menu_9' => '9元菜单',
			'menu_o' => '其他菜单',
			'snack' => '宵夜',
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
		$criteria->compare('restaurant',$this->restaurant,true);
		$criteria->compare('slogan',$this->slogan,true);
		$criteria->compare('meal_time',$this->meal_time,true);
		$criteria->compare('support',$this->support);
		$criteria->compare('brief',$this->brief,true);
		$criteria->compare('remark',$this->remark,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('ps',$this->ps,true);
		$criteria->compare('menu_7',$this->menu_7,true);
		$criteria->compare('menu_8',$this->menu_8,true);
		$criteria->compare('menu_9',$this->menu_9,true);
		$criteria->compare('menu_o',$this->menu_o,true);
		$criteria->compare('menu_scws',$this->menu_scws,true);
		$criteria->compare('snack',$this->snack,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}