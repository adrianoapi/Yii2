<?php

namespace app\controllers;

class TesteController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
    	$request = \Yii::$app->request;
    	$xpto    = $request->get('xpto');
        return $this->render('index', array('id' => $id, 'xpto' => $xpto));
    }

}
