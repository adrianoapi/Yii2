<?php

namespace app\controllers;

class SonTesteController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTeste()
    {
    	echo "rota teste execução";
    }

    public function actionTesteComposto()
    {
    	echo "rota composta teste execução";
    }

}
