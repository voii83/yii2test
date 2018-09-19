<?php

namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller
{
    public function actionIndex($id=null)
    {
        $var = 'Text variable';
        $mass = [
            'element1',
            'element2',
            'element3'
        ];
       // передача параметров в view
       // return $this->render('index',['$variable' => $var, 'massiv' => $mass]);

       // более компактная запись
       return $this->render('index', compact('var', 'mass', 'id'));
    }
}