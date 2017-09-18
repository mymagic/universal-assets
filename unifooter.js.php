<?php header('Content-Type: application/javascript'); 

$html = '
<section class="contact">
   <div class="container">
		<div class="row">
			<div class="col-md-2">
				<img class="contact__logo" src="//mymagic.my/wp-content/themes/magic2017/assets/art/logo-white.svg"/>
			</div>
			<div class="col-md-7">
				<ul class="list-inline contact__address">
					<li>Block 3730 Persiaran APEC 63000 Cyberjaya Malaysia</li>
					<li><a href="mailto:enquiries@mymagic.my">enquiries@mymagic.my</a></li>
					<li>+60 3 8324 4800</li>
				</ul>
			</div>
			<div class="col-md-3">
				<ul class="list-inline contact__social">
					<li><a href="https://facebook.com/magic.cyberjaya" target="_blank"><i class="icon-facebook-official"></i></a></li>
					<li><a href="https://twitter.com/magiccyberjaya" target="_blank"><i class="icon-twitter"></i></a></li>
					<li><a href="https://instagram.com/magic_cyberjaya" target="_blank"><i class="icon-instagram"></i></a></li>
					<li><a href="https://youtube.com/channel/UCIT_ihmWh5f3MCobvEwWMaA" target="_blank"><i class="icon-youtube-play"></i></a></li>
					<li><a href="https://my.linkedin.com/in/magiccyberjaya" target="_blank"><i class="icon-linkedin"></i></a></li>
				</ul>
			</div>
		</div>
   </div>
</section>

<div class="container hidden-xs">
	<div class="row">
		<div class="col-lg-1 col-sm-2">
			<h5>MaGIC</h5>
			<ul class="nav nav-stacked">
				<li><a href="https://mymagic.my">Home</a></li>
				<li><a href="https://mymagic.my/about/mandate/">Our Mandate</a></li>
				<li><a href="https://mymagic.my/about/our-people/">Our Team</a></li>
				<li><a href="https://mymagic.my/community">Community</a></li>
				<li><a href="https://mymagic.my/programs/">Programs</a></li>
				<li><a href="https://mymagic.my/events/?fwp_event_date=upcoming">Events</a></li>
				<li><a href="https://mymagic.my/courses/?fwp_course_date=upcoming">Courses</a></li>
				<li><a href="https://mymagic.my/news/">News</a></li>
				<li><a href="https://mymagic.my/jobs/">Jobs</a></li>
				<li><a href="https://mymagic.my/contact/">Contact</a></li>
			</ul>
		</div>
		<!--div class="col-lg-1 col-sm-2">
			<h5>Academy</h5>
			<ul class="nav nav-stacked">
				<li><a href="http://academy.mymagic.my/en/categories/">Courses</a></li>
				<li><a href="http://academy.mymagic.my/ma2016/">Symposium</a></li>
			</ul>
		</div-->
		<div class="col-lg-1 col-sm-2">
			<h5>Accelerator</h5>
			<ul class="nav nav-stacked">
				<li><a href="https://mymagic.my/gap/">GAP</a></li>
				<li><a href="https://mymagic.my/distro-dojo/">Distro Dojo</a></li>
			</ul>
		</div>
		<div class="col-lg-1 col-sm-2">
			<h5>Global</h5>
			<ul class="nav nav-stacked">
				<li><a href="https://mymagic.my/idea/">Ideas</a></li>
				<li><a href="https://mymagic.my/estanford-program/">e@Stanford</a></li>
				<li><a href="http://global.mymagic.my/en/stanford/">Programs with Standford</a></li>
				<li><a href="http://global.mymagic.my/en/regional/">Regional Conference</a></li>
			</ul>
		</div>
		<div class="col-lg-1 col-sm-2">
			<h5>Central</h5>
			<ul class="nav nav-stacked">
				<li><a href="http://resource.mymagic.my">Resource Tool</a></li>
				<li><a href="http://magiccentral.userecho.com/">Q&amp;A Forum</a></li>
				<li><a href="http://central.mymagic.my/booking/">Appointment</a></li>
			</ul>
		</div>
		<div class="col-lg-1 col-sm-2">
			<h5>SE</h5>
			<ul class="nav nav-stacked">
				<li><a href="https://mymagic.my/publications/">Publications</a></li>
				<!--li><a href="http://se.mymagic.my/en/ventures/">Ventures</a></li>
				<li><a href="http://se.mymagic.my/en/academy/">Academy</a></li>
				<li><a href="http://se.mymagic.my/en/community/">Community</a></li>
				<li><a href="http://se.mymagic.my/en/the-team/">The Team</a></li>
				<li><a href="http://se.mymagic.my/en/amplify/">Amplify Awards</a></li>
				<li><a href="http://se.mymagic.my/en/magic-social-enterprise-fellowship-program-2016/">SE Fellowship</a></li-->
			</ul>
		</div>
		<div class="clearfix visible-sm-block visible-md-block"></div>
		<div class="col-lg-1 col-sm-2">
			<h5>ACE</h5>
			<ul class="nav nav-stacked">
				<li><a href="http://ace.mymagic.my/service/">Services</a></li>
				<li><a href="https://mymagic.my/asean-startup-ecosystem/">ASEAN Startup Ecosystem</a></li>
				<li><a href="http://ace.mymagic.my/contact/">Contact ACE</a></li>
			</ul>
		</div>
		<div class="col-lg-1 col-sm-2">
			<h5>Impact</h5>
			<ul class="nav nav-stacked">
				<li><a href="http://impact.mymagic.my/">Year One Review</a></li>
			</ul>
		</div>
		<div class="col-lg-1 col-md-offset-1 col-sm-2 col-sm-offset-2">
			<h5>Site</h5>
			<ul class="nav nav-stacked">
				<li><a href="https://mymagic.my/terms-of-use/">Terms of Use</a></li>
				<li><a href="https://mymagic.my/privacy-policy/">Privacy Policy</a></li>
			</ul>
		</div>
		<div class="col-lg-1 col-sm-2">
			<h5>Tools</h5>
			<ul class="nav nav-stacked">
				<li><a href="http://www.startupdb.asia/">Startup DB</a></li>
				<li><a href="http://jomstartup.mymagic.my/">JomStartup</a></li>
				<li><a href="http://profile.mymagic.my/">Profile</a></li>
				<li><a href="http://atasbe.mymagic.my/">ATAS</a></li>
			</ul>
		</div>
		<div class="col-lg-1 col-sm-2">
			<h5>My Account</h5>
			<ul class="nav nav-stacked">
				<li><a href="http://account.mymagic.my/login">Login</a></li>
				<li><a href="http://account.mymagic.my/register">Register</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="footer__copy">
	<div class="container">
		<div class="row">
			<div class="col-sm-12"><p>MaGIC is an initiative by Ministry of Finance of Malaysia</p></div>
		</div>
	</div>
</div>';

$html_clean = json_encode($html);
?>
// create namespace _muf (magic universal footer)
var _muf = _muf || {};

_muf.config = {};
_muf.config.isDebug = false;
//_muh.config.isLogin = false;
	
_muf.checkStyleSheet = function(url)
{
   var found = false;
   for(var i = 0; i<document.styleSheets.length; i++){
	  if(document.styleSheets[i].href==url){
		  found=true;
		  break;
	  }
   }
   if(!found){
	   jQuery('head').append(
		   jQuery('<link rel="stylesheet" type="text/css" href="' + url + '" />')
	   );
   }
}

_muf.render =  function()
{
	if(_muf.config.currentUrl == null) _muf.config.currentUrl = window.location.href;
	
	// load external css for color-bar and uni-header
	if(_muf.config.isDebug)
	{
		//_muf.checkStyleSheet('../css/bootstrap-social.css');
		//_muf.checkStyleSheet('../css/universal-style.css');
	}
	else
	{
		//_muf.checkStyleSheet('//mymagic.my/universal-assets/css/bootstrap-social.css');
		//_muf.checkStyleSheet('//mymagic.my/universal-assets/css/universal-style.css');
	}
	
	if(_muf.config.isForceFAEnabled)
	{
		//_muf.checkStyleSheet('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
	}
	
	// auto create color-bar and uni-header if tag not found
	if( !jQuery('.uni-footer').length )
	{
		jQuery("body").append( '<div class="uni-footer"></div>' );
	}
	jQuery(".uni-footer").empty();
	jQuery(".uni-footer").prepend(<?php echo $html_clean ?>);
}

/*window.onbeforeunload = function() {
    return "You're leaving the site.";
};
jQuery(document).ready(function() {
    jQuery('a[rel!=ext]').click(function() { window.onbeforeunload = null; });
});*/

_muf.render();