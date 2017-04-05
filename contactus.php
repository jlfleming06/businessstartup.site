<?php include('includes/config.php'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Contact Info - <?php echo WEBSITE_NAME; ?></title>
<meta content="index,follow" name=ROBOTS>
<meta content="2 days" name=REVISIT-AFTER>
<meta content="Contact Info - <?php echo WEBSITE_NAME; ?>" name=DESCRIPTION>
<meta content="Contact Info - <?php echo WEBSITE_NAME; ?>" name=KEYWORDS>
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
<style>
#contact { display: block; width: 500px; margin: 7px auto; padding: 5px; border: 0px solid #cbcbcb; background-color: #FFF; -moz-border-radius: 5px; -webkit-border-radius:5px; font:12px Arial, sans-serif;}

label { display: inline-block; float: left; height: 26px; line-height: 26px; width: 155px; font:12px Arial, sans-serif; }

input, textarea, select { margin: 0; padding: 5px; color: #666; background: #f5f5f5; border: 1px solid #ccc; margin: 5px 0; font:12px Arial, sans-serif; -moz-border-radius: 5px; -webkit-border-radius:5px; }

input:focus, textarea:focus, select:focus { border: 1px solid #999; background-color: #fff; color:#333; }

input.submit { cursor: pointer; border: 1px solid #222; background:#333; color:#fff; -moz-border-radius: 5px; -webkit-border-radius:5px; }

input.submit:hover { background:#444; }

fieldset { padding:20px; border:1px solid #eee; -moz-border-radius: 5px; -webkit-border-radius:5px; }

legend { padding:7px 10px; font-weight:bold; color:#000; border:1px solid #eee; -moz-border-radius: 5px; -webkit-border-radius:5px; }

span.required{ font-size: 12px; color: #ff0000; } /* Select the colour of the * if the field is required. */

.error_message { display: block; height: 22px; line-height: 22px; background: #FBE3E4 url('assets/error.gif') no-repeat 10px center; padding: 3px 10px 3px 35px; margin: 10px 0; color:#8a1f11;border: 1px solid #FBC2C4; -moz-border-radius: 5px; -webkit-border-radius:5px; }

#succsess_page h1 { background: url('assets/success.gif') left no-repeat; padding-left:22px; }
</style>
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

			<h1>Questions? Comments?</h1>

				<div id="contact">

			<?php
					// Attention! Please read the following.
					// It is important you do not edit pieces of code that arent tagged as a configurable options identified by the following:

					// Configuration option.

					// Each option that is easily editable has a modified example given.


					$error		= '';
					$name		= '';
					$email		= '';
					$subject	= '';
					$comments	= '';
					$verify		= '';

					if(isset($_POST['contactus'])) {

					$name		= $_POST['name'];
					$email		= $_POST['email'];
					$subject	= $_POST['subject'];
					$comments	= $_POST['comments'];
					$verify		= $_POST['verify'];


					// Configuration option.
					// You may change the error messages below.
					// e.g. $error = 'Attention! This is a customised error message!';

					if(trim($name) == '') {
						$error = '<div class="error_message">Attention! You must enter your name.</div>';
					} else if(trim($email) == '') {
						$error = '<div class="error_message">Attention! Please enter a valid email address.</div>';

					// Configuration option.
					// Remove the // tags below to active phone number.
					//} else if(!is_numeric($phone)) {
					// $error = '<div class="error_message">Attention! Phone number can only contain digits.</div>';

					} else if(!isEmail($email)) {
						$error = '<div class="error_message">Attention! You have enter an invalid e-mail address, try again.</div>';
					}

					if(trim($subject) == '') {
						$error = '<div class="error_message">Attention! Please enter a subject.</div>';
					} else if(trim($comments) == '') {
						$error = '<div class="error_message">Attention! Please enter your message.</div>';
					} else if(trim($verify) == '') {
						$error = '<div class="error_message">Attention! Please enter the verification number.</div>';
					} else if(trim($verify) != '9') {
						$error = '<div class="error_message">Attention! The verification number you entered is incorrect.</div>';
					}

					if($error == '') {

						if(get_magic_quotes_gpc()) {
							$comments = stripslashes($comments);
						}


					// Configuration option.
					// Enter the email address that you want to emails to be sent to.
					// Example $address = "joe.doe@yourdomain.com";

					$address = file_get_contents("includes/email-address.txt");

					// Configuration option.
					// i.e. The standard subject will appear as, "You've been contacted by John Doe."

					// Example, $e_subject = '$name . ' has contacted you via Your Website.';

					$e_subject = 'You\'ve been contacted by ' . $name . '.';


					// Configuration option.
					// You can change this if you feel that you need to.
					// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.

					$e_body = "You have been contacted by $name with regards to $subject.  Their message is - \r\n\n";
					$e_content = "\"$comments\"\r\n\n";

					// Configuration option.
					// RIf you active phone number, swap the tags of $e-reply below to include phone number.
					$e_reply = "You can contact $name via their email address which is $email";

					$msg = $e_body . $e_content . $e_reply;

					if(mail($address, $e_subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n"))
					{
						// Email has sent successfully, echo a success page.

						 echo "<div id='succsess_page'>";
						 echo "<p>Thank you <strong>$name</strong>, your message has been successfully submitted to us.</p>";
						 echo "</div>";
					 } else echo "Error. Mail not sent";

					}
				}

					if(!isset($_POST['contactus']) || $error != '') // Do not edit.
					{
			?>


						<?php echo $error; ?>

						<fieldset>

						<form method="post" action="">

						<label for=name accesskey=U><span class="required">*</span> Your Name</label>
						<input name="name" type="text" id="name" size="30" value="<?php echo $name; ?>" />

						<br />
						<label for=email accesskey=E><span class="required">*</span> Email</label>
						<input name="email" type="text" id="email" size="30" value="<?php echo $email; ?>" />

						<br />
						<label for=subject accesskey=S><span class="required">*</span> Subject</label>
						<select name="subject" id="subject">
							<option value="Support">Support</option>
							<option value="a Sale">Sales</option>
							<option value="a Bug fix">Report a bug</option>
						</select>

						<br />
						<label for=comments accesskey=C><span class="required">*</span> Your comments</label>
						<textarea name="comments" cols="40" rows="3" id="comments"><?php echo $comments; ?></textarea>
						<br>
						<label for=verify accesskey=V><span class="required">*</span>&nbsp;&nbsp;&nbsp;What is 7 + 2?</label>
						<input name="verify" type="text" id="verify" size="4" value="<?php echo $verify; ?>" /></p>

						<div align="center"><input name="contactus" type="submit" class="submit" id="contactus" value="Send Your Message" /></div>

						</form>

						</fieldset>

			<?php }

			function isEmail($email) { // Email address verification, do not edit.
			return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
			}

			?>

			</div>

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
