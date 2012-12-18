<?php

/**
 * This is the model class for table "encargados_practicas".
 *
 * The followings are the available columns in table 'encargados_practicas':
 * @property string $pk
 * @property integer $rut_epracti
 * @property string $nombre_encargado
 * @property string $apellido_encargado
 * @property integer $empresa_fk
 * @property integer $area_practica_fk
 */
class EncargadosPracticas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EncargadosPracticas the static model class
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
		return 'encargados_practicas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rut_epracti, nombre_encargado, apellido_encargado, empresa_fk, area_practica_fk', 'required'),
			array('rut_epracti, empresa_fk, area_practica_fk', 'numerical', 'integerOnly'=>true),
			array('nombre_encargado, apellido_encargado', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pk, rut_epracti, nombre_encargado, apellido_encargado, empresa_fk, area_practica_fk', 'safe', 'on'=>'search'),
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
                    'actividad' => array(self::BELONGS_TO, 'Rubros', 'area_practica_fk'),
                    //'empresaFk' => array(self::BELONGS_TO, 'Empresas', 'empresa_fk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pk' => 'Pk',
			'rut_epracti' => 'Rut Encargado',
			'nombre_encargado' => 'Nombre',
			'apellido_encargado' => 'Apellido',
			'empresa_fk' => 'Empresa',
			'area_practica_fk' => 'Area de Practica',
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
		$criteria->compare('rut_epracti',$this->rut_epracti);
		$criteria->compare('LOWER(nombre_encargado)',strtolower($this->nombre_encargado),true);
		$criteria->compare('LOWER(apellido_encargado)',strtolower($this->apellido_encargado),true);
		$criteria->compare('empresa_fk',$this->empresa_fk);
		$criteria->compare('area_practica_fk',$this->area_practica_fk);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}