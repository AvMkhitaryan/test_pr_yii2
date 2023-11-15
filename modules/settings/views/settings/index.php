<?php
// modules/settings/views/settings/index.php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Настройки';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="settings-index">
    <?php $form = ActiveForm::begin(); ?>

    <?php foreach ($settings as $setting): ?>
        <?= $form->field($setting, "[$setting->name]value")->label($setting->name)->textInput(['value' => $setting->value]) ?>
    <?php endforeach; ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
