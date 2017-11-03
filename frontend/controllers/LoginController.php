<?php

namespace frontend\controllers;

use Yii;

class LoginController extends \yii\web\Controller
{

    protected function logincheck()
    {
        if (Yii::$app->user->isGuest && ($this->action->id !== 'login' || Yii::$app->controller->id !== 'site')) {
            return $this->redirect(['site/login']);
        }
    }

}
