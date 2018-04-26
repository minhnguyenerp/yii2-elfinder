<?php
/**
 * Created by PhpStorm.
 * User: Minh Nguyen
 * Date: 8/22/2016
 * Time: 3:07 PM
 */

namespace mihaildev\elfinder\themes;

use yii\web\AssetBundle;

class ElFinderMaterialAsset extends AssetBundle
{
    public $sourcePath = '@vendor/mihaildev/themes/vendor';
	
    public function init()
    {
        $this->css = [
            'elFinder-Material-Theme/css/theme.css',
        ];

        parent::init();
    }
}
