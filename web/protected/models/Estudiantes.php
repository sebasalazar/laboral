<?php

/**
 * This is the model class for table "estudiantes".
 *
 * The followings are the available columns in table 'estudiantes':
 * @property integer $pk
 * @property string $nombres
 * @property string $apellidos
 * @property integer $rut
 * @property string $fecha_nacimiento
 * @property string $genero
 * @property string $direccion
 * @property integer $comuna_fk
 * @property integer $ec_fk
 * @property integer $carrera_fk
 * @property string $telefono
 * @property string $celular
 * @property string $email
 * @property integer $estado
 * @property boolean $busqueda
 * @property string $archivo_curriculum
 * @property boolean $curriculum_completo
 *
 * The followings are the available model relations:
 * @property EvaluacionesPracticas[] $evaluacionesPracticases
 * @property Comunas $comunaFk
 * @property EstadosCiviles $ecFk
 * @property Carreras $carreraFk
 * @property Estados $estado0
 * @property PostulacionesPracticas[] $postulacionesPracticases
 * @property Curriculums[] $curriculums
 * @property Postulaciones[] $postulaciones
 * @property SugerenciasTrabajo[] $sugerenciasTrabajos
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
			array('nombres, apellidos, rut, fecha_nacimiento, direccion, comuna_fk, ec_fk, carrera_fk, email', 'required'),
			array('rut, comuna_fk, ec_fk, carrera_fk, estado', 'numerical', 'integerOnly'=>true),
			array('nombres, apellidos, direccion, email, archivo_curriculum', 'length', 'max'=>255),
			array('genero', 'length', 'max'=>1),
                        array('email','email'),
                        array('rut','unique'),
                    	array('telefono', 'length', 'min'=>7,'max'=>15),
                        array('telefono','match','pattern'=>'/^[+]{0,1}[0-9 ]+$/'),
                        array('celular', 'length', 'min'=>8, 'max'=>12),
                        array('celular','match','pattern'=>'/^[+]{0,1}[0-9 ]+$/'),
                        array('email','unique'),
			array('busqueda, curriculum_completo', 'safe'),
                        array('archivo_curriculum', 'file', 'types'=>'pdf', 'allowEmpty' => true, 'on' => 'update'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, nombres, apellidos, rut, fecha_nacimiento, genero, direccion, comuna_fk, ec_fk, carrera_fk, telefono, celular, email, estado, busqueda, archivo_curriculum, curriculum_completo', 'safe', 'on'=>'search'),
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
			'evaluacionesPracticases' => array(self::HAS_MANY, 'EvaluacionesPracticas', 'estudiant_fk'),
			'comunaFk' => array(self::BELONGS_TO, 'Comunas', 'comuna_fk'),
			'ecFk' => array(self::BELONGS_TO, 'EstadosCiviles', 'ec_fk'),
			'carreraFk' => array(self::BELONGS_TO, 'Carreras', 'carrera_fk'),
			'estado0' => array(self::BELONGS_TO, 'Estados', 'estado'),
			'postulacionesPracticases' => array(self::HAS_MANY, 'PostulacionesPracticas', 'estudiante_fk'),
			'curriculums' => array(self::HAS_MANY, 'Curriculums', 'estudiante_fk'),
			'postulaciones' => array(self::HAS_MANY, 'Postulaciones', 'estudiante_fk'),
			'sugerenciasTrabajos' => array(self::HAS_MANY, 'SugerenciasTrabajo', 'estudiante_fk'),
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
			'comuna_fk' => 'Comuna Fk',
			'ec_fk' => 'Ec Fk',
			'carrera_fk' => 'Carrera Fk',
			'telefono' => 'Telefono',
			'celular' => 'Celular',
			'email' => 'Email',
			'estado' => 'Estado',
			'busqueda' => 'Busqueda',
			'archivo_curriculum' => 'Archivo Curriculum',
			'curriculum_completo' => 'Curriculum Completo',
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
		$criteria->compare('rut',$this->rut);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('LOWER(genero)',strtolower($this->genero),true);
		$criteria->compare('LOWER(direccion)',strtolower($this->direccion),true);
		$criteria->compare('comuna_fk',$this->comuna_fk);
		$criteria->compare('ec_fk',$this->ec_fk);
		$criteria->compare('carrera_fk',$this->carrera_fk);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('LOWER(email)',strtolower($this->email),true);
		$criteria->compare('LOWER(estado)',strtolower($this->estado));
		$criteria->compare('LOWER(busqueda)',strtolower($this->busqueda));
		$criteria->compare('archivo_curriculum',$this->archivo_curriculum,true);
		$criteria->compare('curriculum_completo',$this->curriculum_completo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}