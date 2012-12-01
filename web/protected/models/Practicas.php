<?php

/**
 * This is the model class for table "practicas".
 *
 * The followings are the available columns in table 'practicas':
 * @property string $pk
 * @property integer $empresa_fk
 * @property string $area_practica
 * @property string $inicio_practica
 * @property string $fin_practica
 * @property integer $remuneracion
 */
class Practicas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Practicas the static model class
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
		return 'practicas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_fk, inicio_practica, fin_practica', 'required'),
			array('empresa_fk, remuneracion', 'numerical', 'integerOnly'=>true),
			array('area_practica', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, empresa_fk, area_practica, inicio_practica, fin_practica, remuneracion', 'safe', 'on'=>'search'),
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
			'empresa_fk' => 'Empresa Fk',
			'area_practica' => 'Area Practica',
			'inicio_practica' => 'Inicio Practica',
			'fin_practica' => 'Fin Practica',
			'remuneracion' => 'Remuneracion',
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

		$criteria->compare('pk',$this->pk,true);
		$criteria->compare('empresa_fk',$this->empresa_fk);
		$criteria->compare('area_practica',$this->area_practica,true);
		$criteria->compare('inicio_practica',$this->inicio_practica,true);
		$criteria->compare('fin_practica',$this->fin_practica,true);
		$criteria->compare('remuneracion',$this->remuneracion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}