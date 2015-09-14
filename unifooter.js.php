// create namespace _muf (magic universal footer)
var _muf = _muf || {};

_muf.config = {};
_muf.config.isDebug = false;
	
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
	   $('head').append(
		   $('<link rel="stylesheet" type="text/css" href="' + url + '" />')
	   );
   }
}

_muf.render =  function()
{
	if(_muf.config.currentUrl == null) _muf.config.currentUrl = window.location.href;
	
	// load external css for color-bar and uni-header
	if(_muf.config.isDebug)
	{
		_muf.checkStyleSheet('../css/bootstrap-social.css');
		_muf.checkStyleSheet('../css/universal-style.css');
	}
	else
	{
		_muf.checkStyleSheet('http://www.mymagic.my/universal-assets/css/bootstrap-social.css');
		_muf.checkStyleSheet('http://www.mymagic.my/universal-assets/css/universal-style.css');
	}
	
	if(_muf.config.isForceFAEnabled)
	{
		_muf.checkStyleSheet('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
	}
	
	// auto create color-bar and uni-header if tag not found
	if( !$('.uni-footer').length )
	{
		$("body").append( '<div class="uni-footer"></div>' );
	}
	$(".uni-footer").empty();
	$(".uni-footer").prepend("<div class=\"container\">\
		<div class=\"row\">\
		<div class=\"footer-logo\">\
			<a href=\"http://www.mymagic.my\"><img class=\"img-responsive\" src=\"http://www.mymagic.my/universal-assets/images/logobw.png\" alt=\"logobw\"></a>\
		</div>\
		<div class=\"menu\">\
			<ul class=\"footer-nav\">\
				<li><a href=\"http://www.mymagic.my/about\">ABOUT</a></li>\
				<li><a href=\"http://www.mymagic.my/community\">COMMUNITY</a></li>\
				<li><a href=\"http://www.mymagic.my/programs\">PROGRAMS</a></li>\
				<li><a href=\"http://www.mymagic.my/events\">EVENTS</a></li>\
			</ul>\
		</div>\
		<div class=\"menu\">\
			<ul class=\"footer-nav\">\
				<li><a href=\"http://www.mymagic.my/newsletter\">NEWSLETTER</a></li>\
				<li><a href=\"http://www.mymagic.my/news\">NEWS</a></li>\
				<li><a href=\"http://www.mymagic.my/jobs\">JOBS</a></li>\
				<li><a href=\"http://www.mymagic.my/contact\">CONTACT</a></li>\
			</ul>\
		</div>\
		<div class=\"menu\">\
			<ul class=\"footer-nav\"></ul>\
		</div>\
		<div class=\"footer-address\">\
			<p>Malaysian Global Innovation &amp; Creativity Centre,<br>\
			Block 3730, Persiaran APEC, <br>\
			63000 Cyberjaya, Malaysia.<br>\
			Tel: +60 3 8324 4800<br>\
			Email: enquiries@mymagic.my</p>\
		</div>\
	</div>\
	<hr />\
	<div class=\"row\">\
		<div class=\"col-md-6 social\">\
			<a href=\"https://www.facebook.com/magic.cyberjaya\" target=\"_blank\"><button class=\"btn btn-circle btn-md btn-facebook btn-gray-override\">&nbsp;<i class=\"fa fa-facebook\">&nbsp;</i></button></a>\
			<a href=\"https://twitter.com/magiccyberjaya\" target=\"_blank\"><button class=\"btn btn-circle btn-md btn-twitter btn-gray-override\">&nbsp;<i class=\"fa fa-twitter\">&nbsp;</i></button></a>\
			<a href=\"https://instagram.com/magic_cyberjaya\" target=\"_blank\"><button class=\"btn btn-circle btn-md btn-instagram btn-gray-override\">&nbsp;<i class=\"fa fa-instagram\">&nbsp;</i></button></a>\
			<a href=\"https://www.youtube.com/channel/UCIT_ihmWh5f3MCobvEwWMaA\" target=\"_blank\"><button class=\"btn btn-circle btn-md btn-google-plus btn-gray-override\">&nbsp;<i class=\"fa fa-youtube\">&nbsp;</i></button></a>\
		</div>\
		<div class=\"col-md-6 policy\">\
			<h6><a href=\"http://www.mymagic.my/privacy-policy\">Privacy Policy</a> | Initiated by M.O.F.</h6>\
		</div>\
	</div>\
	</div>"
	);
}

_muf.render();