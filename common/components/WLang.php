<?php

namespace common\components;

use common\models\Lang;
use \yii\bootstrap\Widget;

class WLang extends Widget
{
    public function init()
    {
    }

    public function run()
    {
        return $this->render('lang/view', [
            'current' => Lang::getCurrent(),
            'langs' => Lang::find()->all(),
        ]);
    }
}