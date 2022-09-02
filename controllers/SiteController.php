<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessController;
use app\models\Form;



class SiteController extends Controller
{
    public function actionIndex()
    {
        $model = new Form();

        if($model->load(Yii::$app->request->post()) && $model->validate()){

            $responseValue = ("Result is: ".$model->n1+$model->n2);

            return $this->render('index',['message'=>$responseValue,'model'=>$model]);

        }


        return $this->render('index', ['message'=>"",'model' => $model]);
        return $this->render('index');
    }
}
