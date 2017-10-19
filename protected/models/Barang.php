<?php

/**
 * This is the model class for table "barang".
 *
 * The followings are the available columns in table 'barang':
 * @property integer $id
 * @property string $nama
 * @property integer $harga
 * @property string $deskripsi
 * @property string $gambar
 */
class Barang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $gambar; 
	public function tableName()
	{
		return 'barang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, harga, deskripsi, gambar', 'required'),
			array('harga', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>50),
			array('deskripsi', 'length', 'max'=>500),
			array('gambar','required','on'=>'create'),
			array('gambar','file','types'=>'jpg, gif, png',
				'allowEmpty'=>true,
				'maxSize'=>1024*1024*1,
				'tooLarge'=>'File terlalu besar, maksimal file 1 MB.'),
				
			
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama, harga, deskripsi, gambar', 'safe', 'on'=>'search'),
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
			'nama' => 'Nama',
			'harga' => 'Harga',
			'deskripsi' => 'Deskripsi',
			'gambar' => 'Gambar',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('harga',$this->harga);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('gambar',$this->gambar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Barang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
