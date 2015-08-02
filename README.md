#MaGIC Universal Header Bar
By embedding a js file inside your html file, you can automatically add MaGIC universal header bar to it. This bar is centralize so any changes to it will automatically reflect at all pages.

## Getting Started

```
composer install
```

## Requirements
Assume you already have the standard Bootstrap v3.3.5 includes (javascript & css)

```html
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
```

## How to use
All you need to do is add this javascript file.
Ref: _test/withoutHeader.htm
```html
<body style="padding:0; margin:0">
  <!-- add this line -->
  <script src="http://www.mymagic.my/universal-assets/uniheader.js"></script>
  <!-- /add this line -->
</body>
```

In case the universal bar is not the top element of your webpage (eg: have flash notification), you may wanto override the auto setting by specified your own tag.
Ref: _test/withHeader.htm

```html
<body style="padding:0; margin:0">
  <div class="flash-msg">flash msg goes here...</div>
  <!-- add these line -->
  <div class="color-bar"></div><div class="uni-header"></div>
  <script src="http://www.mymagic.my/universal-assets/uniheader.js"></script>
  <!-- /add these line -->
</body>
```

You can further customize how universal bar works by pass in the _muh.config after included the header file.
```html
<script src="http://www.mymagic.my/universal-assets/uniheader.js"></script>
<script type="text/javascript">
	// set the selected top level menu item
    _muh.config.selectedMenu1 = 'accelerator';
	// disable account dropdown (in case the application using this header havent integrate with connect yet), will just show as a link to connect
    _muh.config.disableAccount = true;
	// set current url in case we dont want use javascript auto detection. this will be pass to connect as redirect_uri.
    _muh.config.currentUrl = 'http://atasbe.mymagic.my';
	// always remember to call the render() function after done with the setting.
	_muh.render();
</script>
```

## selectedMenu1 code:
  - magic
  - academy
  - accelerator
  - global
  - central
  - se
  - impact
