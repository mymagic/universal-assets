<?php header('Content-Type: application/javascript'); ?>
// create namespace _muh (magic universal header)
var _muh = _muh || {};

_muh.config = {};
_muh.config.isDebug = false;
_muh.config.isLogin = false;

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


// define urls here
var urls = [];
urls['magic'] = []; urls['magic']['default'] = '//www.mymagic.my'; urls['magic']['en'] = '//www.mymagic.my/en'; urls['magic']['ms'] = '//www.mymagic.my/ms';
urls['accelerator-home'] = []; urls['accelerator-home']['default'] = '//accelerator.mymagic.my'; urls['accelerator-home']['en'] = '//accelerator.mymagic.my/en'; urls['accelerator-home']['ms'] = '//accelerator.mymagic.my/ms';
urls['accelerator-asean'] = []; urls['accelerator-asean']['default'] = '//accelerator.mymagic.my/asean'; urls['accelerator-asean']['en'] = '//accelerator.mymagic.my/en/asean/'; urls['accelerator-asean']['ms'] = '//accelerator.mymagic.my/ms/asean/';
urls['accelerator-se'] = []; urls['accelerator-se']['default'] = '//accelerator.mymagic.my/se'; urls['accelerator-se']['en'] = '//accelerator.mymagic.my/en/se/'; urls['accelerator-se']['ms'] = '//accelerator.mymagic.my/ms/se/';
urls['accelerator-distroDojo'] = []; urls['accelerator-distroDojo']['default'] = '//accelerator.mymagic.my/distro-dojo'; urls['accelerator-distroDojo']['en'] = '//accelerator.mymagic.my/en/distro-dojo/'; urls['accelerator-distroDojo']['ms'] = '//accelerator.mymagic.my/ms/distro-dojo/';
urls['global'] = []; urls['global']['default'] = '//global.mymagic.my'; urls['global']['en'] = '//global.mymagic.my/en'; urls['global']['ms'] = '//global.mymagic.my/ms';
urls['central'] = []; urls['central']['default'] = '//central.mymagic.my'; urls['central']['en'] = '//central.mymagic.my/en'; urls['central']['ms'] = '//central.mymagic.my/ms';
urls['se'] = []; urls['se']['default'] = '//se.mymagic.my'; urls['se']['en'] = '//se.mymagic.my/en'; urls['se']['ms'] = '//se.mymagic.my/ms';
urls['ace'] = []; urls['ace']['default'] = '//ace.mymagic.my'; urls['ace']['en'] = '//ace.mymagic.my/en'; urls['ace']['ms'] = '//ace.mymagic.my/ms';
urls['impact'] = []; urls['impact']['default'] = '//impact.mymagic.my'; urls['impact']['en'] = '//impact.mymagic.my/en'; urls['impact']['ms'] = '//impact.mymagic.my/ms';
_muh.urls = urls;

_muh.setLanguage = function(lang)
{
    lang = typeof lang !== 'undefined' ? lang : 'en';
    for (var urlKey in _muh.urls)
    {
        var url = urls[lang];
        $(".uni-header").find('a[data-url-code="'+urlKey+'"]').prop('href', _muh.urls[urlKey][lang]);
    }

    var langMenuHtml = '<a href=\"//www.mymagic.my/en\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">\
		English <span class=\"glyphicon glyphicon-triangle-bottom\" aria-hidden=\"true\"></span>\
	</a>\
	<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"Child Item\">\
		<li><a href=\"//www.mymagic.my/ms\">Bahasa Melayu</a></li>\
	</ul>';

    if(lang == 'ms')
    {
        langMenuHtml = '<a href=\"//www.mymagic.my/ms\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">\
			Bahasa Melayu <span class=\"glyphicon glyphicon-triangle-bottom\" aria-hidden=\"true\"></span>\
		</a>\
		<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"Child Item\">\
			<li><a href=\"//www.mymagic.my/en\">English</a></li>\
		</ul>';
    }

    $('.uni-header').find('li[data-menu1="language"]').html(langMenuHtml);
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

    if(_muh.config.isLogin)
    {
        bufferLogin = "<li class=\"dropdown\" data-menu1=\"account\">\
            <a href=encodeURI(_muh.config.currentLogin) class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Account <span class=\"glyphicon glyphicon-triangle-bottom\" aria-hidden=\"true\"></span>\
            </a>\
            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"Child Item\">\
                <li><a href=\"//account.mymagic.my/profile\">Profile</a></li>\
                <li><a href= \"//account.mymagic.my/logout?redirect_uri=\" + encodeURI(_muh.config.currentLogout)>Logout</a></li>\
            </ul>\
        </li>";
    }
    else
    {
         bufferLogin = "<li data-menu1=\"account\">\
            <a href=encodeURI(_muh.config.currentLogin)>Account</a>\
        </li>";
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
				<a href=\"//www.mymagic.my\" data-url-code=\"magic\">\
				<span class=\"glyphicon glyphicon-home\"></span> MaGIC\
				</a>\
			</li>\
			<li data-menu1=\"academy\">\
				<a href=\"//academy.mymagic.my\" data-url-code=\"academy\">Academy</a>\
			</li>\
			<li class=\"dropdown\" data-menu1=\"accelerator\">\
				<a href=\"#\" class=\"dropdown-toggle \" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Accelerator <span class=\"glyphicon glyphicon-triangle-bottom\" aria-hidden=\"true\"></span></a>\
				<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"Child Item\">\
					<li data-menu2=\"home\"><a href=\"//accelerator.mymagic.my\" data-url-code=\"accelerator-home\">Home</a></li>\
					<li data-menu2=\"asean\"><a href=\"//accelerator.mymagic.my/en/asean\"  data-url-code=\"accelerator-asean\">ASEAN</a></li>\
					<li data-menu2=\"se\"><a href=\"//accelerator.mymagic.my/en/se\"  data-url-code=\"accelerator-se\">SE</a></li>\
					<li data-menu2=\"distroDojo\"><a href=\"//accelerator.mymagic.my/en/distro-dojo\" data-url-code=\"accelerator-distroDojo\">Distro Dojo</a></li>\
				</ul>\
			</li>\
			<li data-menu1=\"global\">\
				<a href=\"//global.mymagic.my\" data-url-code=\"global\">Global</a>\
			</li>\
			<li data-menu1=\"central\">\
				<a href=\"//central.mymagic.my\" data-url-code=\"central\">Central</a>\
			</li>\
			<li data-menu1=\"se\">\
				<a href=\"//se.mymagic.my\" data-url-code=\"se\">SE</a>\
			</li>\
			<li data-menu1=\"ACE\">\
				<a href=\"http://ace.mymagic.my\" data-url-code=\"ace\">ACE</a>\
			</li>\
			<li data-menu1=\"impact\">\
				<a href=\"//impact.mymagic.my\" data-url-code=\"impact\">Impact</a>\
			</li>\
		  </ul>\
          <ul class=\"nav navbar-nav navbar-right border-line\">\
            <li class=\"dropdown\" data-menu1=\"language\"></li>"+
            bufferLogin+
         "</ul>\
    </div>\
    </div>\
    ");

    var re = new RegExp("(http:\/\/)?" + window.location.host);
    var currentMenuItem = $("a[href=\'//" + window.location.host + "']");

    if (re.test(currentMenuItem.prop("href")))
    {
        currentMenuItem.parent().addClass("current-menu-item");
    }

    if(_muh.config && _muh.config.selectedMenu1 != "")
    {
        $('.uni-header li').removeClass('current-menu-item');
        $('.uni-header li[data-menu1="'+_muh.config.selectedMenu1+'"]').addClass('current-menu-item');
    }

    if(_muh.config && _muh.config.disableAccount == true)
    {
        $('.uni-header li[data-menu1="account"]').removeClass('dropdown');
        $('.uni-header li[data-menu1="account"] a').removeClass('dropdown-toggle').removeAttr('data-toggle');
        $('.uni-header li[data-menu1="account"] span.glyphicon').hide();
        $('.uni-header li[data-menu1="account"] ul').hide();
        $('.uni-header li[data-menu1="account"]').hide();
    }

    if(_muh.config && _muh.config.disableLanguage == true)
    {
        $('.uni-header li[data-menu1="language"]').hide();
    }

}

_muh.render();
