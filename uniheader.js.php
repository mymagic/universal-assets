<?php
require "vendor/autoload.php";
use MyMagic\Connect\Wrapper;
$connectOk = false;
try
{
	Wrapper::init("http://academy.mymagic.my");
	$connectOk = true;
}
catch(Exception $e){}
header('Content-Type: application/javascript');
?>

function checkStyleSheet(url)
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

// load external css for color-bar and uni-header
checkStyleSheet('http://www.mymagic.my/universal-assets/css/bootstrap-social.css');
checkStyleSheet('http://www.mymagic.my/universal-assets/css/universal-style.css');

// auto create color-bar and uni-header if tag not found
if( !$('.color-bar').length && !$('.uni-header').length )
{
	$("body").prepend( '<div class="color-bar"></div><div class="uni-header"></div>' );
}

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
		<li>\
			<a href=\"http://www.mymagic.my\">\
			<span class=\"glyphicon glyphicon-home\"></span> MaGIC\
			</a>\
		</li>\
		<li>\
			<a href=\"http://academy.mymagic.my\">Academy</a>\
		</li>\
		<li class=\"dropdown\">\
			<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Accelerator <span class=\"glyphicon glyphicon-triangle-bottom\" aria-hidden=\"true\"></span></a>\
			<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"Child Item\">\
				<li><a href=\"http://acelerator.mymagic.my\">Home</a></li>\
				<li><a href=\"http://acelerator.mymagic.my/en/asean\">ASEAN</a></li>\
				<li><a href=\"http://acelerator.mymagic.my/en/se\">SE</a></li>\
				<li><a href=\"http://acelerator.mymagic.my/en/distrodojo\">Distro Dojo</a></li>\
			</ul>\
		</li>\
		<li>\
			<a href=\"http://global.mymagic.my\">Global</a>\
		</li>\
		<li>\
			<a href=\"http://central.mymagic.my\">Central</a>\
		</li>\
		<li>\
			<a href=\"http://se.mymagic.my\">SE</a>\
		</li>\
		<li>\
			<a href=\"http://impact.mymagic.my\">Impact</a>\
		</li>\
      </ul>\
     <ul class=\"nav navbar-nav navbar-right border-line\">\
		<li class=\"dropdown\">\
			<a href=\"http://www.mymagic.my/en\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">EN <span class=\"glyphicon glyphicon-triangle-bottom\" aria-hidden=\"true\"></span>\
			</a>\
			<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"Child Item\">\
				<li><a href=\"http://www.mymagic.my/ms\">Bahasa Melayu</a></li>\
			</ul>\
		</li>\
		<?php if(!$connectOk): ?>
			<li>\
				<a href=\"http://connect.mymagic.my\">Account</a>\
			</li>\
		<?php else: ?>
		<li class=\"dropdown\">\
			<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Account <span class=\"glyphicon glyphicon-triangle-bottom\" aria-hidden=\"true\"></span>\
			</a>\
			<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"Child Item\">\
			  <? if (Wrapper::isUserLoggedIn()): ?>
				<li>\
					<a href=\"http://connect.mymagic.my/logout?redirect_uri=<?= Wrapper::$client_url ?>\">Logout</a>\
				</li>\
			  <? endif; ?>
			</ul>\
		</li>\
		<?php endif; ?>
     </ul>\
    </div>\
  </div>\
");
