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
	// public function authenticate()
	// {
		// $users=array(
				//username => password
			// 'demo'=>'demo',
			// 'admin'=>'admin',
		// );
		// if(!isset($users[$this->username]))
			// $this->errorCode=self::ERROR_USERNAME_INVALID;
		// elseif($users[$this->username]!==$this->password)
			// $this->errorCode=self::ERROR_PASSWORD_INVALID;
		// else
			// $this->errorCode=self::ERROR_NONE;
		// return !$this->errorCode;
	// }
	
	private $_id;
 
	public function authenticate()
    {
        $user=User::model()->findByAttributes(array('login'=>$this->username));
		$hash = CPasswordHelper::hashPassword($user->password);

		// var_dump($this->password);
		// echo('</br>');
		// var_dump($user->password);
		// echo('</br>');
		// var_dump(CPasswordHelper::verifyPassword($this->password,$user->password));
		
        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if(!CPasswordHelper::verifyPassword($this->password,$hash))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$user->id;
            $this->setState('login', $user->login);
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }
 
    public function getId()
    {
        return $this->_id;
    }

}