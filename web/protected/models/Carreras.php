<?php

/**
 * This is the model class for table "carreras".
 *
 * The followings are the available columns in table 'carreras':
 * @property integer $pk
 * @property integer $cod_carrera
 * @property string $nombre_carrera
 * @property integer $escuela_fk
 *
 * The followings are the available model relations:
 * @property Escuelas $escuelaFk
 */
class Carreras extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Carreras the static model class
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
		return 'carreras';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_carrera, nombre_carrera, escuela_fk', 'required'),
			array('cod_carrera, escuela_fk', 'numerical', 'integerOnly'=>true),
			array('nombre_carrera', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, cod_carrera, nombre_carrera, escuela_fk', 'safe', 'on'=>'search'),
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
			'escuelaFk' => array(self::BELONGS_TO, 'Escuelas', 'escuela_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pk' => 'Pk',
			'cod_carrera' => 'Cod Carrera',
			'nombre_carrera' => 'Nombre Carrera',
			'escuela_fk' => 'Escuela Fk',
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
		$criteria->compare('cod_carrera',$this->cod_carrera);
		$criteria->compare('LOWER(nombre_carrera)',strtolower($this->nombre_carrera),true);
		$criteria->compare('escuela_fk',$this->escuela_fk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}