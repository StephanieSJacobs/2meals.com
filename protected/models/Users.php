<?php

class Users extends CActiveRecord
{
	/**
	 * @var integer ID of this record
	 */
	public $id;
	/**
	 * @var string firstname
	 */
	public $firstname;
	/**
	 * @var string lastname
	 */
	public $lastname;
	/**
	 * @var string emailaddress
	 */
	public $emailaddress;
	/**
	 * @var string username
	 */
	public $username;
	/**
	 * @var string password
	 */
	public $password;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}