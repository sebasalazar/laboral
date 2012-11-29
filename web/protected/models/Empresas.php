<?php

/**
 * This is the model class for table "empresas".
 *
 * The followings are the available columns in table 'empresas':
 * @property integer $pk
 * @property integer $rut
 * @property string $nombre
 * @property string $nombre_represen_legal
 * @property string $direccion
 * @property integer $comuna_fk
 * @property integer $codigo_postal
 * @property string $telefono
 * @property string $email
 * @property string $actividad
 * @property string $descripcion_negocio
 * @property string $web
 *
 * The followings are the available model relations:
 * @property Practicas[] $practicases
 * @property Comunas $comunaFk
 * @property OfertasLaborales[] $ofertasLaborales
 * @property EncargadosEmpresas[] $encargadosEmpresases
 */
class Empresas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Empresas the static model class
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
		return 'empresas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rut, nombre, direccion, comuna_fk, codigo_postal, telefono, actividad, descripcion_negocio', 'required'),
			array('rut, comuna_fk, codigo_postal', 'numerical', 'integerOnly'=>true),
			array('nombre, nombre_represen_legal, direccion, email, actividad, descripcion_negocio, web', 'length', 'max'=>255),
			array('telefono', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, rut, nombre, nombre_represen_legal, direccion, comuna_fk, codigo_postal, telefono, email, actividad, descripcion_negocio, web', 'safe', 'on'=>'search'),
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
			'practicases' => array(self::HAS_MANY, 'Practicas', 'empresa_fk'),
			'comunaFk' => array(self::BELONGS_TO, 'Comunas', 'comuna_fk'),
			'ofertasLaborales' => array(self::HAS_MANY, 'OfertasLaborales', 'empresa_fk'),
			'encargadosEmpresases' => array(self::HAS_MANY, 'EncargadosEmpresas', 'empresa_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pk' => 'Pk',
			'rut' => 'Rut',
			'nombre' => 'Nombre',
			'nombre_represen_legal' => 'Nombre Represen Legal',
			'direccion' => 'Direccion',
			'comuna_fk' => 'Comuna Fk',
			'codigo_postal' => 'Codigo Postal',
			'telefono' => 'Telefono',
			'email' => 'Email',
			'actividad' => 'Actividad',
			'descripcion_negocio' => 'Descripcion Negocio',
			'web' => 'Web',
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
		$criteria->compare('rut',$this->rut);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('nombre_represen_legal',$this->nombre_represen_legal,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('comuna_fk',$this->comuna_fk);
		$criteria->compare('codigo_postal',$this->codigo_postal);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('actividad',$this->actividad,true);
		$criteria->compare('descripcion_negocio',$this->descripcion_negocio,true);
		$criteria->compare('web',$this->web,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}