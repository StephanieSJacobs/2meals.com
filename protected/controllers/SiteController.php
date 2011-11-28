<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(			
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->createUrl('site/profile'));
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}
	
	/**
	 * Displays the registration page
	 */
	public function actionRegister()
	{
		$model=new RegisterForm;

		// collect user input data
		if(isset($_POST['RegisterForm']))
		{
			$model->attributes=$_POST['RegisterForm'];
			// save user input in db and login, then redirect to the profile page
			if($model->register() && $model->login())
				$this->redirect(Yii::app()->createUrl('site/profile')); //change this to profile page once created
		}
		// display the login form
		$this->render('register',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function actionToken()
	{
		/** 
		* render the token page
		* the token form collects the openID token via CURL,
		* validates the user, logs them in
		* then redirects to the profile page
		* is user is not in system, they are redirected to register page
		*/
		$this->render('token',array());
		
	}
	
	public function actionProfile()
	{
		$this->render('profile',array());
	}

	//May not need functions below
	
	/**
	 * Returns user records.
	 * @return the user record
	 * @soap
	 */
	/*public function getUser($User)
	{
		return Users::model()->findByPk($User->id);
	}*/

	/**
	 * Updates or inserts a user.
	 * If the ID is null, an insertion will be performed;
	 * Otherwise it updates the existing one.
	 * @param User user model
	 * @return boolean whether saving is successful
	 */
	/*public function saveUser($User)
	{
		if($User->id > 0) // update
		{
			$User->isNewRecord=false;
			if(($oldUser=Users::model()->findByPk($User->id))!==null)
			{
				$oldUser->attributes=$User->attributes;
				return $oldUser->save();
			}
			else
				return false;
		}
		else // insert
		{
			$User->isNewRecord=true;
			$User->id=null;
			return $User->save();
		}
	}*/

	/**
	 * Deletes the specified user record.
	 * @param integer ID of the user to be deleted
	 * @return integer number of records deleted
	 */
	/*public function deleteContact($id)
	{
		return Users::model()->deleteByPk($id);
	}*/
}