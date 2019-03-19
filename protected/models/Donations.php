<?php

class Donations extends CActiveRecord
{
	/**
	 * @var integer ID of this record
	 */
	public $id;
	/**
	 * @var integer foreign key UserID
	 */
	//public $userid; //do we need this?
	/**
	 * @var double ammount
	 */
	public $amount;
	/**
	 * @var datetime datedonated
	 */
	public $datedonated;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}