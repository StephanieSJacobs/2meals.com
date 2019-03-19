<?php $this -> pageTitle = Yii::app() -> name;?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app() -> name);?></i></h1>
<form action="https://secure.feedingamerica.org/site/Donation2?df_id=8042&amp;PROXY_ID=3640&amp;PROXY_TYPE=31&amp;FR_ID=1141" id="TributeFund" name="TributeFund" method="post">
	<input type="hidden" value="" >
	<input type="hidden" name="pg" id="pg" value="fund">
	<input type="hidden" name="fr_id" id="fr_id" value="1141">
	<input type="hidden" name="pxfid" id="pxfid" value="3640">
	<input type="hidden" name="fund_id" id="fund_id" value="">
</form>
<div class="slider-wrapper theme-default">
	<div id="slider" class="nivoSlider" >
		<a href="javascript: submitform()"><img src="images/step1.png" alt="" /></a>
		<a href="javascript: submitform()"><img src="images/step2.png" alt="" /></a>
		<a href="javascript: submitform()"><img src="images/step3.png" alt="" /></a>
		<a href="javascript: submitform()"><img src="images/step4.png" alt="" /></a>
	</div>
</div>
<br/>
<br/>
<?php Yii::app() -> clientScript -> registerCoreScript('jquery');?>
<script type="text/javascript" src="<?php echo Yii::app() -> request -> baseUrl;?>/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider({
			effect : 'random', // Specify sets like: 'fold,fade,sliceDown'
			slices : 15, // For slice animations
			boxCols : 8, // For box animations
			boxRows : 4, // For box animations
			animSpeed : 500, // Slide transition speed
			pauseTime : 5500, // How long each slide will show
			startSlide : 0, // Set starting Slide (0 index)
			directionNav : true, // Next & Prev navigation
			directionNavHide : true, // Only show on hover
			controlNav : true, // 1,2,3... navigation
			controlNavThumbs : false, // Use thumbnails for Control Nav
			controlNavThumbsFromRel : false, // Use image rel for thumbs
			controlNavThumbsSearch : '.jpg', // Replace this with...
			controlNavThumbsReplace : '_thumb.jpg', // ...this in thumb Image src
			keyboardNav : true, // Use left & right arrows
			pauseOnHover : true, // Stop animation while hovering
			manualAdvance : false, // Force manual transitions
			captionOpacity : 0.8, // Universal caption opacity
			prevText : 'Prev', // Prev directionNav text
			nextText : 'Next', // Next directionNav text
			randomStart : false, // Start on a random slide
			beforeChange : function() {
			}, // Triggers before a slide transition
			afterChange : function() {
			}, // Triggers after a slide transition
			slideshowEnd : function() {
			}, // Triggers after all slides have been shown
			lastSlide : function() {
			}, // Triggers when last slide is shown
			afterLoad : function() {
			} // Triggers when slider has loaded
		});
	});
	function submitform() {
		document.forms["TributeFund"].submit();
	}
</script>