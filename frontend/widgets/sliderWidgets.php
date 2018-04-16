<?php

namespace frontend\widgets;
use common\models\Categories;
use common\models\Slider;
use yii\base\Widget;


class sliderWidgets extends Widget{


    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {

        $sliders = Slider::find()->orderBy(['created_at' => SORT_DESC])->all();
        return $this->render('_slider', ['sliders' => $sliders]);
    }
}