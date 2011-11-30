<?php
$this->pageTitle=Yii::app()->name . ' - Congratulations';
$this->breadcrumbs=array(
	'Congratulations',
);
?>
<script type="text/javascript">
	function Redirect(url)
	{
		location.href = url;
	}
</script>

<!--Facebook Script-->
<script type="text/javascript">
        function postToWall() {

            window.fbAsyncInit = function () {

                FB.init({

                    appId: '230078920391022',

                    status: true,

                    cookie: true,

                    xfbml: true

                });

                FB.ui({ method: 'feed',

                    message: 'Facebook for Websites is super-cool'

                });

            };

            (function (d) {

                var js, id = 'facebook-jssdk'; if (d.getElementById(id)) { return; }

                js = d.createElement('script'); js.id = id; js.async = true;

                js.src = "//connect.facebook.net/en_US/all.js";

                d.getElementsByTagName('head')[0].appendChild(js);

            } (document));

        }
</script>

<!--Google+ script-->
<script type="text/javascript">
      window.___gcfg = {
        lang: 'en-US'
      };

      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
</script>

<h1>Congratulations</h1>

<div id="congratsDiv">Thank you for your efforts, and well done! You just fed a lot people.</div>
<div id="shareTxt">Share about your donation, motivate others to the cause.</div>
<div id="shareBox">
	<div id="fcButton" onclick="postToWall()"></div><div id="google_plus_btn"><g:plusone annotation="none"></g:plusone></div><div id="tweetBtn"><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.2meals.com" data-text="I just fed a lot of people! Check it out at:" data-count="none">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></div><div id="finishedBtn"><input type="button" id="finishBtn" style="width:100px; height:30px" value="Finished" onclick="javascript:Redirect('http://www.2meals.com/index.php?r=site/profile');" /></div>
</div>
<div class="fb-login-button" style="visibility:hidden" data-perms="publish_stream">
    Login with Facebook
</div>