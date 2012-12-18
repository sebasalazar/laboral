<?php

/**
 * This is the model class for table "postulaciones".
 *
 * The followings are the available columns in table 'postulaciones':
 * @property string $pk
 * @property integer $oferta_laboral_fk
 * @property integer $estudiante_fk
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property OfertasLaborales $ofertaLaboralFk
 * @property Estudiantes $estudianteFk
 */
class Postulaciones extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Postulaciones the static model class
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
		return 'postulaciones';
	}
        public function afterFind()
        {
                $this->fecha= Yii::app()->dateformatter->format("dd-MM-yyyy",$this->fecha);
                parent::afterFind();
        }
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('oferta_laboral_fk, estudiante_fk, fecha', 'required'),
			array('oferta_laboral_fk, estudiante_fk', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, oferta_laboral_fk, estudiante_fk, fecha', 'safe', 'on'=>'search'),
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
			'ofertaLaboralFk' => array(self::BELONGS_TO, 'OfertasLaborales', 'oferta_laboral_fk'),
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
			'oferta_laboral_fk' => 'Oferta Laboral Fk',
			'estudiante_fk' => 'Estudiante Fk',
			'fecha' => 'Fecha',
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
		$criteria->compare('oferta_laboral_fk',$this->oferta_laboral_fk);
		$criteria->compare('estudiante_fk',$this->estudiante_fk);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function search2($estudiante_fk)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('pk',$this->pk,true);
		$criteria->compare('oferta_laboral_fk',$this->oferta_laboral_fk);
		$criteria->compare('estudiante_fk',$estudiante_fk);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}