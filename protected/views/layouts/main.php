<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta property="og:title" content="2meals.com"/>
		<meta property="og:image" content="<?php echo CHtml::image(Yii::app() -> request -> baseUrl;?>/images/2mealsicon.png"/>
		<meta property="og:description" content="Help feed some hungry people today!"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="en" />
		<link rel="shortcut icon" href="<?php echo Yii::app() -> request -> baseUrl;?>/favicon.ico" type="image/x-icon" />
		<!-- blueprint CSS framework -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl;?>/css/screen.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl;?>/css/print.css" media="print" />
		<link rel="stylesheet" href="<?php echo Yii::app() -> request -> baseUrl;?>/themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo Yii::app() -> request -> baseUrl;?>/themes/pascal/pascal.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo Yii::app() -> request -> baseUrl;?>/themes/orman/orman.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo Yii::app() -> request -> baseUrl;?>/css/nivo-slider.css" type="text/css" media="screen" />
		<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl;?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl;?>/css/form.css" />
		<!--Google+ button Javascript-->
		<script type="text/javascript">
			window.___gcfg = {
				lang : 'en-US'
			}; (function() {
				var po = document.createElement('script');
				po.type = 'text/javascript';
				po.async = true;
				po.src = 'https://apis.google.com/js/plusone.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(po, s);
			})();

		</script>
		<!--Twitter Follow Button Javascript-->
		<script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
		<script type="text/javascript">
			(function() {
if (typeof window.janrain !== 'object') window.janrain = {};
window.janrain.settings = {};

janrain.settings.tokenUrl = "<?php echo Yii::app() -> createAbsoluteUrl('site/token');?>
	";

	function isReady() {
		janrain.ready = true;
	};

	if(document.addEventListener) {
		document.addEventListener("DOMContentLoaded", isReady, false);
	} else {
		window.attachEvent('onload', isReady);
	}

	var e = document.createElement('script');
	e.type = 'text/javascript';
	e.id = 'janrainAuthWidget';

	if(document.location.protocol === 'https:') {
		e.src = 'https://rpxnow.com/js/lib/2meals/engage.js';
	} else {
		e.src = 'http://widget-cdn.rpxnow.com/js/lib/2meals/engage.js';
	}

	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(e, s);
	})();
		</script>
		<title><?php echo CHtml::encode($this -> pageTitle);?></title>
	</head>
	<body>
		<div class="container" id="page">
			<div id="header">
				<div id="logo">
					<?php echo CHtml::image(Yii::app() -> request -> baseUrl . '/images/2mealsicon.png');?>
				</div>
			</div><!-- header -->
			<div id="mainmenu">
				<?php $this -> widget('zii.widgets.CMenu', array('items' => array( array('label' => 'Home Page', 'url' => array('/site/index')), array('label' => 'Profile Page', 'url' => array('/site/profile')), array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app() -> user -> isGuest), array('label' => 'Logout (' . Yii::app() -> user -> name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app() -> user -> isGuest), array('label' => 'About Us', 'url' => array('/site/page', 'view' => 'about')), array('label' => 'Contact Us', 'url' => array('/site/contact'))), ));?>
			</div><!-- mainmenu -->
			<?php if(isset($this->breadcrumbs)):
			?>
			<?php $this -> widget('zii.widgets.CBreadcrumbs', array('links' => $this -> breadcrumbs, ));?><!-- breadcrumbs -->
			<?php endif?>

			<?php echo $content;?>
			<div id="footer">
				Copyright &copy; 2011 by 2Meals.
				<br/>
				All Rights Reserved.
				<br/>
				<div id="follow_btns_box">
					<div id="followTxt">
						Follow us:
					</div>
					<div id="google_plus_follow_btn">
						<g:plusone annotation="none"></g:plusone>
					</div>
					<div id="twitter_follow_btn">
						<a href="https://twitter.com/2meals" class="twitter-follow-button">Follow @2meals</a>
					</div>
					<br/>
					<div id="like_btn">
						<iframe src="http://www.facebook.com/plugins/like.php?href=https://www.2meals.com/" scrolling="no" frameborder="0" style="border: none;"></iframe>
					</div>
				</div>
			</div><!-- footer -->
		</div><!-- page -->
	</body>
</html>
