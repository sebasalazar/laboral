<?php

/**
 * This is the model class for table "conocimientos_curriculums".
 *
 * The followings are the available columns in table 'conocimientos_curriculums':
 * @property integer $curriculum_fk
 * @property integer $experiencias_fk
 *
 * The followings are the available model relations:
 * @property Curriculums $curriculumFk
 * @property Conocimientos $experienciasFk
 */
class ConocimientosCurriculums extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ConocimientosCurriculums the static model class
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
		return 'conocimientos_curriculums';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('curriculum_fk, experiencias_fk', 'required'),
			array('curriculum_fk, experiencias_fk', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('curriculum_fk, experiencias_fk', 'safe', 'on'=>'search'),
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
			'experienciasFk' => array(self::BELONGS_TO, 'Conocimientos', 'experiencias_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'curriculum_fk' => 'Curriculum Fk',
			'experiencias_fk' => 'Experiencias Fk',
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

		$criteria->compare('curriculum_fk',$this->curriculum_fk);
		$criteria->compare('experiencias_fk',$this->experiencias_fk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}