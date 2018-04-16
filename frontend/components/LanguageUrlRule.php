<?php

namespace app\components;
use yii\web\UrlRule;
use Yii;
/**
 * Created by PhpStorm.
 * User: davro
 * Date: 04.06.2017
 * Time: 18:47
 */
class LanguageUrlRule extends UrlRule
{
    public function init()
    {
        if ($this->pattern !== null) {
            $this->pattern = '<language>/' . $this->pattern;
            // for subdomain it should be:
            // $this->pattern =  'http://<language>.example.com/' . $this->pattern,
        }
        $this->defaults['language'] = Yii::$app->language;
        parent::init();
    }
}