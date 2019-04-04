<?php

/**
 * EWebUser represents the data needed to identity a usersrole.
 */
class EWebUser extends CWebUser{
 
    protected $_model;

    const MALE = 1;
    const FEMALE  = 2;

    const IMAGE = 1;
    const URL  = 2;

    const HEAD = 1;
    const LEFT  = 2;
    const RIGHT  = 3;
    const POPUP  = 4;

    const APPROVED = 1;
    const NOTAPPROVED  = 0;

    // For CGridView, CListView Purposes
    public static function getGender( $level ){
        if($level == self::MALE)
        return 'Male';
        if($level == self::FEMALE)
        return 'Female';
        return false;
    }
    // for dropdown lists purposes
    public static function getGenderList(){
        return array(
        self::MALE=>'Male',
        self::FEMALE=>'Female');
    }

    // for approved lists purposes
    public static function getApproved(){
        return array(
            self::NOTAPPROVED=>'Not Approved',
            self::APPROVED=>'Approved'
        );
    }

    // for approved lists purposes
    public static function getFaqsPages(){
        $url_list = array(
                        'home'=>'Home',
                        'forex-deposit-bonuses'=>'Forex Deposit Bonuses',
                        'forex-nodeposit-bonuses'=>'Forex No Deposit Bonuses',
                        'demo-contests'=>'Demo Contests',
                        'live-contests'=>'Live Contests',
                    );

        $sql = "SELECT broker_url FROM tbl_brokers";

        $brokers_urls = Yii::app()->db->createCommand($sql)->queryAll();

        if(!empty($brokers_urls)){
            foreach ($brokers_urls as $key => $value) {
                $url_list[$value['broker_url']] = $value['broker_url'];
            }
        }
        

        return $url_list;
    }

    // for approved lists purposes
    public static function isImage(){
        return array(
            self::IMAGE=>'Image',
            self::URL=>'Url'
        );
    }

    // for approved lists purposes
    public static function selectBannerPosition(){
        return array(
            self::HEAD=>'Head',
            self::LEFT=>'Left',
            self::RIGHT=>'Right',
            self::POPUP=>'Popup',
        );
    }

    public static function getBannerPosition( $position ){
        if($position == self::HEAD)
        return 'HEAD';
        if($position == self::LEFT)
        return 'LEFT';
        if($position == self::RIGHT)
        return 'RIGHT';
        if($position == self::POPUP)
        return 'POPUP';
        return false;
    }

    function isAdmin(){
        $user = $this->loadUser();
        if ($user)
           return $user->role==LevelLookUp::ADMIN;
        return false;
    }
 
    function isMember(){
        $user = $this->loadUser();
        if ($user)
           return $user->role==LevelLookUp::MEMBER;
        return false;
    }

    function isThisUser($id){
        $user = $this->loadUser();
        if ($user->id == $id)
           return true;
        return false;
    }

    // Load user model.
    protected function loadUser()
    {
        if ( $this->_model === null ) {
                $this->_model = User::model()->findByPk( $this->id );
        }
        return $this->_model;
    }

    function redirectToHome(){
        Yii::app()->request->redirect(Yii::app()->request->getBaseUrl(true).'/site/login');
    }

    public function verifyEmail($email){
        $verified_email = '';
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $verified_email = 'Invalid email provide. Please provide a valid email'; 
        }else{
            $email_exist = User::model()->find(array(
                'select'=>'id',
                'condition'=>'email=:email',
                'params'=>array(':email'=>$email))
                );
            if(!empty($email_exist)){
                $verified_email = 'Email already taken. Use another email'; 
            }
        }

        return $verified_email;
    }

 
}