<?php

/**
 * This is the model class for table "facultades".
 *
 * The followings are the available columns in table 'facultades':
 * @property integer $pk
 * @property string $facultad
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Departamentos[] $departamentoses
 */
class Facultades extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Facultades the static model class
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
		return 'facultades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('facultad', 'required'),
			array('facultad', 'length', 'max'=>255),
			array('descripcion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, facultad, descripcion', 'safe', 'on'=>'search'),
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
			'departamentoses' => array(self::HAS_MANY, 'Departamentos', 'facultad_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pk' => 'Pk',
			'facultad' => 'Facultad',
			'descripcion' => 'Descripcion',
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
		$criteria->compare('LOWER(facultad)',strtolower($this->facultad),true);
		$criteria->compare('LOWER(descripcion)',strtolower($this->descripcion),true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}