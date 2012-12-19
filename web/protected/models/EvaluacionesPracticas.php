<?php

/**
 * This is the model class for table "evaluaciones_practicas".
 *
 * The followings are the available columns in table 'evaluaciones_practicas':
 * @property string $pk
 * @property integer $estudiant_fk
 * @property integer $encar_practicas_fk
 * @property string $cargo_asignado
 * @property integer $conocimientos_demostrados
 * @property integer $eficacia
 * @property integer $grado_cumplimiento
 * @property integer $puntualidad_respeto
 * @property integer $integracion_adaptacion
 * @property integer $responsabilidad_superacion
 * @property integer $capacidades_personales
 * @property integer $iniciativa_creativi_improvi
 */
class EvaluacionesPracticas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EvaluacionesPracticas the static model class
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
		return 'evaluaciones_practicas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estudiant_fk, encar_practicas_fk, cargo_asignado, conocimientos_demostrados, eficacia, grado_cumplimiento, puntualidad_respeto, integracion_adaptacion, responsabilidad_superacion, capacidades_personales, iniciativa_creativi_improvi', 'required'),
			array('estudiant_fk, encar_practicas_fk, conocimientos_demostrados, eficacia, grado_cumplimiento, puntualidad_respeto, integracion_adaptacion, responsabilidad_superacion, capacidades_personales, iniciativa_creativi_improvi', 'numerical', 'integerOnly'=>true),
			array('cargo_asignado', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, estudiant_fk, encar_practicas_fk, cargo_asignado, conocimientos_demostrados, eficacia, grado_cumplimiento, puntualidad_respeto, integracion_adaptacion, responsabilidad_superacion, capacidades_personales, iniciativa_creativi_improvi', 'safe', 'on'=>'search'),
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
                    'estudiantes' => array(self::BELONGS_TO, 'Estudiantes', 'estudiant_fk'),
                    'EncargadosPracticas' => array(self::BELONGS_TO, 'EncargadosPracticas', 'encar_practicas_fk'),
                    
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pk' => 'Pk',
			'estudiant_fk' => 'Estudiant Fk',
			'encar_practicas_fk' => 'Encar Practicas Fk',
			'cargo_asignado' => 'Cargo Asignado',
			'conocimientos_demostrados' => 'Conocimintos Demostrados',
			'eficacia' => 'Eficacia',
			'grado_cumplimiento' => 'Grado Cumplimiento',
			'puntualidad_respeto' => 'Puntualidad Respeto',
			'integracion_adaptacion' => 'Integracion Adaptación',
			'responsabilidad_superacion' => 'Responsabilidad Supe1ración',
			'capacidades_personales' => 'Capacidades Personales',
			'iniciativa_creativi_improvi' => 'Iniciativa Creativi Improvi',
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
		$criteria->compare('estudiant_fk',$this->estudiant_fk);
		$criteria->compare('encar_practicas_fk',$this->encar_practicas_fk);
		$criteria->compare('LOWER(cargo_asignado)', strtolower($this->cargo_asignado), true);
		$criteria->compare('conocimientos_demostrados',$this->conocimientos_demostrados);
		$criteria->compare('eficacia',$this->eficacia);
		$criteria->compare('grado_cumplimiento',$this->grado_cumplimiento);
		$criteria->compare('puntualidad_respeto',$this->puntualidad_respeto);
		$criteria->compare('integracion_adaptacion',$this->integracion_adaptacion);
		$criteria->compare('responsabilidad_superacion',$this->responsabilidad_superacion);
		$criteria->compare('capacidades_personales',$this->capacidades_personales);
		$criteria->compare('iniciativa_creativi_improvi',$this->iniciativa_creativi_improvi);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
       
}