<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\Response;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $response = Yii::$app->response;
        $response->statusCode = 200;
        $response->format = Response::FORMAT_JSON;
        $response->data = ["Response" => "200"];

        return $response;
    }

    public function actionError()
    {
        $response = Yii::$app->response;
        $response->statusCode = 404;
        $response->format = Response::FORMAT_JSON;
        $response->data = ["Response" => "404"];

        return $response;
    }
}
