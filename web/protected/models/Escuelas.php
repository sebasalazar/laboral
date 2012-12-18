<?php

/**
 * This is the model class for table "escuelas".
 *
 * The followings are the available columns in table 'escuelas':
 * @property integer $pk
 * @property integer $departamento_fk
 * @property string $escuela
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Carreras[] $carrerases
 * @property Departamentos $departamentoFk
 */
class Escuelas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Escuelas the static model class
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
		return 'escuelas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('departamento_fk, escuela', 'required'),
			array('departamento_fk', 'numerical', 'integerOnly'=>true),
			array('escuela', 'length', 'max'=>255),
			array('descripcion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, departamento_fk, escuela, descripcion', 'safe', 'on'=>'search'),
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
			'carrerases' => array(self::HAS_MANY, 'Carreras', 'escuela_fk'),
			'departamentoFk' => array(self::BELONGS_TO, 'Departamentos', 'departamento_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pk' => 'Pk',
			'departamento_fk' => 'Departamento Fk',
			'escuela' => 'Escuela',
			'descripcion' => 'Descripcion',
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
		$criteria->compare('departamento_fk',$this->departamento_fk);
		$criteria->compare('escuela',$this->escuela,true);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}