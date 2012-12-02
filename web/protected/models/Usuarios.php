<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $id
 * @property integer $username
 * @property string $password
 * @property string $salt
 * @property integer $roles
 */
class Usuarios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
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
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, salt', 'required'),
			array('roles', 'numerical', 'integerOnly'=>true),
			array('password', 'length', 'min'=>5, 'max'=>40),
			array('salt', 'length','max'=>32),
                        array('username', 'unique'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, salt, roles', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'salt' => 'Salt',
			'roles' => 'Roles',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('salt',$this->salt,true);
		$criteria->compare('roles',$this->roles);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function validatePassword($password)
        {
           return $this->hashPassword($password)===$this->password;
        }
        
        public function hashPassword($password)
        {
           return md5($password);
        }
        
        public function generateSalt()
        {
            return uniqid('',true);
        }
        
        public function beforeValidate()
        {
            $this->salt = $this->generateSalt();
            return parent::beforeValidate();
        }

        public function beforeSave()
        {
            $this->password = $this->hashPassword($this->password, $this->salt);
            return parent::beforeSave();
        }
}