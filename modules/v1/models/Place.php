<?php
/**
 * Created by PhpStorm.
 * User: ntezi
 * Date: 04/09/2016
 * Time: 11:25
 */

namespace app\modules\v1\models;

use Yii;
use app\models\Place as BasePlace;

class Place extends BasePlace
{
    public function fields()
    {
        $fields = parent::fields();

        // remove fields that contain sensitive information
        unset(
            $fields['code'],
            $fields['province_id'],
            $fields['district_id'],
            $fields['sector_id'],
            $fields['cell_id'],
            $fields['village_id'],
            $fields['created_at'],
            $fields['updated_at'],
            $fields['created_by'],
            $fields['main']
        );

        return $fields;

    }


}