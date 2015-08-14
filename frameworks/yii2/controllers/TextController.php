<?php

namespace app\controllers;

use app\models\Text;
use yii\data\ActiveDataProvider;

class TextController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query'      => Text::find(),
            'pagination' => [
                'pageSize' => 500,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
