<?php
$this->pageTitle=Yii::app()->name . ' - Profile';
$this->breadcrumbs=array(
	'Profile',
);

if (Yii::app()->user->isGuest)
	$this->redirect(Yii::app()->createUrl('site/login'));
?>

<h1>Profile Page</h1>