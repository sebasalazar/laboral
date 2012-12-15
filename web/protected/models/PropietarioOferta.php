<?php

/**
 * This is the model class for table "propietario_oferta".
 *
 * The followings are the available columns in table 'propietario_oferta':
 * @property integer $pk
 * @property integer $oferta_laboral_fk
 * @property integer $rut
 */
class PropietarioOferta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PropietarioOferta the static model class
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
		return 'propietario_oferta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('oferta_laboral_fk, rut', 'required'),
			array('oferta_laboral_fk, rut', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, oferta_laboral_fk, rut', 'safe', 'on'=>'search'),
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
			'pk' => 'Pk',
			'oferta_laboral_fk' => 'Oferta Laboral Fk',
			'rut' => 'Rut Propietario',
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

		$criteria->compare('pk',$this->pk);
		$criteria->compare('oferta_laboral_fk',$this->oferta_laboral_fk);
		$criteria->compare('rut',$this->rut);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}