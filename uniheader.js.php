<?php
	require "vendor/autoload.php";
	use MyMagic\Connect\Wrapper;
	$connectOk = false;
	try
	{
		Wrapper::init();
		$connectOk = true;
	}
	catch(Exception $e){}
	header('Content-Type: application/javascript');
?>

// create namespace _muh (magic universal header)
var _muh = _muh || {};

_muh.config = {};
_muh.config.isDebug = false;
	
_muh.checkStyleSheet = function(url)
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

_muh.render =  function()
{
	if(_muh.config.currentUrl == null) _muh.config.currentUrl = window.location.href;
	
	// load external css for color-bar and uni-header
	if(_muh.config.isDebug)
	{
		_muh.checkStyleSheet('../css/universal-style.css');
	}
	else
	{
		_muh.checkStyleSheet('//www.mymagic.my/universal-assets/css/universal-style.css');
	}

	// auto create color-bar and uni-header if tag not found
	if( !$('.color-bar').length && !$('.uni-header').length )
	{
		$("body").prepend( '<div class="color-bar"></div><div class="uni-header"></div>' );
	}
	$(".uni-header").empty();
	$(".uni-header").prepend("\
	<div class=\"container\">\
		<div class=\"navbar-header\">\
			<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#uni-header-collapse\">\
				<span class=\"sr-only\">Toggle navigation</span>\
				<span class=\"icon-bar\"></span>\
				<span class=\"icon-bar\"></span>\
				<span class=\"icon-bar\"></span>\
			</button>\
		</div>\
		<div class=\"collapse navbar-collapse\" id=\"uni-header-collapse\">\
		<ul class=\"nav navbar-nav\">\
			<li data-menu1=\"magic\">\
				<a href=\"//www.mymagic.my\">\
				<span class=\"glyphicon glyphicon-home\"></span> MaGIC\
				</a>\
			</li>\
			<li data-menu1=\"academy\">\
				<a href=\"//academy.mymagic.my\">Academy</a>\
			</li>\
			<li class=\"dropdown\" data-menu1=\"accelerator\">\
				<a href=\"#\" class=\"dropdown-toggle \" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Accelerator <span class=\"glyphicon glyphicon-triangle-bottom\" aria-hidden=\"true\"></span></a>\
				<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"Child Item\">\
					<li data-menu2=\"home\"><a href=\"//accelerator.mymagic.my\">Home</a></li>\
					<li data-menu2=\"asean\"><a href=\"//accelerator.mymagic.my/en/asean\">ASEAN</a></li>\
					<li data-menu2=\"se\"><a href=\"//accelerator.mymagic.my/en/se\">SE</a></li>\
					<li data-menu2=\"distroDojo\"><a href=\"//accelerator.mymagic.my/en/distrodojo\">Distro Dojo</a></li>\
				</ul>\
			</li>\
			<li data-menu1=\"global\">\
				<a href=\"//global.mymagic.my\">Global</a>\
			</li>\
			<li data-menu1=\"central\">\
				<a href=\"//central.mymagic.my\">Central</a>\
			</li>\
			<li data-menu1=\"se\">\
				<a href=\"//se.mymagic.my\">SE</a>\
			</li>\
			<li data-menu1=\"ACE\">\
				<a href=\"http://ace.mymagic.my\">ACE</a>\
			</li>\
			<li data-menu1=\"1AES\">\
				<a href=\"http://mymagic.my/en/1aes\">1AES</a>\
			</li>\
			<li data-menu1=\"impact\">\
				<a href=\"//impact.mymagic.my\">Impact</a>\
			</li>\
		  </ul>\
		 <ul class=\"nav navbar-nav navbar-right border-line\">\
			<li class=\"dropdown\" data-menu1=\"language\">\
				<a href=\"//www.mymagic.my/en\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">EN <span class=\"glyphicon glyphicon-triangle-bottom\" aria-hidden=\"true\"></span>\
				</a>\
				<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"Child Item\">\
					<li><a href=\"//www.mymagic.my/ms\">Bahasa Melayu</a></li>\
				</ul>\
			</li>\
			<?php if(!$connectOk): ?>
				<li data-menu1=\"account\">\
					<a href=\"//connect.mymagic.my/?redirect_uri="+encodeURI(_muh.config.currentUrl)+"\">Account</a>\
				</li>\
			<?php else: ?>
			<li class=\"dropdown\" data-menu1=\"account\">\
				<a href=\"//connect.mymagic.my/?redirect_uri="+encodeURI(_muh.config.currentUrl)+"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Account <span class=\"glyphicon glyphicon-triangle-bottom\" aria-hidden=\"true\"></span>\
				</a>\
				<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"Child Item\">\
				  <? if (Wrapper::isUserLoggedIn()): ?>
					<li>\
						<a href=\"//connect.mymagic.my/profile\">Profile</a>\
					</li>\
					<li>\
						<a href=\"//connect.mymagic.my/logout?redirect_uri=" + encodeURI(_muh.config.currentUrl) + "\">Logout</a>\
					</li>\
				  <? endif; ?>
				</ul>\
			</li>\
			<?php endif; ?>
		 </ul>\
		</div>\
	  </div>\
	");

	var re = new RegExp("(http:\/\/)?" + window.location.host);
	var currentMenuItem = $("a[href=\'//" + window.location.host + "']");

	if (re.test(currentMenuItem.prop("href"))) {
	  currentMenuItem.parent().addClass("current-menu-item");
	}
	
	if(_muh.config && _muh.config.selectedMenu1 != ""){
		$('.uni-header li').removeClass('current-menu-item');
		$('.uni-header li[data-menu1="'+_muh.config.selectedMenu1+'"]').addClass('current-menu-item');
	}
	
	if(_muh.config && _muh.config.disableAccount == true)
	{
		$('.uni-header li[data-menu1="account"]').removeClass('dropdown');
		$('.uni-header li[data-menu1="account"] a').removeClass('dropdown-toggle').removeAttr('data-toggle');
		$('.uni-header li[data-menu1="account"] span.glyphicon').hide();
		$('.uni-header li[data-menu1="account"] ul').hide();
	}
	
	if(_muh.config && _muh.config.disableLanguage == true){
		$('.uni-header li[data-menu1="language"]').hide();
	}

}

_muh.render();