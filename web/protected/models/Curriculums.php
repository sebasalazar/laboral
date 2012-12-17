<?php

/**
 * This is the model class for table "curriculums".
 *
 * The followings are the available columns in table 'curriculums':
 * @property integer $pk
 * @property string $estudiante_fk
 * @property string $presentacion
 *
 * The followings are the available model relations:
 * @property FormacionComplementaria[] $formacionComplementarias
 * @property Estudiantes $estudianteFk
 * @property Experiencias[] $experienciases
 * @property Educacion[] $educacions
 * @property ConocimientosCurriculums[] $conocimientosCurriculums
 */
class Curriculums extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Curriculums the static model class
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
		return 'curriculums';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pk, estudiante_fk', 'required'),
			array('pk', 'numerical', 'integerOnly'=>true),
			array('presentacion', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, estudiante_fk, presentacion', 'safe', 'on'=>'search'),
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
			'formacionComplementarias' => array(self::HAS_MANY, 'FormacionComplementaria', 'curriculum_fk'),
			'estudianteFk' => array(self::BELONGS_TO, 'Estudiantes', 'estudiante_fk'),
			'experienciases' => array(self::HAS_MANY, 'Experiencias', 'curriculum_fk'),
			'educacions' => array(self::HAS_MANY, 'Educacion', 'curriculum_fk'),
			'conocimientosCurriculums' => array(self::HAS_MANY, 'ConocimientosCurriculums', 'curriculum_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pk' => 'Pk',
			'estudiante_fk' => 'Estudiante Fk',
			'presentacion' => 'Presentacion',
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
		$criteria->compare('estudiante_fk',$this->estudiante_fk,true);
		$criteria->compare('presentacion',$this->presentacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}