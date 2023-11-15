<?php
// modules/settings/controllers/SettingsController.php

namespace app\modules\settings\controllers;

use yii\web\Controller;
use app\modules\settings\models\Setting;

class SettingsController extends Controller
{
    public function actionIndex()
    {
        $settings = Setting::find()->all();

        if (\Yii::$app->request->post()) {
            foreach (\Yii::$app->request->post('Setting') as $name => $value) {
                $setting = Setting::findOne(['name' => $name]);
                if ($setting) {
                    $setting->value = $value;
                    $setting->save();
                }
            }
        }

        return $this->render('index', ['settings' => $settings]);
    }

    public function actionCreate()
    {
        // Реализация создания нового параметра
    }

    public function actionDelete($id)
    {
        // Реализация удаления параметра
    }
}
