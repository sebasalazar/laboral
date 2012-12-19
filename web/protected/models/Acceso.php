<?php

/**
 * This is the model class for table "accesos".
 *
 * The followings are the available columns in table 'accesos':
 * @property integer $pk
 * @property integer $rut
 * @property string $fecha
 * @property string $ip
 */
class Acceso extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Accesos the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'accesos';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('rut', 'required'),
            array('ip', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('pk, rut, fecha, ip', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'pk' => 'ID',
            'rut' => 'Rut',
            'fecha' => 'Fecha',
            'ip' => 'IP',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('pk', $this->pk);
        $criteria->compare('rut', $this->rut, true);
        $criteria->compare('fecha', $this->fecha, true);
        $criteria->compare('ip', $this->ip, true);
        

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}