<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	/*

	
    /**
     * Authenticates a user.
     * @return boolean whether authentication succeeds.
     */
    private $_id;
    public function authenticate()
    {
        $username = strtolower($this->username);
        $password = md5($this->password);
        

        $criteria=new CDbCriteria;
		$criteria->select='*';
		$criteria->condition="username=:username";
		$criteria->addCondition("password=:password");
		$criteria->params=array(':username'=>$username,':password'=>$password);
		$user=User::model()->find($criteria);
		//print_r($user);exit;
        // from database... change to suit your authentication criteria
        // -- Nope, I wont include mine --
        //$user = User::model()->find('LOWER(username)=?', array($username));
        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($password != $user->password)
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else{
            // successful login
            $this->_id = $user->id;
            $this->username = $user->username;
            $this->errorCode = self::ERROR_NONE;
        }
        return $this->errorCode == self::ERROR_NONE;
    }
    public function getId()
    {
        return $this->_id;
    }

    public function getUsername()
    {
        return $this->username;
    }


}