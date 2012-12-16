<?php

/**
 * This is the model class for table "curriculums".
 *
 * The followings are the available columns in table 'curriculums':
 * @property integer $pk
 * @property string $estudiante_fk
 * @property string $educacion_secundaria
 * @property string $educacion_superior
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
			array('pk, estudiante_fk, educacion_secundaria', 'required'),
			array('pk', 'numerical', 'integerOnly'=>true),
			array('educacion_secundaria', 'length', 'max'=>50),
			array('educacion_superior', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, estudiante_fk, educacion_secundaria, educacion_superior', 'safe', 'on'=>'search'),
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
			'estudiante_fk' => 'Estudiante Fk',
			'educacion_secundaria' => 'Educacion Secundaria',
			'educacion_superior' => 'Educacion Superior',
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
		$criteria->compare('educacion_secundaria',$this->educacion_secundaria,true);
		$criteria->compare('educacion_superior',$this->educacion_superior,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}