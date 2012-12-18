<?php

/**
 * This is the model class for table "regiones".
 *
 * The followings are the available columns in table 'regiones':
 * @property integer $pk
 * @property string $nombre
 * @property string $zona_corfo
 * @property string $codigo
 * @property integer $numero
 *
 * The followings are the available model relations:
 * @property Provincias[] $provinciases
 */
class Regiones extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Regiones the static model class
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
		return 'regiones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, zona_corfo, codigo, numero', 'required'),
			array('numero', 'numerical', 'integerOnly'=>true),
			array('nombre, zona_corfo', 'length', 'max'=>255),
			array('codigo', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, nombre, zona_corfo, codigo, numero', 'safe', 'on'=>'search'),
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
			'provinciases' => array(self::HAS_MANY, 'Provincias', 'region_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pk' => 'Pk',
			'nombre' => 'Nombre',
			'zona_corfo' => 'Zona Corfo',
			'codigo' => 'Codigo',
			'numero' => 'Numero',
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
		$criteria->compare('LOWER(nombre)',strtolower($this->nombre),true);
		$criteria->compare('LOWER(zona_corfo)',strtolower($this->zona_corfo),true);
		$criteria->compare('LOWER(codigo)',strtolower($this->codigo),true);
		$criteria->compare('numero',$this->numero);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}