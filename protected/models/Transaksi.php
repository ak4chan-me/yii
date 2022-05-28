<?php

/**
 * This is the model class for table "tk_transaksi".
 *
 * The followings are the available columns in table 'tk_transaksi':
 * @property string $traId
 * @property string $traNoFaktur
 * @property string $traTotal
 * @property string $traTgl
 * @property string $traUser
 * @property string $traBuktiBayar
 * @property string $traStatus
 */
class Transaksi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tk_transaksi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('traNoFaktur, traTotal, traTgl, traUser', 'required'),
			array('traNoFaktur, traUser, traBuktiBayar', 'length', 'max'=>45),
			array('traTotal, traStatus', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('traId, traNoFaktur, traTotal, traTgl, traUser, traBuktiBayar, traStatus', 'safe', 'on'=>'search'),
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
			'traId' => 'Tra',
			'traNoFaktur' => 'Tra No Faktur',
			'traTotal' => 'Tra Total',
			'traTgl' => 'Tra Tgl',
			'traUser' => 'Tra User',
			'traBuktiBayar' => 'Tra Bukti Bayar',
			'traStatus' => 'Tra Status',
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

		$criteria->compare('traId',$this->traId,true);
		$criteria->compare('traNoFaktur',$this->traNoFaktur,true);
		$criteria->compare('traTotal',$this->traTotal,true);
		$criteria->compare('traTgl',$this->traTgl,true);
		$criteria->compare('traUser',$this->traUser,true);
		$criteria->compare('traBuktiBayar',$this->traBuktiBayar,true);
		$criteria->compare('traStatus',$this->traStatus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function search_member()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('traId',$this->traId,true);
		$criteria->compare('traNoFaktur',$this->traNoFaktur,true);
		$criteria->compare('traTotal',$this->traTotal,true);
		$criteria->compare('traTgl',$this->traTgl,true);
		$criteria->compare('traUser',Yii::app()->user->getId(),true);
		$criteria->compare('traBuktiBayar',$this->traBuktiBayar,true);
		$criteria->compare('traStatus',$this->traStatus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transaksi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
