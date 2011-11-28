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
	 * @return boolean whether authentication succeeds.
	 */
    public function authenticate()
    {
        $record=Users::model()->findByAttributes(array('username'=>$this->username));
		
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($record->password!==$this->password)
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->setState('firstname', $record->firstname);
            $this->setState('lastname', $record->lastname);
            $this->setState('email', $record->emailaddress);
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }
}