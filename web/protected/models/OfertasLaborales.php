<?php

/**
 * This is the model class for table "ofertas_laborales".
 *
 * The followings are the available columns in table 'ofertas_laborales':
 * @property integer $pk
 * @property integer $empresa_fk
 * @property integer $rubro_fk
 * @property integer $nivel_estudio_fk
 * @property string $renta
 * @property integer $vacantes
 * @property string $plazo
 * @property string $descripcion
 * @property string $ubicacion
 * @property string $cargo
 * @property string $fecha_publicacion
 * @property string $beneficios
 * @property integer $jornada_fk
 * @property integer $contrato_fk
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Postulaciones[] $postulaciones
 * @property Empresas $empresaFk
 * @property Rubros $rubroFk
 * @property NivelesEstudios $nivelEstudioFk
 * @property Jornadas $jornadaFk
 * @property TiposContratos $contratoFk
 * @property SugerenciasTrabajo[] $sugerenciasTrabajos
 */



class OfertasLaborales extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OfertasLaborales the static model class
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
		return 'ofertas_laborales';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
        
        public function completo($pkestudiante)
        {
            $sql = "SELECT completo FROM estudiantes WHERE pk='$pkestudiantes'";            
            
            $connection = Yii::app()->db;
            $command = $connection->createCommand($sql);
            $dataReader = $command->queryAll();
            return $dataReader;
        }
        
        
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa_fk, rubro_fk, nivel_estudio_fk, renta, vacantes, descripcion, cargo, fecha_publicacion, jornada_fk, contrato_fk, activo', 'required'),
			array('empresa_fk, rubro_fk, nivel_estudio_fk, vacantes, jornada_fk, contrato_fk, activo', 'numerical', 'integerOnly'=>true),
			array('descripcion, ubicacion, cargo, beneficios', 'length', 'max'=>255),
			array('plazo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, empresa_fk, rubro_fk, nivel_estudio_fk, renta, vacantes, plazo, descripcion, ubicacion, cargo, fecha_publicacion, beneficios, jornada_fk, contrato_fk, activo', 'safe', 'on'=>'search'),
		
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
			'postulaciones' => array(self::HAS_MANY, 'Postulaciones', 'oferta_laboral_fk'),
			'empresaFk' => array(self::BELONGS_TO, 'Empresas', 'empresa_fk'),
			'rubroFk' => array(self::BELONGS_TO, 'Rubros', 'rubro_fk'),
			'nivelEstudioFk' => array(self::BELONGS_TO, 'NivelesEstudios', 'nivel_estudio_fk'),
			'jornadaFk' => array(self::BELONGS_TO, 'Jornadas', 'jornada_fk'),
			'contratoFk' => array(self::BELONGS_TO, 'TiposContratos', 'contrato_fk'),
			'sugerenciasTrabajos' => array(self::HAS_MANY, 'SugerenciasTrabajo', 'oferta_laboral_fk'),
		);
	}

        public function afterFind()
{
$this->fecha_publicacion= Yii::app()->dateformatter->format("dd-MM-yyyy",$this->fecha_publicacion);
parent::afterFind();
}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pk' => 'Pk',
			'empresa_fk' => 'Empresa Fk',
			'rubro_fk' => 'Rubro Fk',
			'nivel_estudio_fk' => 'Nivel Estudio Fk',
			'renta' => 'Renta',
			'vacantes' => 'Vacantes',
			'plazo' => 'Plazo',
			'descripcion' => 'Descripcion',
			'ubicacion' => 'Ubicacion',
			'cargo' => 'Cargo',
			'fecha_publicacion' => 'Fecha Publicacion',
			'beneficios' => 'Beneficios',
			'jornada_fk' => 'Jornada Fk',
			'contrato_fk' => 'Contrato Fk',
			'activo' => 'Activo',
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
		$criteria->compare('empresa_fk',$this->empresa_fk);
		$criteria->compare('rubro_fk',$this->rubro_fk);
		$criteria->compare('nivel_estudio_fk',$this->nivel_estudio_fk);
		$criteria->compare('renta',$this->renta,true);
		$criteria->compare('vacantes',$this->vacantes);
		$criteria->compare('plazo',$this->plazo,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('ubicacion',$this->ubicacion,true);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('fecha_publicacion',$this->fecha_publicacion,true);
		$criteria->compare('beneficios',$this->beneficios,true);
		$criteria->compare('jornada_fk',$this->jornada_fk);
		$criteria->compare('contrato_fk',$this->contrato_fk);
		$criteria->compare('activo',$this->activo);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function customSearch(){
                $criteria=new CDbCriteria;
                $criteria->select = array('*');
                $criteria->condition = 'activo=\'1\'';
                $criteria->order = 'cargo DESC';
                $criteria->limit = 5;
                
                $criteria->compare('pk',$this->pk);
		$criteria->compare('empresa_fk',$this->empresa_fk);
		$criteria->compare('rubro_fk',$this->rubro_fk);
		$criteria->compare('nivel_estudio_fk',$this->nivel_estudio_fk);
		$criteria->compare('renta',$this->renta,true);
		$criteria->compare('vacantes',$this->vacantes);
		$criteria->compare('plazo',$this->plazo,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('ubicacion',$this->ubicacion,true);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('fecha_publicacion',$this->fecha_publicacion,true);
		$criteria->compare('beneficios',$this->beneficios,true);
		$criteria->compare('jornada_fk',$this->jornada_fk);
		$criteria->compare('contrato_fk',$this->contrato_fk);
		$criteria->compare('activo',$this->activo);
                return new CActiveDataProvider($this, array(
                        'criteria'=>$criteria,
                        'pagination' => false
                ));
        }
}