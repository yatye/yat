<?php
/**
 * Created by PhpStorm.
 * User: ntezi
 * Date: 04/09/2016
 * Time: 12:53
 */

namespace app\modules\v1\controllers;


use app\components\BaseController;
use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;

class UserController extends  BaseController
{
    public $modelClass = 'app\modules\v1\models\User';

    public function actions()
    {
        $actions = parent::actions();

        ArrayHelper::remove($actions, 'index');
        ArrayHelper::remove($actions, 'view');
        ArrayHelper::remove($actions, 'create');
        ArrayHelper::remove($actions, 'update');
        ArrayHelper::remove($actions, 'delete');
        ArrayHelper::remove($actions, 'options');

        return ArrayHelper::merge($actions, [
            'index' => [
                'class' => 'app\modules\v1\actions\user\IndexAction',
                'modelClass' => $this->modelClass,
            ],
            'login' => [
                'class' => 'app\modules\v1\actions\user\LoginAction',
                'modelClass' => $this->modelClass,
            ],
        ]);
    }
}