<?php

/**
 * This is the model class for table "comunas".
 *
 * The followings are the available columns in table 'comunas':
 * @property integer $pk
 * @property integer $provincia_fk
 * @property string $nombre
 *
 * The followings are the available model relations:
 * @property Empresas[] $empresases
 * @property Estudiantes[] $estudiantes
 * @property Docentes[] $docentes
 * @property Provincias $provinciaFk
 */
class Comunas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comunas the static model class
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
		return 'comunas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('provincia_fk, nombre', 'required'),
			array('provincia_fk', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, provincia_fk, nombre', 'safe', 'on'=>'search'),
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
			'empresases' => array(self::HAS_MANY, 'Empresas', 'comuna_fk'),
			'estudiantes' => array(self::HAS_MANY, 'Estudiantes', 'comuna_id'),
			'docentes' => array(self::HAS_MANY, 'Docentes', 'comuna_id'),
			'provinciaFk' => array(self::BELONGS_TO, 'Provincias', 'provincia_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pk' => 'Pk',
			'provincia_fk' => 'Provincia Fk',
			'nombre' => 'Nombre',
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
		$criteria->compare('provincia_fk',$this->provincia_fk);
		$criteria->compare('nombre',$this->nombre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}