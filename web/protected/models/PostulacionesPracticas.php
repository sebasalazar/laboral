<?php

/**
 * This is the model class for table "postulaciones_practicas".
 *
 * The followings are the available columns in table 'postulaciones_practicas':
 * @property string $pk
 * @property string $fecha_postulacion
 * @property string $practica_fk
 * @property string $estudiante_fk
 * @property integer $estado
 * @property string $motivo
 *
 * The followings are the available model relations:
 * @property Practicas $practicaFk
 * @property Estudiantes $estudianteFk
 */
class PostulacionesPracticas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PostulacionesPracticas the static model class
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
		return 'postulaciones_practicas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_postulacion, practica_fk, estudiante_fk, estado', 'required'),
			array('estado', 'numerical', 'integerOnly'=>true),
			array('motivo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, fecha_postulacion, practica_fk, estudiante_fk, estado, motivo', 'safe', 'on'=>'search'),
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
			'practicaFk' => array(self::BELONGS_TO, 'Practicas', 'practica_fk'),
			'estudianteFk' => array(self::BELONGS_TO, 'Estudiantes', 'estudiante_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pk' => 'Pk',
			'fecha_postulacion' => 'Fecha Postulacion',
			'practica_fk' => 'Practica Fk',
			'estudiante_fk' => 'Estudiante Fk',
			'estado' => 'Estado',
			'motivo' => 'Motivo',
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
		$criteria->compare('fecha_postulacion',$this->fecha_postulacion,true);
		$criteria->compare('practica_fk',$this->practica_fk,true);
		$criteria->compare('estudiante_fk',$this->estudiante_fk,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('motivo',$this->motivo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}