<?php

/**
 * This is the model class for table "tbl_brokers".
 *
 * The followings are the available columns in table 'tbl_brokers':
 * @property integer $id
 * @property string $broker_title
 * @property string $h1
 * @property string $meta_title
 * @property string $meta_description
 * @property string $broker_url
 * @property string $broker_image
 * @property string $bonus_title
 * @property string $bonus_desc
 * @property string $min_deposit
 * @property string $spreads_from
 * @property integer $user_score
 * @property string $max_leverage
 * @property string $regulation
 * @property string $review_title
 * @property string $pros
 * @property string $cons
 * @property integer $score
 * @property string $site_address
 * @property string $broker_short_desc
 * @property string $broker_detail_desc
 * @property string $telephone
 * @property string $pairs_offered
 * @property string $markets
 * @property string $deposit_options
 * @property integer $total_rating
 * @property integer $total_rating_user
 * @property string $create_date
 * @property string $update_date
 */
class Brokers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_brokers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('broker_title, h1, meta_title, meta_description, broker_url, bonus_title, bonus_desc, min_deposit, spreads_from, user_score, max_leverage, regulation, review_title, pros, cons, score, site_address, broker_short_desc, broker_detail_desc, telephone, pairs_offered, markets, deposit_options, education, total_rating, total_rating_user, create_date, update_date', 'required'),
			array('user_score, score, total_rating, total_rating_user', 'numerical', 'integerOnly'=>true),
			array('broker_title, h1, meta_title, broker_url, broker_image, site_address', 'length', 'max'=>200),
			array('bonus_title, meta_title, bonus_desc, min_deposit, review_title, pros, cons, broker_short_desc', 'length', 'max'=>2000),
			array('broker_detail_desc', 'length', 'max'=>20000),
			array('pairs_offered, markets', 'length', 'max'=>3000),
			array('deposit_options', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, broker_title, h1, meta_title, meta_description, broker_image, bonus_title, bonus_desc, min_deposit, spreads_from, user_score, max_leverage, regulation, review_title, pros, cons, score, site_address, broker_short_desc, broker_detail_desc, telephone, pairs_offered, markets, deposit_options, education, total_rating, total_rating_user, create_date, update_date', 'safe', 'on'=>'search'),
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
			'broker_title' => 'Broker Title',
			'h1' => 'H1',
			'meta_title' => 'Meta Title',
			'meta_description' => 'Meta Description',
			'broker_url' => 'Broker Url',
			'broker_image' => 'Broker Image',
			'bonus_title' => 'Bonus Title',
			'bonus_desc' => 'Bonus Desc',
			'min_deposit' => 'Min Deposit',
			'spreads_from' => 'Spreads From',
			'user_score' => 'User Score',
			'max_leverage' => 'Max Leverage',
			'regulation' => 'Regulation',
			'review_title' => 'Review Title',
			'pros' => 'Pros',
			'cons' => 'Cons',
			'score' => 'Score',
			'site_address' => 'Site Address',
			'broker_short_desc' => 'Broker Short Desc',
			'broker_detail_desc' => 'Broker Detail Desc',
			'telephone' => 'Telephone',
			'pairs_offered' => 'Pairs Offered',
			'markets' => 'Markets',
			'deposit_options' => 'Deposit Options',
			'education' => 'Education',
			'total_rating' => 'Total Rating',
			'total_rating_user' => 'Total Rating User',
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
		$criteria->compare('broker_title',$this->broker_title,true);
		$criteria->compare('h1',$this->h1,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_description',$this->meta_description,true);
		$criteria->compare('broker_url',$this->broker_url,true);
		$criteria->compare('broker_image',$this->broker_image,true);
		$criteria->compare('bonus_title',$this->bonus_title,true);
		$criteria->compare('bonus_desc',$this->bonus_desc,true);
		$criteria->compare('min_deposit',$this->min_deposit,true);
		$criteria->compare('spreads_from',$this->spreads_from,true);
		$criteria->compare('user_score',$this->user_score);
		$criteria->compare('max_leverage',$this->max_leverage,true);
		$criteria->compare('regulation',$this->regulation,true);
		$criteria->compare('review_title',$this->review_title,true);
		$criteria->compare('pros',$this->pros,true);
		$criteria->compare('cons',$this->cons,true);
		$criteria->compare('score',$this->score);
		$criteria->compare('site_address',$this->site_address,true);
		$criteria->compare('broker_short_desc',$this->broker_short_desc,true);
		$criteria->compare('broker_detail_desc',$this->broker_detail_desc,true);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('pairs_offered',$this->pairs_offered,true);
		$criteria->compare('markets',$this->markets,true);
		$criteria->compare('deposit_options',$this->deposit_options,true);
		$criteria->compare('education',$this->education,true);
		$criteria->compare('total_rating',$this->total_rating);
		$criteria->compare('total_rating_user',$this->total_rating_user);
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
	 * @return Brokers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
