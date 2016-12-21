#MaGIC Universal Header Bar
By embedding a js file inside your html file, you can automatically add MaGIC universal header bar to it. This bar is centralize so any changes to it will automatically reflect at all pages.

## Getting Started

```
composer install
```

## Server Setup
Remember to disable cloud flare cache to the directory using page rule：
```
*mymagic.my/universal-assets/*
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
### Header bar
All you need to do is add this javascript file. Please don't forget to the currentURL.
Ref: _test/withoutTarget.htm
```html
<body style="padding:0; margin:0">
  <!-- add this line -->
<script src="http://www.mymagic.my/universal-assets/uniheader.js"></script>
<script type="text/javascript">
      _muh.config.currentUrl = 'http://YOURURL';
      _muh.config.isLogin = {{Auth::check()}};
      _muh.render();
</script> 
       <!-- /add this line -->
</body>
```

In case the universal bar is not the top element of your webpage (eg: have flash notification), you may wanto override the auto setting by specified your own tag.
Ref: _test/withTarget.htm

```html
<body style="padding:0; margin:0">
  <div class="flash-msg">flash msg goes here...</div>
  <!-- add these line -->
  <div class="color-bar"></div><div class="uni-header"></div>
  <script src="http://www.mymagic.my/universal-assets/uniheader.js"></script>
  <script type="text/javascript">
        _muh.config.currentUrl = 'http://YOURURL';
        _muh.config.isLogin = {{Auth::check()}};
        _muh.render();
  </script> 
  <!-- /add these line -->
</body>
```

You can further customize how universal bar works by pass in the _muh.config after included the uniheader.js file.
Ref: _test/withConfig.htm
```html
<script src="http://www.mymagic.my/universal-assets/uniheader.js"></script>
<script type="text/javascript">
	// set the selected top level menu item
    _muh.config.selectedMenu1 = 'accelerator';
	// disable account dropdown (in case the application using this header havent integrate with connect yet), will just show as a link to connect
    _muh.config.disableAccount = true;
	// set current url in case we dont want use javascript auto detection. this will be pass to connect.
    _muh.config.currentUrl = 'http://YOURURL';
    // check the user AUTH whether is it true or false.
    _muh.config.isLogin = {{Auth::check()}};
    // always remember to call the render() function after done with the setting.
    _muh.render();
</script>
```

#### selectedMenu1 code:
  - magic
  - academy
  - accelerator
  - global
  - central
  - se
  - impact
  - account

### Footer bar
Including a universal footer is just almost the same with header bar. 
Except, it expect fontawesome is included. 

```html
<!-- fontawesome is required for footer -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
```
All you need to do is add this javascript file.
Ref: _test/withoutTarget.htm
``` html
<body style="padding:0; margin:0">
  <!-- add this line -->
  <script src="http://www.mymagic.my/universal-assets/unifooter.js"></script>
  <!-- /add this line -->
</body>
```

In case you wanto customize the footer bar by specify your own tag.
Ref: _test/withTarget.htm

```html
<body style="padding:0; margin:0">
  <!-- add these line -->
  <footer class="uni-footer"></footer>
  <script src="http://www.mymagic.my/universal-assets/unifooter.js"></script>
  <!-- /add these line -->
  
  <div>something else here.</div>
</body>
```

You may pass in custom configuration too.
Ref: _text/withConfig.htm

```html
<script src="http://www.mymagic.my/universal-assets/unifooter.js"></script>
<script type="text/javascript">
  // force to load font awesome from cdn
  _muf.config.isForceFAEnabled = true
  // always remember to call the render() function after done with the setting.
  _muf.render();
</script>
```
