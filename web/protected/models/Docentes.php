<?php

/**
 * This is the model class for table "docentes".
 *
 * The followings are the available columns in table 'docentes':
 * @property integer $pk
 * @property string $nombres
 * @property string $apellidos
 * @property integer $rut
 * @property string $fecha_nacimiento
 * @property string $genero
 * @property string $direccion
 * @property integer $comuna_fk
 * @property integer $ec_fk
 * @property integer $departamento_fk
 * @property string $telefono
 * @property string $celular
 * @property string $email
 *
 * The followings are the available model relations:
 * @property SugerenciasTrabajo[] $sugerenciasTrabajos
 * @property Comunas $comuna
 * @property EstadosCiviles $ecFk
 * @property Departamentos $departamentoFk
 * @property CargosAdm[] $cargosAdms
 */
class Docentes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Docentes the static model class
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
		return 'docentes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rut, nombres, apellidos, rut, fecha_nacimiento, direccion, comuna_fk, ec_fk, departamento_fk', 'required'),
			array('comuna_fk, ec_fk, departamento_fk', 'numerical', 'integerOnly'=>true),
			array('nombres, apellidos, direccion, email', 'length', 'max'=>255),
			array('genero', 'length', 'max'=>1),
			array('telefono', 'length', 'min'=>7,'max'=>7),
                        array('celular', 'length', 'min'=>8, 'max'=>8),
                        array('email', 'email'),
                        array('email', 'unique'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, nombres, apellidos, rut, fecha_nacimiento, genero, direccion, comuna_fk, ec_fk, departamento_fk, telefono, celular, email', 'safe', 'on'=>'search'),
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
			'sugerenciasTrabajos' => array(self::HAS_MANY, 'SugerenciasTrabajo', 'docente_fk'),
			'comuna' => array(self::BELONGS_TO, 'Comunas', 'comuna_fk'),
			'ecFk' => array(self::BELONGS_TO, 'EstadosCiviles', 'ec_fk'),
			'departamentoFk' => array(self::BELONGS_TO, 'Departamentos', 'departamento_fk'),
			'cargosAdms' => array(self::HAS_MANY, 'CargosAdm', 'docente_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pk' => 'Pk',
			'nombres' => 'Nombres',
			'apellidos' => 'Apellidos',
			'rut' => 'Rut',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'genero' => 'Genero',
			'direccion' => 'Direccion',
			'comuna_fk' => 'Comuna',
			'ec_fk' => 'Ec Fk',
			'departamento_fk' => 'Departamento Fk',
			'telefono' => 'Telefono',
			'celular' => 'Celular',
			'email' => 'Email',
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
		$criteria->compare('LOWER(nombres)',strtolower($this->nombres),true);
		$criteria->compare('LOWER(apellidos)',strtolower($this->apellidos),true);
		$criteria->compare('LOWER(rut)',strtolower($this->rut));
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('LOWER(genero)',strtolower($this->genero),true);
		$criteria->compare('LOWER(direccion)',strtolower($this->direccion),true);
		$criteria->compare('comuna_fk',$this->comuna_fk);
		$criteria->compare('ec_fk',$this->ec_fk);
		$criteria->compare('departamento_fk',$this->departamento_fk);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('LOWER(email)',strtolower($this->email),true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}