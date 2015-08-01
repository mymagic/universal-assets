#MaGIC Universal Header Bar (centralize)
By embedding a js file inside your html file, you can automatically add MaGIC universal header bar to it.

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

