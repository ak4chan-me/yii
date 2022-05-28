<?php

/**
 * This is the model class for table "tk_pakai_trans".
 *
 * The followings are the available columns in table 'tk_pakai_trans':
 * @property string $ptId
 * @property string $ptKdPakaian
 * @property string $ptTraId
 * @property integer $ptJumlah
 * @property string $ptTotal
 */
class PakaiTrans extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tk_pakai_trans';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ptKdPakaian, ptTraId, ptJumlah, ptTotal', 'required'),
			array('ptJumlah', 'numerical', 'integerOnly'=>true),
			array('ptKdPakaian, ptTraId', 'length', 'max'=>20),
			array('ptTotal', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ptId, ptKdPakaian, ptTraId, ptJumlah, ptTotal', 'safe', 'on'=>'search'),
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
			'ptId' => 'Pt',
			'ptKdPakaian' => 'Pt Kd Pakaian',
			'ptTraId' => 'Pt Tra',
			'ptJumlah' => 'Pt Jumlah',
			'ptTotal' => 'Pt Total',
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

		$criteria->compare('ptId',$this->ptId,true);
		$criteria->compare('ptKdPakaian',$this->ptKdPakaian,true);
		$criteria->compare('ptTraId',$this->ptTraId,true);
		$criteria->compare('ptJumlah',$this->ptJumlah);
		$criteria->compare('ptTotal',$this->ptTotal,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PakaiTrans the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
