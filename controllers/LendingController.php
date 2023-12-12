<?php

namespace app\controllers;

use yii\web\Controller;

class LendingController extends Controller
{
    public $layout = 'lending';
    public function actionSite(){
        return $this ->render('index');
    }
}