<?php
require "vendor/autoload.php";
use MyMagic\Connect\Wrapper;
Wrapper::init("http://academy.mymagic.my");
header('Content-Type: application/javascript');
?>

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
          <a href=\"http://mymagic.my\">\
            <span class=\"glyphicon glyphicon-home\"></span> MaGIC\
          </a>\
        </li>\
        <li class=\"dropdown\">\
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Dropdown Menu <span class=\"glyphicon glyphicon-triangle-bottom\" aria-hidden=\"true\"></span>\
            </a>\
            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"Child Item\">\
                <li>\
                    <a href=\"#\">Child Item</a>\
                </li>\
            </ul>\
        </li>\
      </ul>\
      <ul class=\"nav navbar-nav navbar-right border-line\">\
        <li class=\"dropdown\">\
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Account <span class=\"glyphicon glyphicon-triangle-bottom\" aria-hidden=\"true\"></span>\
            </a>\
            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"Child Item\">\
              <? if (Wrapper::isUserLoggedIn()) { ?>
                <li>\
                    <a href=\"http://connect.mymagic.my/logout?redirect_uri=<?= Wrapper::$client_url ?>\">Logout</a>\
                </li>\
              <? } ?>
            </ul>\
        </li>\
      </ul>\
    </div>\
  </div>\
");
