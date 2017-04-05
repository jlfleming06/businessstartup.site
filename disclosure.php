<?php include('includes/config.php'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Disclosure - <?php echo WEBSITE_NAME; ?></title>
<meta content="index,follow" name=ROBOTS>
<meta content="2 days" name=REVISIT-AFTER>
<meta content="Disclosure - <?php echo WEBSITE_NAME; ?>" name=DESCRIPTION>
<meta content="Disclosure - <?php echo WEBSITE_NAME; ?>" name=KEYWORDS>
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74392375-1', 'auto');
  ga('send', 'pageview');

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

			<H1>Disclosure Statement For <?php echo WEBSITE_NAME; ?></H1>
			<p>
			This website is a sponsored site created or supported by a company, organization or group of organizations. For questions about this site, please contact us.
			<BR><BR>
			This website accepts forms of cash advertising, sponsorship, paid insertions or other forms of compensation.
			<BR><BR>
			The compensation received may influence the advertising content, topics or posts made in this website. That content, advertising space or post may not always be identified as paid or sponsored content.
			<BR><BR>
			The owner(s) of this website is compensated to provide opinion on products, services, websites and various other topics. Even though the owner(s) of this website receives compensation for our posts or advertisements, we always give our honest opinions, findings, beliefs, or experiences on those topics or products. The views and opinions expressed on this website are purely the bloggers' own. Any product claim, statistic, quote or other representation about a product or service should be verified with the manufacturer, provider or party in question.
			<BR><BR>
			This website does not contain any content which might present a conflict of interest.
			</p>

		<!-- Ebay -->
			<div align="center"><BR><BR>
			<?php include("includes/ebayreplacement.txt"); ?>
	        <script type="text/javascript" src='http://adn.ebay.com/files/js/min/jquery-1.6.2-min.js'></script>
			<script type="text/javascript" src='http://adn.ebay.com/files/js/min/ebay_activeContent-min.js'></script>
			<script charset="utf-8" type="text/javascript">
			document.write('\x3Cscript type="text/javascript" charset="utf-8" src="http://adn.ebay.com/cb?programId=1&campId=<?php echo EBAYAFF_ID; ?>&toolId=10026&keyword=<?php echo KEYWORD; ?>&width=560&height=<?php echo EBAY_HEIGHT; ?>&font=1&textColor=000000&linkColor=0a0a6d&arrowColor=8BBC01&color1=709AEE&color2=[COLORTWO]&format=ImageLink&contentType=TEXT_AND_IMAGE&enableSearch=y&usePopularSearches=n&freeShipping=n&topRatedSeller=n&itemsWithPayPal=n&descriptionSearch=n&showKwCatLink=n&excludeCatId=&excludeKeyword=&catId=&disWithin=200&ctx=n&autoscroll=y&flashEnabled=' + isFlashEnabled + '&pageTitle=' + _epn__pageTitle + '&cachebuster=' + (Math.floor(Math.random() * 10000000 )) + '">\x3C/script>' );
			</script><BR><BR></div>
		<!-- END Ebay -->

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
</body>
</html>
