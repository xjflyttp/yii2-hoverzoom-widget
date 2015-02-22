# yii2-hoverzoom-widget
http://www.htmldrive.net/items/demo_show/1133
http://www.htmldrive.net/items/show/1133/Awesome-jQuery-image-Swish-Zoom-Hover-Effect

composer.json
---------
```json
"require": {
    "xj/yii2-hoverzoom-widget": "*"
},
```

In View
---------
```php
use xj\hoverzoom\HoverzoomAsset;
HoverzoomAsset::register($this);
```

CSS
---------------
```css
.zoom { 
    width:293px; 
    height:170px; 
    display:block; 
    position:relative; 
    overflow:hidden; 
    border:1px solid #ddd; 
    background:#fff url(../images/hoverzoom/loader.gif) no-repeat center;
}
.zoom img { display:none }
.zoomOverlay {
    position:absolute;
    top:0; left:0;
    bottom:0; right:0;
    display:none;
    background-image:url(../images/hoverzoom/zoom.png);
    background-repeat:no-repeat;
    background-position:center;
}
```

HTML
----------------
```html
<div id="main">
    <div class="block">
        <a href="#" class="zoom" id="blue"><img src="<?= Yii::getAlias('@web/images/hoverzoom/1.jpg') ?>" alt="thumbnail" /></a>
    </div>

    <div class="block">
        <a href="#" class="zoom" id="green"><img src="<?= Yii::getAlias('@web/images/hoverzoom/2.jpg') ?>" alt="thumbnail" /></a>
    </div>

    <div class="block last">
        <a href="#" class="zoom" id="pink"><img src="<?= Yii::getAlias('@web/images/hoverzoom/3.jpg') ?>" alt="thumbnail" /></a>
    </div>
</div>
```


JS
--------------
```javascript
$('#blue').hoverZoom(); // Default

$('#green').hoverZoom({
    overlayColor: '#90bd2e',
    zoom: 50
});

$('#pink').hoverZoom({
    overlayColor: '#bd2e75',
    zoom: 0
});

/* USAGE
$('#pink').hoverZoom({
    overlay: true, // false to turn off (default true)
    overlayColor: '#2e9dbd', // overlay background color
    overlayOpacity: 0.7, // overlay opacity
    zoom: 25, // amount to zoom (px)
    speed: 300 // speed of the hover
});
*/
```