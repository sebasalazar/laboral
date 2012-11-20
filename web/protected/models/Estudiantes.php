<?php

/**
 * This is the model class for table "estudiantes".
 *
 * The followings are the available columns in table 'estudiantes':
 * @property string $pk
 * @property string $nombres
 * @property string $apellidos
 * @property integer $rut
 * @property string $fecha_nacimiento
 * @property string $genero
 * @property string $direccion
 * @property integer $comuna_id
 * @property integer $ec_fk
 * @property string $telefono
 * @property string $celular
 * @property string $email
 * @property integer $estado
 * @property integer $busqueda
 * @property string $archivo_curriculum
 */
class Estudiantes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Estudiantes the static model class
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
		return 'estudiantes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombres, apellidos, rut, fecha_nacimiento, direccion, comuna_id, ec_fk, estado', 'required'),
			array('rut, comuna_id, ec_fk, estado, busqueda', 'numerical', 'integerOnly'=>true),
			array('nombres, apellidos, direccion, email, archivo_curriculum', 'length', 'max'=>255),
			array('genero', 'length', 'max'=>1),
			array('telefono, celular', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, nombres, apellidos, rut, fecha_nacimiento, genero, direccion, comuna_id, ec_fk, telefono, celular, email, estado, busqueda, archivo_curriculum', 'safe', 'on'=>'search'),
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
			'nombres' => 'Nombres',
			'apellidos' => 'Apellidos',
			'rut' => 'Rut',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'genero' => 'Genero',
			'direccion' => 'Direccion',
			'comuna_id' => 'Comuna',
			'ec_fk' => 'Ec Fk',
			'telefono' => 'Telefono',
			'celular' => 'Celular',
			'email' => 'Email',
			'estado' => 'Estado',
			'busqueda' => 'Busqueda',
			'archivo_curriculum' => 'Archivo Curriculum',
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
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('rut',$this->rut);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('comuna_id',$this->comuna_id);
		$criteria->compare('ec_fk',$this->ec_fk);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('busqueda',$this->busqueda);
		$criteria->compare('archivo_curriculum',$this->archivo_curriculum,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}