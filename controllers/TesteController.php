<?php

namespace app\controllers;

use app\models\Course;

class TesteController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $curses = Course::find()->all();
        
        foreach($curses as $curse):
        	echo "{$curse->id} - {$curse->name} - {$curse->hours}<br>";
        endforeach;
    }

    public function actionMaisParametros($id, $name)
    {
    	echo "$id - $name";die();
    }

}
