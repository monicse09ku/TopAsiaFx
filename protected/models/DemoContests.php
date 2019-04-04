<?php

/**
 * This is the model class for table "demo_contests".
 *
 * The followings are the available columns in table 'demo_contests':
 * @property integer $id
 * @property string $title
 * @property string $url
 * @property string $image
 * @property string $details
 * @property integer $status
 * @property integer $total_rating
 * @property integer $total_rater
 * @property string $average_rating
 * @property string $available_till
 * @property integer $total_comments
 * @property string $create_date
 * @property string $update_date
 */
class DemoContests extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'demo_contests';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, url, image, details, available_till, create_date, update_date', 'required'),
			array('status, total_rating, total_rater, total_comments', 'numerical', 'integerOnly'=>true),
			array('title, url, image', 'length', 'max'=>200),
			array('average_rating', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, url, image, details, status, total_rating, total_rater, average_rating, available_till, total_comments, create_date, update_date', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'url' => 'Url',
			'image' => 'Image',
			'details' => 'Details',
			'status' => 'Status',
			'total_rating' => 'Total Rating',
			'total_rater' => 'Total Rater',
			'average_rating' => 'Average Rating',
			'available_till' => 'Available Till',
			'total_comments' => 'Total Comments',
			'create_date' => 'Create Date',
			'update_date' => 'Update Date',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('details',$this->details,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('total_rating',$this->total_rating);
		$criteria->compare('total_rater',$this->total_rater);
		$criteria->compare('average_rating',$this->average_rating,true);
		$criteria->compare('available_till',$this->available_till,true);
		$criteria->compare('total_comments',$this->total_comments);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('update_date',$this->update_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DemoContests the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
