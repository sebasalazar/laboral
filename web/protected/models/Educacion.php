<?php

/**
 * This is the model class for table "educacion".
 *
 * The followings are the available columns in table 'educacion':
 * @property string $pk
 * @property string $curriculum_fk
 * @property string $nombre_institucion
 * @property string $carrera
 * @property string $inicio
 * @property string $fin
 *
 * The followings are the available model relations:
 * @property Curriculums $curriculumFk
 */
class Educacion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Educacion the static model class
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
		return 'educacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pk, curriculum_fk, nombre_institucion, inicio, fin', 'required'),
			array('nombre_institucion, carrera', 'length', 'max'=>60),
                        array('inicio,fin', 'numerical', 'integerOnly'=>true, 'min'=>4,'max'=>4),
                        array('inicio,fin','match','pattern'=>'/^[0-9]+$/'),
			// The following rule is used by search().                   
			// Please remove those attributes that should not be searched.
			array('pk, curriculum_fk, nombre_institucion, carrera, inicio, fin', 'safe', 'on'=>'search'),
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
			'curriculum_fk' => 'Curriculum Fk',
			'nombre_institucion' => 'Nombre Institucion',
			'carrera' => 'Carrera',
			'inicio' => 'Inicio',
			'fin' => 'Fin',
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
		$criteria->compare('curriculum_fk',$this->curriculum_fk,true);
		$criteria->compare('LOWER(nombre_institucion)',strtolower($this->nombre_institucion),true);
		$criteria->compare('LOWER(carrera)',strtolower($this->carrera),true);
		$criteria->compare('inicio',$this->inicio,true);
		$criteria->compare('fin',$this->fin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}