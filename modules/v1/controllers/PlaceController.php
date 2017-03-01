<?php
/**
 * Created by PhpStorm.
 * User: ntezi
 * Date: 04/09/2016
 * Time: 11:34
 */

namespace app\modules\v1\controllers;


use Yii;
use yii\helpers\ArrayHelper;
use app\components\BaseController;

class PlaceController extends BaseController
{

    public $modelClass = 'app\modules\v1\models\Place';

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
                'class' => 'app\modules\v1\actions\place\IndexAction',
                'modelClass' => $this->modelClass,
            ],
        ]);
    }
}