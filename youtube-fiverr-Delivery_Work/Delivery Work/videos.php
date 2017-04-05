<?php include('includes/config.php'); ?><!-- ** -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Videos For <?php echo WEBSITE_NAME; ?></title>
<meta content="index,follow" name=ROBOTS>
<meta content="2 days" name=REVISIT-AFTER>
<meta content="Videos For <?php echo WEBSITE_NAME; ?>" name=DESCRIPTION>
<meta content="Videos For <?php echo WEBSITE_NAME; ?>" name=KEYWORDS>
<link href="styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
<!--
function bookmarksite(title,url){
if (window.sidebar) // firefox
	window.sidebar.addPanel(title, url, "");
else if(window.opera && window.print){ // opera
	var elem = document.createElement('a');
	elem.setAttribute('href',url);
	elem.setAttribute('title',title);
	elem.setAttribute('rel','sidebar');
	elem.click();
}
else if(document.all)// ie
	window.external.AddFavorite(url, title);
}
-->
</script>
</head>
<body>
<div id="main">
	<div id="header">
	</div>
	<div id="navigation-bar">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="contactus.php">Contact Us</a></li>
			<li><a href="videos.php">Videos</a></li>
			<li><a href="sitemap.php">More Info</a></li>
		</ul>
	</div>
	<div id="article-box">
		<div id="content">

		<h1>Helpful Videos</h1>
		<script type="text/javascript">

			// You can change this value with your at anny time you want
			var keyword = "Internet Business Coaching",	// Keyword
				amount  = 10,	// Number max of videos
				width   = 480,	// Width of video in 'px'
				height  = 360;	// Heught of video in 'px'

		</script>
		<div id="videos"><br><br></div>
<div class="video-container">
	<iframe width="{{width}}" height="{{height}}" src="//www.youtube.com/embed/{{videoid}}" frameborder="0" allowfullscreen></iframe>
</div>
		</div>
		<div id="right-column">

		 <!-- AddThis -->
			<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
		    <a class="addthis_button_facebook"></a>
		    <a class="addthis_button_twitter"></a>
		    <a class="addthis_button_email"></a>
  		    <a class="addthis_button_google"></a>
    		<a class="addthis_button_compact"></a>
			</div>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo ADD_THIS_ID; ?>"></script>
	    <!-- END AddThis -->

	    <!-- Autoresponder -->
			<div id="autoresponder-box">
			<?php include("includes/autoresponder.txt"); ?>
			</div>
		<!-- END Autoresponder -->

		<!-- Adsense Block -->
			<div class="right-box">
			<?php include("includes/adsenseblock2.txt"); ?>
			</div>
		<!-- END Adsense Block -->

		<!-- Translate -->
			<div class="right-box">
			<div id="google_translate_element"></div><script>
			function googleTranslateElementInit() {
			new google.translate.TranslateElement({
			pageLanguage: 'en'
			}, 'google_translate_element');
			}
			</script>
			<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
			</div>
		<!-- END Translate -->

		<!-- Amazon Block -->
			<?php include("includes/amazon-ad-block.txt"); ?>
		<!-- END Amazon Block -->

		</div>
		<div id="footer">
	  		<A class="footerlink" href="index.php">Home</A>&nbsp;|&nbsp;
	  		<A class="footerlink" href="contactus.php">Contact Us</A>&nbsp;|&nbsp;
	  		<A class="footerlink" href="privacy.php">Privacy</A>&nbsp;|&nbsp;
	  		<A class="footerlink" href="terms.php">Terms</A>&nbsp;|&nbsp;
	  		Copyright © <?php echo date('Y'); ?> - All Rights Reserved&nbsp;|&nbsp;
	 		<A class="footerlink" href="disclosure.php">Disclosure</A>&nbsp;|&nbsp;
	 		<A class="footerlink" href="javascript:bookmarksite('<?php echo WEBSITE_NAME; ?>', '<?php echo SITE_URL; ?>')">Bookmark</a>&nbsp;|&nbsp;
	 		<A class="footerlink" href="sitemap.php">Sitemap</A>&nbsp;|&nbsp;
	 		<A class="footerlink" href="videos.php">Videos</A>
		</div>
	</div>
</div>
<?php include("includes/google-analytics.txt"); ?>
	
	<!-- Scripts of Youtube data api v3 -->
	<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
	<script src="videoscript.js"></script>
	<script src="https://apis.google.com/js/client.js?onload=init"></script>

</body>
</html>
