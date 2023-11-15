<?php
// modules/settings/models/Setting.php

namespace app\modules\settings\models;

use yii\db\ActiveRecord;

class Setting extends ActiveRecord
{
    public static function tableName()
    {
        return 'setting';
    }
}
