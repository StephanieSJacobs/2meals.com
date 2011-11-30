<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class RegisterForm extends CFormModel
{
	public $firstname;
	public $lastname;
	public $emailaddress;
	public $username;
	public $password;
	public $password2;

	private $_user;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password, firstname, lastname, emailaddress (all fields) are required
			array('username, password, firstname, lastname, emailaddress', 'required'),
			// repeated password is required
			array('password2', 'required', 'message'=>'Password cannot be blank.'),
			// username must be unique in database
			array('username', 'unique'),
			// emailaddress must be a valid email address
			array('emailaddress','email'),
			// username must be between 3 and 12 characters
			array('username', 'length', 'min'=>3, 'max'=>12),
			// password must match password2
			array('password2', 'compare', 'compareAttribute'=>'password', 'message'=>'Password must be repeated exactly.'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'firstname' => 'First Name',
			'lastname' => 'Last Name',
			'emailaddress' => 'Email Address',
			'password2' => 'Re-Enter Password',
		);
	}

	/**
	 * Register the new user.
	 */
	public function register()
	{
		$_user = new Users;
		$_user->firstname = $this->firstname;
		$_user->lastname = $this->lastname;
		$_user->emailaddress = $this->emailaddress;
		$_user->username = $this->username;
		$_user->password = $this->password;
		
		if($_user->save())
			return true;
		else
			return false;
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_user===null)
		{
			$this->_user=new UserIdentity($this->username,$this->password);
			$this->_user->authenticate();
		}
		if($this->_user->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration= 3600/2; // session time is 30 minutes (half hour)
			Yii::app()->user->login($this->_user,$duration);
			return true;
		}
		else
			return false;
	}
}
