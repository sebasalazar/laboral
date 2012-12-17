<?php

/**
 * This is the model class for table "formacion_complementaria".
 *
 * The followings are the available columns in table 'formacion_complementaria':
 * @property integer $pk
 * @property string $nombre_formacion
 * @property string $institucion
 * @property integer $anio_formacion_complementaria
 * @property string $curriculum_fk
 *
 * The followings are the available model relations:
 * @property Curriculums $curriculumFk
 */
class Formacioncomplementaria extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Formacioncomplementaria the static model class
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
		return 'formacion_complementaria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pk, nombre_formacion, institucion, anio_formacion_complementaria, curriculum_fk', 'required'),
			array('pk, anio_formacion_complementaria', 'numerical', 'integerOnly'=>true),
			array('nombre_formacion', 'length', 'max'=>60),
			array('institucion', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, nombre_formacion, institucion, anio_formacion_complementaria, curriculum_fk', 'safe', 'on'=>'search'),
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
			'curriculumFk' => array(self::BELONGS_TO, 'Curriculums', 'curriculum_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pk' => 'Pk',
			'nombre_formacion' => 'Nombre Formacion',
			'institucion' => 'Institucion',
			'anio_formacion_complementaria' => 'Anio Formacion Complementaria',
			'curriculum_fk' => 'Curriculum Fk',
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
		$criteria->compare('nombre_formacion',$this->nombre_formacion,true);
		$criteria->compare('institucion',$this->institucion,true);
		$criteria->compare('anio_formacion_complementaria',$this->anio_formacion_complementaria);
		$criteria->compare('curriculum_fk',$this->curriculum_fk,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}