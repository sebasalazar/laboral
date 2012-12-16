<?php

/**
 * This is the model class for table "experiencias".
 *
 * The followings are the available columns in table 'experiencias':
 * @property string $pk
 * @property string $descripcion
 * @property string $referencia
 * @property string $email
 * @property string $inicio
 * @property string $fin
 * @property string $curriculum_fk
 */
class Experiencias extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Experiencias the static model class
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
		return 'experiencias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion, referencia, email, inicio, curriculum_fk', 'required'),
			array('descripcion, referencia, email', 'length', 'max'=>255),
			array('fin', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, descripcion, referencia, email, inicio, fin, curriculum_fk', 'safe', 'on'=>'search'),
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
			'descripcion' => 'Descripcion',
			'referencia' => 'Referencia',
			'email' => 'Email',
			'inicio' => 'Inicio',
			'fin' => 'Fin',
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

		$criteria->compare('pk',$this->pk,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('referencia',$this->referencia,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('inicio',$this->inicio,true);
		$criteria->compare('fin',$this->fin,true);
		$criteria->compare('curriculum_fk',$this->curriculum_fk,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}