<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<div class="slider-wrapper theme-default">
            <div class="ribbon"></div>				
            <div id="slider" class="nivoSlider">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/step1.png" alt="" />
                <a href="http://feedingamerica.org"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/step2.png" alt="" title="FeedingAmerica.org" /></a>
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/step3.png" alt="" />
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/step4.png" alt="" />
            </div>
        </div>

</div>
<br/><br/>
<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
	
$(window).load(function() {
	$('#slider').nivoSlider();
});
</script>