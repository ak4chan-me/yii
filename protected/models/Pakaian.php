<?php

/**
 * This is the model class for table "pakaian".
 *
 * The followings are the available columns in table 'pakaian':
 * @property string $kd_pakaian
 * @property string $nm_pakaian
 * @property string $hrg_pakaian
 * @property string $gmbr_pakaian
 */
class Pakaian extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pakaian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nm_pakaian, hrg_pakaian, gmbr_pakaian', 'required'),
			array('nm_pakaian, gmbr_pakaian', 'length', 'max'=>45),
			array('hrg_pakaian', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kd_pakaian, nm_pakaian, hrg_pakaian, gmbr_pakaian', 'safe', 'on'=>'search'),
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
			'kd_pakaian' => 'Kd Pakaian',
			'nm_pakaian' => 'Nm Pakaian',
			'hrg_pakaian' => 'Hrg Pakaian',
			'gmbr_pakaian' => 'Gmbr Pakaian',
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

		$criteria->compare('kd_pakaian',$this->kd_pakaian,true);
		$criteria->compare('nm_pakaian',$this->nm_pakaian,true);
		$criteria->compare('hrg_pakaian',$this->hrg_pakaian,true);
		$criteria->compare('gmbr_pakaian',$this->gmbr_pakaian,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pakaian the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
