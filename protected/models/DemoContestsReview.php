<?php

/**
 * This is the model class for table "demo_contests_review".
 *
 * The followings are the available columns in table 'demo_contests_review':
 * @property integer $id
 * @property integer $demo_contests_id
 * @property string $name
 * @property string $country
 * @property string $user_email
 * @property string $comment
 * @property integer $approved
 * @property integer $score
 * @property integer $priority
 * @property string $create_date
 * @property string $update_date
 */
class DemoContestsReview extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'demo_contests_review';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('demo_contests_id, name, country, user_email, comment, approved, score, create_date, update_date', 'required'),
			array('demo_contests_id, approved, score, priority', 'numerical', 'integerOnly'=>true),
			array('name, country, user_email', 'length', 'max'=>200),
			array('comment', 'length', 'max'=>5000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, demo_contests_id, name, country, user_email, comment, approved, score, priority, create_date, update_date', 'safe', 'on'=>'search'),
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
			'demo_contests_id' => 'Demo Contests',
			'name' => 'Name',
			'country' => 'Country',
			'user_email' => 'User Email',
			'comment' => 'Comment',
			'approved' => 'Approved',
			'score' => 'Score',
			'priority' => 'Priority',
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
		$criteria->compare('demo_contests_id',$this->demo_contests_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('approved',$this->approved);
		$criteria->compare('score',$this->score);
		$criteria->compare('priority',$this->priority);
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
	 * @return DemoContestsReview the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
