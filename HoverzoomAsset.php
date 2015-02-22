<?php

/**
 * HoverzoomAsset
 * @author xjflyttp <xjflyttp@gmail.com>
 * @see http://www.htmldrive.net/items/demo_show/1133
 * @see http://www.htmldrive.net/items/show/1133/Awesome-jQuery-image-Swish-Zoom-Hover-Effect
 */

namespace xj\hoverzoom;

use yii\web\AssetBundle;

class HoverzoomAsset extends AssetBundle {

    public $sourcePath;
    public $basePath = '@webroot/assets';
    public $publishOptions = ['forceCopy' => YII_DEBUG];
    public $css = [];
    public $js = [];
    public $depends = ['yii\web\JqueryAsset'];

    private function getJs() {
        return [
            YII_DEBUG ? 'jquery.hover.zoom.js' : 'jquery.hover.zoom.min.js',
        ];
    }

    public function init() {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
        if (empty($this->js)) {
            $this->js = $this->getJs();
        }
        return parent::init();
    }

}
